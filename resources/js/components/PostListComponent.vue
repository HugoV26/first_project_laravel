<template>
    <div>
        <post-list-default :key="currentPage" @getCurrentPage="getCurrentPage" v-if="total > 0" :posts="posts" :total="total" :pCurrentPage="currentPage"></post-list-default>
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
            fetch("/api/post?page=" + this.currentPage)
                .then(response => response.json())
                .then(json => {
                    this.posts = json.data.data;
                    this.total = json.data.last_page;
                    console.log("getPosts " + this.total)
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
            this.getPosts()
        }
    },
    //props: ["title", "final_posts"],
     data: function() {
         return {
             postSelected: "",
             posts: [],
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