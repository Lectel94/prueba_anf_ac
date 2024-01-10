
<template>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-4">
                <router-link :to='{name:"crearBlog"}' class="btn btn-success" > <span sr></span> New</router-link>
        </div>


        <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                
                                <th>Nombre</th>
                                <th>Apelidos</th>
                                <th>sexo</th>
                                <th>edad</th>
                                <th>email</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="blog in blogs" :key="blog.id">
                                <td>{{blog.nombre}}</td>
                                <td>{{blog.apellidos}}</td>
                                <td>{{blog.sexo}}</td>
                                <td>{{blog.edad}}</td>
                                <td>{{blog.email}}</td>
                                <td><router-link :to='{name:"editarUser",params:{id:user.id}}' class="btn btn-info"><i class="far fa-edit "></i></router-link>
                                <a type="button" @click="BorarUser(blog.id)"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>
                        </tbody>
            </table>
            
        </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    name:"users",
    data(){
        return{
            users:[]
        }
    },
    mounted() {
        this.mostrarUsers();
    },
    methods:{
       async mostrarUsers(){
           await this.axios.get('/api/user')
            .then(response=>{
                this.users=response.data
            })
            .catch(error=>{
                this.user=[]
            })
        },
        BorarUser(id){
            if(confirm("Seguro que desea Elimnar "+id+" ?")){
                this.axios.delete(`/api/user/${id}`)
                .then(response=>{
                this.mostrarUsers()
            })
            .catch(error=>{
                console.log(error);
            })
            }

        }
}
}
</script>
