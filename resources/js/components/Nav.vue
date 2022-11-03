!<template>
    <header>
        <nav class="container mx-auto">
            <div class="flex justify-between items-center">
                <div>
                    LOGO
                </div>
                <ul class="flex items-center gap-3">
                    <li v-for="(link, i) in navLinks" :key="i">
                        <router-link :to="{ name: link.name }">{{ link.text }}</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    data() {
        return {
            navLinks: [
                {
                    text:'Home',
                    path: '/',
                    name: 'home',
                },
                {
                    text:'Contatti',
                    path: '/contatti',
                    name: 'contact-us',
                },
                {
                    text:'Blog',
                    path: '/blog',
                    name: 'posts.index',
                },
                {
                    text:'Chi siamo',
                    path: '/chi-siamo',
                    name: 'about-us',
                },
            ]
        }
    }
}
</script>