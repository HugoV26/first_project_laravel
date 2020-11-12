<template>
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-header">
                <img src="/images/logoR.jpg" alt="logo" class="logo_200 rounded mx-auto d-block">
            </div>
            <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Name</span>
                    </div>
                <input type="text" class="form-control" placeholder="Name" v-model="name">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Last Name</span>
                    </div>
                <input type="text" class="form-control" placeholder="Last Name" v-model="surname">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                    </div>
                <input type="email" class="form-control" placeholder="Email" v-model="email">
                </div>

                <div class="input-group mt-3">
                    <textarea class="form-control" placeholder="Comments" v-model="content">
                    </textarea>
                </div>

                <button @click="saveContact" class="btn btn-primary float-right mt-3 btn-lg">Send</button>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        
    },
    methods: {
        saveContact: function(){

            console.log(this.name + " " + this.surname + " " + this.email + " " + this.content);

            return;
            fetch('/api/post/' + this.$route.params.id)
                .then(response => response.json())
                .then(json => (this.post = json.data));
        }
    },
    //props: ["title", "final_posts"],
     data: function() {
         return {
            name: "",
            surname: "",
            email: "",
            content: ""
         };
     },
    
};
</script>