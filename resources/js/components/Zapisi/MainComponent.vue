<template>

    <label>Группа</label>
    <select v-model="currentGroup" @change="changeCurrentGroup()">
        <template v-for="group in groups">
            <option :value="group.id">
                {{ group.title }}
            </option>
        </template>
    </select>

    <br><br>

    <!-- зависит от группы currentGroup -->

    <label>Студент</label>
    <select v-model="currentStudent" @change="getDays()">

        <template v-for="student in students">
            <option :value="student.id">
                {{ student.fio }}
            </option>
        </template>
    </select>


    <br><br>
    <!-- зависит от группы currentGroup -->

    <label>Дисциплина</label>
    <select v-model="currentDiscipline" @change="getLabs()">
        <template v-for="discipline in disciplins">
            <option :value="discipline.id">
                {{ discipline.title }}
            </option>
        </template>
    </select>


    <br><br>

    <!-- зависит от группы currentGroup -->

    <label>Дата</label>
    <select v-model="currentDay" @change="changeCurrentDay()">
        <template v-for="day in days">
            <option :value="day.id">
                {{ day.day }}
            </option>
        </template>
    </select>


    <br><br>

    <!-- зависит от дня currentDay -->

    <label>Время</label>
    <select v-model="currentLabLesson" @change="changeCurrentDayTime()">
        <template v-for="labLesson in labLessons">
            <option :value="labLesson">
                {{ labLesson.time_lesson.title }}
            </option>
        </template>
    </select>
    <label>Кабинет</label>
    <select v-model="currentLabLesson.cabinet">
        <option :value="currentLabLesson.cabinet">
            {{ currentLabLesson.cabinet.title }}
        </option>
    </select>
    <label>Преподаватель</label>
    <select v-model="currentLabLesson.teacher">
        <option :value="currentLabLesson.teacher">
            {{ currentLabLesson.teacher.fio }}
        </option>
    </select>
    <br><br>
    <template v-if="(abilityRecord.free_switches || abilityRecord.free_routers)">
        Свободно: <b>{{ abilityRecord.free_routers }}</b> роутер(а)(ов), <b>{{ abilityRecord.free_switches }}</b>
        коммутатор(а)(ов)
        <br><br>
    </template>

    <label>Лаборатнорная</label>
    <select v-model="currentLab" @change="checkEquipment()">
        <template v-for="lab in labs">
            <option :value="lab">
                {{ lab.title }}
            </option>
        </template>
    </select>

    <br><br>

    <template v-if="abilityRecord.error">
        {{ abilityRecord.error }}
    </template>

    <template v-if="abilityRecord.error">
        <div>
            <button disabled class="btn-record">
                Записаться
            </button>
        </div>
    </template>

    <template v-if="!abilityRecord.error">
        <div>
            <button class="btn-record">
                Записаться
            </button>
        </div>
    </template>


    <div>
        <a href="/records" class="href">
            Записавшиеся
        </a>
    </div>

</template>


<script>
export default {


    data() {
        return {
            groups: null,
            students: null,
            disciplins: null,
            currentGroup: null,
            currentStudent: null,
            currentDiscipline: null,
            days: null,
            currentDay: null,
            labLessons: null,
            currentLabLesson: {
                'id': null,
                'teacher': {
                    'fio': null,
                },
                'time_lesson': {
                    'id': null,
                    'title': null
                },
                'cabinet': {
                    'id': null,
                    'title': null,
                },
            },
            currentTeacher: null,
            abilityRecord: {
                'error': null,
                'free_seats': null,
                'free_routers': null,
                'free_switches': null,
            },
            labs: null,
            currentLab: {
                'id': null,
                'title': null,
                'routers': null,
                'switches': null
            },

        }
    },

    mounted() {
        this.getGroups()
        this.getDays()
    },

    methods: {
        getGroups() {
            axios.get('/api/groups')
                .then(response => {
                    this.groups = response.data
                })
        },

        changeCurrentGroup() {
            this.getStudents();
            this.getDisciplins();
            this.currentStudent = null
            this.currentDiscipline = null
            this.currentDay = null
        },

        getLabs() {
            axios.get(`/api/disciplins/${this.currentDiscipline}/labs`)
                .then(response => {
                    this.labs = response.data
                })
        },

        getStudents() {
            this.students = null
            axios.get(`/api/groups/${this.currentGroup}/students`)
                .then(response => {
                    this.students = response.data.length !== 0 ? response.data : null
                })
        },

        getDisciplins() {
            this.disciplins = null
            axios.get(`/api/groups/${this.currentGroup}/disciplins`)
                .then(response => {
                    this.disciplins = response.data
                })
        },

        getDays() {
            axios.get(`/api/days`).then(response => {
                this.days = response.data
            })
        },

        changeCurrentDay() {
            axios.get(`/api/days/${this.currentDay}/labLessons`).then(response => {
                console.log(response.data)
                this.labLessons = response.data
            })
        },


        changeCurrentDayTime() {
            axios.get(`/api/days/${this.currentDay}/timeLessons/${this.currentLabLesson.time_lesson.id}/students/${this.currentStudent}/cabinets/${this.currentLabLesson.cabinet.id}`).then(response => {
                console.log(response.data)
                this.abilityRecord = response.data
            })
        },

        checkEquipment() {
            this.changeCurrentDayTime()
            this.abilityRecord.error = null
            if ((this.abilityRecord.free_routers - this.currentLab.routers) < 0 ||
                (this.abilityRecord.free_switches- this.currentLab.switches) < 0) {
                this.abilityRecord.error = `Недостаточно железа! Для вашей лабы нужно ${this.currentLab.routers} роутер(а)(ов), ${this.currentLab.switches} коммутатор(а)(ов)`
            }
        },

        sendRecord(){
            this.checkEquipment()
            let record = {
                'student_id': this.currentStudent,
                'day_id': this.currentDay,
                'time_lesson_id': this.currentLabLesson.time_lesson.id,
                'cabinet_id': this.currentLabLesson.cabinet.id,
                'teacher_id': this.currentLabLesson.teacher.id,
                'lab_id': this.currentLab.id,
            }
            if (abilityRecord.error === null){
             axios.post(`/api/records/`, record)
                 .then()
            }
        }
    }

}
</script>
<script setup>
</script>
