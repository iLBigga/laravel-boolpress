!<template>
    <header>
        <nav class="container">
            <div class="flex justify-between items-center">
                <div>
                    Logo
                </div>
                <ul class="flex items-center gap-3">
                    <li v-for="(link, i) in navLinks" :key="i">
                        <rounter-link :to="{name: link.name}">{{ link.text }}</rounter-link>
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