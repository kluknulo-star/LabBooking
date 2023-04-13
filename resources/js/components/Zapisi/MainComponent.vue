<template>
    <div id="main"> 

    <div class="conteiner">   
    <label>Группа</label>
    <br>
    <select class="box_selector" v-model="currentGroup" @change="changeCurrentGroup()">
        <template v-for="group in groups">
            <option :value="group.id">
                {{ group.title }}
            </option>
        </template>
    </select>
    </div> 
    

    <!-- зависит от группы currentGroup -->
    <div class="conteiner">   
        <label>Студент</label>
        <br>
        <select class="box_selector" v-model="currentStudent" @change="getDays()">

            <template v-for="student in students">
                <option :value="student.id">
                    {{ student.fio }}
                </option>
            </template>
        </select>
    </div>

    
    <!-- зависит от группы currentGroup -->
    <div class="conteiner"> 
        <label>Дисциплина</label>
        <br>
        <select class="box_selector" v-model="currentDiscipline">
            <template v-for="discipline in disciplins">
                <option :value="discipline.id">
                    {{ discipline.title }}
                </option>
            </template>
        </select>
    </div>

    

    <!-- зависит от группы currentGroup -->
    <div class="conteiner"> 
        <label>Дата</label>
        <br>
        <select class="box_selector" v-model="currentDay" @change="changeCurrentDay()">
            <template v-for="day in days">
                <option :value="day.id">
                    {{ day.day }}
                </option>
            </template>
        </select>
    </div>

   

    <!-- зависит от дня currentDay -->
    <div class="conteiner"> 
        <label>Время</label>
        <br>
        <select class="box_selector" v-model="currentLabLesson" @change="changeCurrentDayTime()">
            <template v-for="labLesson in labLessons">
                <option :value="labLesson">
                    {{ labLesson.time_lesson.title }}
                </option>
            </template>
        </select>
    </div> 
    <div class="conteiner"> 
        <label>Кабинет</label>
        <br>
        <select class="box_selector" v-model="currentLabLesson.cabinet">
            <option :value="currentLabLesson.cabinet">
                {{ currentLabLesson.cabinet.title }}
            </option>
        </select>
    </div>  
    <div class="conteiner"> 
        <label>Преподаватель</label>
        <br>
        <select class="box_selector" v-model="currentLabLesson.teacher">
            <option :value="currentLabLesson.teacher">
                {{ currentLabLesson.teacher.fio }}
            </option>
        </select>
    </div> 
    </div>
    <br><br>

    <template v-if="abilityRecord.error">
    {{ abilityRecord.error }}
    </template>

     

    <template v-if="abilityRecord.error">
        <div>
            <button disabled class="boot">
                Записаться
            </button>
        </div>
    </template>

    <template v-if="!abilityRecord.error">
        <div>
            <button class="boot">
                Записаться
            </button>
        </div>
    </template>



<div>
    <button class="boot">
        Записавшиеся
    </button>
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
            console.log(this.currentGroup);
            this.getStudents();
            this.getDisciplins();
            this.currentStudent = null
            this.currentDiscipline = null
            this.currentDay = null
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
            // console.log(`/api/days/${this.currentDay}/time_lesson/${this.currentLabLesson.time_lesson.id}/studnets/${this.currentStudent}/cabinets/${this.currentLabLesson.cabinet.id}`)
            axios.get(`/api/days/${this.currentDay}/timeLessons/${this.currentLabLesson.time_lesson.id}/students/${this.currentStudent}/cabinets/${this.currentLabLesson.cabinet.id}`).then(response => {
                // /days/{day}/timeLessons/{timeLesson}/students/{student}/cabinets/{cabinet}
                console.log(response.data)
                this.abilityRecord = response.data
            })
        },

    }

}
</script>
<script setup>
</script>
