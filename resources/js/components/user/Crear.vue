
<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h1>Crear User</h1>
                        </div>
    
                    </div>
                    <div class="card-body">
                            <form @submit.prevent="crear">
                                <div class="row">
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                        <label>Nombre</label>
    
                                        <input type="text" class="form-control" v-model="user.nombre">
                                        </div>
                                    </div>
                                  <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                        <label>Apellidos</label>
    
                                        <input type="text" class="form-control" v-model="user.apellidos">
                                        </div>
                                    </div>
                                  <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                        <label>Sexo</label>
    
                                        <input type="text" class="form-control" v-model="user.sexo">
                                        </div>
                                    </div>
                                  <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                        <label>Edad</label>
    
                                        <input type="text" class="form-control" v-model="user.edad">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                          <label>Email</label>
                                            <input  class="form-control" v-model="user.email" >
    
                                            
                                        
    
                                        </div>
                                    </div>
                                    <div class="clo-lg-12 mb-2">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
    </template>
    <script>
    export default {
        name:"crear-user",
        data(){
            return{
                user:{
                    nombre:"",
                    apellidos:"",
                  sexo:"",
                    edad:"",
                  email:"",
                    
                }
            }
        },
    
        methods:{
           async crear(){
               await this.axios.post('/api/user', this.user)
                .then(response=>{
                    this.$router.push({name:"mostrarUsers"})
                })
                .catch(error=>{
                    console.log(error);
                })
            }
        }
    }
    </script>