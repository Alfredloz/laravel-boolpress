<template>
    <div class="container">
        <div class="row justify-content-center" v-for="contact in contacts">
            <div class="card text-center">
                <div class="card-header">
                    <img v-bind:src="contact.img" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nome: {{ contact.name }}</h5>
                    <h5 class="card-title">Cognome: {{ contact.lastName }}</h5>
                    <p class="card-text"> Paese: {{ contact.country }}</p>
                    <h5>Su di me</h5>
                    <p class="card-text">{{ contact.about }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    <p> {{ contact.email }} </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                contacts:[],           
            }
        },

        mounted() {
            console.log('Component mounted.');
            axios.get('api/contacts').then(response =>{
                //   console.log(response.data.data);
                  this.contacts = response.data.data;
                  console.log(this.posts);
            }).catch(error => {
             console.log(error);
            })
        }
    }
</script>