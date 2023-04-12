<template>

<select v-model="currentStream" @change="changeCurrentStream()">
    <template v-for="group in groups">
        <option :value="group.id">
            {{group.title}}
        </option>
    </template>
</select>

<br><br>

<!-- зависит от группы currentStream -->
<select v-model="currentStudent">
    <template v-for="student in students">
        <option :value="student.id">
            {{student.fio}}
        </option>
    </template>
</select>

<br><br>
<!-- зависит от группы currentStream -->
<select v-model="currentDisciplins">
    <template v-for="discipline in disciplins">
        <option :value="discipline.id">
            {{discipline.title}}
        </option>
    </template>
</select>

<br>




</template>

<script>
    export default {


    data() {
        return {
            groups: null,
            students: null,
            disciplins: null,
            currentStream: null,
            currentStudent: null,
            currentDisciplins: null,
        }
    },

    mounted() {
            this.getStreams()
        },

    methods: {
        getStreams() {
            axios.get('/api/groups')
            .then(response => {
                this.groups = response.data
            })
        },

        changeCurrentStream(){
            console.log(this.currentStream);
            this.getStudents();
            this.getDisciplins();
        },

        getStudents() {
            this.students = null
            axios.get(`/api/groups/${this.currentStream}/students`)
            .then(response => {
                this.students = response.data
            })
        },

        getDisciplins() {
            this.disciplins = null
            axios.get(`/api/groups/${this.currentStream}/disciplins`)
            .then(response => {
                console.log(response.data)
                this.disciplins = response.data
            })
        }
    }

    }
</script>
