<template>
    <div>
        <h1> Post </h1>
        <div>
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
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
                title: 'Bentornato',
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