import { createWebHistory, createRouter } from "vue-router";
import App from "../components/App";
import Hero from "../components/Home/Hero";
import Users from "../components/User/Users";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Hero,
    },
    {
        path: "/users",
        name: "Users",
        component: Users,
    },
];

const router = createRouter({
    mode: 'history',
    history: createWebHistory(),
    routes,
});

export default router;
