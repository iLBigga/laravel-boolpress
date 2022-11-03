import Home from '../pages/Home.vue';
import AboutUs from '../pages/AboutUs.vue';
import ContactUs from '../pages/ContactUs.vue';
import PostIndex from '../pages/Posts.index.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/chi-siamo',
        name: 'about-us',
        component: AboutUs,
    },
    {
        path: '/contatti',
        name: 'contact-us',
        component: ContactUs,
    },
    {
        path: '/blog',
        name: 'post.index',
        component: PostIndex,
    },
];

export default routes;