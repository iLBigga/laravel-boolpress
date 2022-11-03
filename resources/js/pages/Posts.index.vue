<template>
    <div>
        <h1> Post </h1>
        <div class="container mx-auto">
            <div class="grid grid-rows-4 grid-flow-col gap-4">
                <PostCard class="text-center bg-zinc-500" v-for="post in posts" :key="post.id" :post="post"/>
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