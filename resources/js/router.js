import Vue from "vue";
import VueRouter from "vue-router";
import About from "./pages/About.vue";
import Blog from "./pages/Blog.vue";
import NotFound from "./pages/NotFound.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [{
            path: "/",
            name: "home",
            component: Homepage,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
        {
            path: "/blog",
            name: "blog",
            component: Blog,
        },
        {
            path: "/*",
            component: NotFound,
        },

    ],
});

export default router;