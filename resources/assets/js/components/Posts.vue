<template>
    <div class="posts">
        <div class="container-fluid">
           <div class="col-md-12 col-lg-12">
               <h2>Posts Here</h2>

               <article v-for="post in posts">
                   <h4>{{ post.title }}</h4>

                   <div class="body">{{ post.body }}</div>
                   <br>
                   <small>Posted at {{post.created_at}}</small>
                   <hr>
               </article>

           </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                'posts' : [],
            }
        },
        mounted()
        {
            console.log('Component mounted.');

            this.fetchPosts();
        },
        methods:{
            fetchPosts(){
                axios.get('api/posts').then(response => {

                        console.log(response);

                        this.posts = response.data.data;
                    })
            }
        }
    }
</script>
