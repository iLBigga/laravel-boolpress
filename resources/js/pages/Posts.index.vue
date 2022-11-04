<template>
    <div>
        <h1> Post </h1>
        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-4">
                <router-link  v-for="post in posts" :key="post.id" :to="{ name: 'posts.show', params: { slug: post.slug }}">
                    <PostCard class="text-center bg-zinc-500" :post="post"/>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>

import PostCard from '../components/PostCard.vue'

    export default {
        components: {
            PostCard,
        },
        data(){
            return {
                posts: [],
            }
        },
        methods: {
            fetchPosts() {
                axios.get('/api/posts').then((res) =>{
                    const { posts } = res.data
                    this.posts = posts
                })
            }
        },
        beforeMount() {
            this.fetchPosts()
        }
    }
</script>

<style lang="scss" scoped>

</style>