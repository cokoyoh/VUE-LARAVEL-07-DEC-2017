<template>
    <div class = "new-form" id = "new-form">
        <div class="container">
            <form action = "POST" class = "form-horizontal">
                <fieldset>
                    <legend>Add New Post</legend>

                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Blog Title">
                    </div>

                    <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control" id="body" name="body" rows="8" placeholder="What's on your mind?"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" value="submit" class="btn btn-success">Add</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return{

            }
        }
    }

</script>
