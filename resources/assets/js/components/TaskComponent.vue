<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Crea tus tareas pendientes</div>

                    <div v-if="message" class="alert alert-success">
                        {{ message }}
                    </div>

                   
                </div>

                <form action="" method="post">

                        <input type="text" name="taskName" v-model="taskName" class="form-control" placeholder="escribe tu tarea aqui">
                        <input type="button" value="crear tarea" v-on:click="crearTask()">
                    </form>

                    <br><br>

                    <h2>Listado de tareas</h2>
                    <div class="alert alert-success" v-if="taskStatus != ''">{{ taskStatus }}</div>
                  <div class="list-group" v-for="task in tasks" v-bind:key="task.id">
                        <a href="@" v-on:click.prevent="changeTaskStatus(task.id)" :class="[ task.isCompleted ? 'list-group-item-success' : 'list-group-item-danger' ]" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ task.name }}</h5>
                        <small>{{ task.created_at }}</small>
                        </div>
                        <p class="mb-1">{{ task.name }}</p>
                        <small>Donec id elit non mi porta.</small>
                        </a>
                
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios';

    export default {

        data: function () {
            return {
                tasks: [],
                taskName: '',
                message: '',
                isClicked: false,
                taskStatus: ''
             }
        },
    
        mounted() {
            //console.log('Component mounted.')
            this.getAllTasks();
        },

        methods: {

            getAllTasks(){
                
                this.tasks = axios.get('http://localhost:8000/api/allTasks').then(data => {
                    //console.log(data.data)
                    this.tasks = data.data
                })
                
                return this.tasks

                 },

            crearTask(){
                axios.post('http://localhost:8000/api/createTask', {name: this.taskName}).then(response => {
                    //console.log(response)
                    this.taskName = ''
                    this.getAllTasks()
                    this.message = response.data

                }).catch(error => {
                    console.log(error.response)
                })
            },

            changeTaskStatus(id){

                axios.get('http://localhost:8000/api/taskStatus/'+id).then(response => {
                    this.getAllTasks()
                    this.taskStatus = response.data;
                }).catch( error => {
                    console.log(error)
                })

            }
        }
    }
</script>
