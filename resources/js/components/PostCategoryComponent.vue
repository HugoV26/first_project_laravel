<template>
    <div>
        <h1>{{category.title}}</h1>
        <post-list-default :key="currentPage" @getCurrentPage="getCurrentPage" v-if="total > 0" :posts="posts" :total="total" :pCurrentPage="currentPage"></post-list-default>
        <!--<div class="card mt-3" v-for="post in posts" v-bind:key="post.title">
            <img v-bind:src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {{ post.title }} </h5>
                <p class="card-text"> {{ post.content }}</p>
                <button class="btn btn-primary" v-on:click="postClick(post)">View summary</button>
                <!--<router-link class="btn btn-success" :to=" 'detail/' + post.id">See</router-link>
                <router-link class="btn btn-success" :to="{name: 'detail', params: {id:post.id}}">See</router-link>
            </div>
        </div>
        <modal-post :post="postSelected"></modal-post>
        -->
    </div>
</template>

<script>
export default {
    created(){
        this.getPosts();
    },
    methods: {
        postClick: function(p){
            //console.log("Click" + p.title);
            this.postSelected = p;
            //$("#postModal").modal("show")
        },
        getPosts(){
            console.log("____" + this.$route.params.category_id);
            fetch("/api/post/" + this.$route.params.category_id + "/category?page=" + this.currentPage)
                .then(response => response.json())
                .then(json => {
                    this.posts = json.data.posts.data;
                    this.total = json.data.posts.last_page;
                    this.category = json.data.category;
                    });
                //console.log(json.data.data[0].title);

            /*fetch('/api/post').then(function (response){
                return response.json()
                
            })
            .then(function(json){
                this.posts = json.data.data;
                //console.log(json.data.data[0].title);
            })*/
        },
         getCurrentPage:function(val){
            //console.log("Current Page" + currentPage);
            this.currentPage = val;
            this.getPosts();
        }
    },
    //props: ["title", "final_posts"],
     data: function() {
         return {
             postSelected: "",
             posts: [],
             category: "",
             total: 0,
             currentPage: 1
             
            /*posts: [
                {
                    id: '1',
                    title: 'Title 1', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    id: '2',
                    title: 'Title 2', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    id: '3',
                    title: 'Title 3', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    id: '4',
                    title: 'Title 4', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    id: '5',
                    title: 'Title 5', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                }
            ]*/
         };
     },
    
};
</script>