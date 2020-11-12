/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import router from './assets/router.js';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('list-posts', require('./components/PostListComponent.vue').default);

Vue.component('modal-post', require('./components/PostModalComponent.vue').default);

Vue.component("post-list-default",require("./components/PostListDefaultComponent.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
 Vue.component("list-posts", {
     props: ["title", "final_posts"],
     data: function() {
         return {
            posts2: [
                {
                    title: 'Title 1', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    title: 'Title 2', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    title: 'Title 3', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    title: 'Title 4', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                },
                {
                    title: 'Title 5', 
                    image: '1600723126.jpeg', 
                    content: 'This is my content' 
                }
            ]
         };
     },
     template:
     ' <div><h1>{{title}}</h1> <div class="card" v-for="post in final_posts">  <div class="card-body"> <h5 class="card-title"> @{{ post.title }} </h5> <p class="card-text">@{{ post.content }}</p> <a href="#" class="btn btn-primary">View summary</a> </div> </div> </div>'
 });
*/
const app = new Vue({
    el: '#app',
    router,
    data: {
        message: "Hey vue",
        /*posts: [
            {
                title: 'Title 100', 
                image: '1600723126.jpeg', 
                content: 'This is my content' 
            },
            {
                title: 'Title 2', 
                image: '1600723126.jpeg', 
                content: 'This is my content' 
            },
            {
                title: 'Title 3', 
                image: '1600723126.jpeg', 
                content: 'This is my content' 
            },
            {
                title: 'Title 4', 
                image: '1600723126.jpeg', 
                content: 'This is my content' 
            },
            {
                title: 'Title 5', 
                image: '1600723126.jpeg', 
                content: 'This is my content' 
            }
        ]*/
    }
});
