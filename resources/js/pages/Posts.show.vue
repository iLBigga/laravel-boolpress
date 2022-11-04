<template>
    <div class="container mx-auto">
        <div class="flex justify-evenly pt-20">
            <img v-if="post.cover_path" :src="post.cover_path" alt="">
            <div class="text-center">
                <h2 class="text-2xl">{{ post.title }}</h2>
                <p class="py-10">{{ post.category?.name }}</p>
                <p>{{ post.content }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['slug'],
        data() {
            return {
                post: null,
            }
        },
        methods: {
            fetchPost() {
                axios.get(`/api/posts/${this.slug}`).then(res => {
                    const{ post } = res.data
                    this.post = post
                }).catch(err => {
                    console.log(err)
                })
            }
        },
        created() {
            this.fetchPost()
        }
    }
</script>

<style lang="scss" scoped>

</style>