import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("../components/Home.vue"),
    },
    {
        path: "/test",
        component: () => import("../components/TestPage.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});