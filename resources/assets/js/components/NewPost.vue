<template>
    <div class = "new-form" id = "new-form">
        <div class="container-fluid">
            <div class="col-md-12 col-lg-12">
                <form action = "POST" @submit.prevent="onSubmitForm">
                    <fieldset>
                        <legend>Add New Post</legend>

                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control" v-model="post_data.title" id="title" name="title" aria-describedby="emailHelp" placeholder="Post Title">
                        </div>

                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" v-model="post_data.body" id="body" name="body" rows="8" placeholder="What's on your mind?"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" value="submit" class="btn btn-success">Add Post</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return{
                post_data: {
                    title: '',
                    body: ''
                }

            }
        },
        methods: {
            onSubmitForm(){
                console.log(this.post_data);

                let data = this.post_data;

                axios.post('api/posts', data)

                    .then(response => {
                        console.log(response)

                      if(response.status === 200){

                          alert(response.data.message);
                      }
                    })
            }
        }
    }

</script>
