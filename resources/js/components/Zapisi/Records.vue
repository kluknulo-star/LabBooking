<template>

<div style="float: right;">
    <router-link :to="{name: 'zapisi.index'}" class="boot">Записаться</router-link>
</div>

<br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Студент</th>
            <th>Группа</th>
            <th>Предмет</th>
            <th>Дата</th>
            <th>Пара</th>
            <th>Кабинет</th>
            <th>№ лаб.работы</th>
            <th>Преподаватель</th>
        </tr>
    </thead>
    <tbody>
        <template v-for="record in records">
        <tr>
            <td>{{ record.id }}</td>
            <td>{{ record.student }}</td>
            <td>{{ record.group }}</td>
            <td>{{ record.discipline }}</td>
            <td>{{ record.day }}</td>
            <td>{{ record.time_lesson }}</td>
            <td>{{ record.cabinet }}</td>
            <td>{{ record.lab }}</td>
            <td>{{ record.teacher }}</td>
        </tr>
        </template>
    </tbody>
</table>





</template>


<script>
export default {


    data() {
        return {
            records: null,
            record: {
                'id': null,
                'student': null,
                'group': null,
                'discipline': null,
                'day': null,
                'time_lesson': null,
                'cabinet': null,
                'lab': null,
                'teacher': null,
                },
                
            }
    },

    mounted() {
        this.getRecords()
    },

    methods: {
        getRecords() {
            axios.get('api/records')
            .then(response => {
                    this.records = response.data
                })
        }

    }

}
</script>
<script setup>
</script>
