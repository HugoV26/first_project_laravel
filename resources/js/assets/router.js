window.Vue = require('vue');
import VueRouter from 'vue-router';
//Posts
import PostList from '../components/PostListComponent.vue'
import PostDetail from '../components/PostDetailComponent.vue'
import PostCategory from "../components/PostCategoryComponent.vue"

import CategoryListDefault from '../components/CategoryListDefaultComponent.vue'

//
import Contact from "../components/ContactComponent.vue"


Vue.use(VueRouter);

/*
const router = new VueRouter({
    routes:[   // short for 'routes: routes'
        { path: "/", component: PostList},
        { path: '/foo', component: Foo},
        { path: '/bar', component: Bar}
        
    ]
});
*/

export default new VueRouter({
    mode: 'history',
    routes:[   // short for 'routes: routes'
    //Posts routes
        { path: "/", component: PostList, name: "list"},
        { path: "/detail/:id", component: PostDetail, name: "detail"},
        { path: "/post-category/:category_id", component: PostCategory, name: "post-category"},
    //
        {path: "/contact", component: Contact, name: "contact"},

        {path: "/categories", component: CategoryListDefault, name: "list-category"}
    ]
});
