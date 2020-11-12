<template>
    <div>
    <div v-if="post">
            <div class="card mt-3">
            <div clas="card-header">
                <img v-bind:src=" '/images/' + post.image.image" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h1 class="card-title"> {{ post.title }} </h1>
                <router-link class="btn btn-success" :to="{name: 'post-category', params: {category_id:post.category.id}}">{{post.category.title}}</router-link>
                <p class="card-text"> {{ post.content }}</p>
                
            </div>
        </div>
    </div>
    <div v-else>
        <h1>El post no existe</h1>
    </div>
    </div>
</template>

<script>
export default {
    created() {
        //console.log("Hola mundo Vue" + this.$route.params.id);
        this.getPost();
    },
    methods: {
        getPost: function(){
            fetch('/api/post/' + this.$route.params.id)
                .then(response => response.json())
                .then(json => (this.post = json.data));
        }
    },
    //props: ["title", "final_posts"],
     data: function() {
         return {
             postSelected: "",
             post: ""
            /*post: 
                {
                    title: 'Title 1', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                }*/
         };
     },
    
};
</script>