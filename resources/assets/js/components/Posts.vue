<template>
    <div class="posts">
        <div class="container">
            <h2>Posts Here</h2>

            <article v-for="post in posts">
                <h4>{{ post.title }}</h4>

                <div class="body">{{ post.body }}</div>
                <br>
                <hr>
            </article>

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
