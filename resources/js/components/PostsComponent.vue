<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" v-for="post in posts">
                <div class="card card_box">
                    <div class="card-header post_card text-light">{{ post.title}}</div>
                    <div class="card-body">
                        {{post.body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                posts:[],           
            }
        },

        mounted() {
            console.log('Component mounted.');
            axios.get('api/posts').then(response =>{
                //   console.log(response.data.data);
                  this.posts = response.data.data;
                  console.log(this.posts);
            }).catch(error => {
             console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    // .card{
    //     margin: 2rem;
    // }
</style>