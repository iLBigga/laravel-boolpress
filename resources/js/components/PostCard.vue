<template>
    <div>
        <img v-if="post.cover" :src="post.cover_path" alt="">
        <div>
            <h3>{{ post.title }}</h3>
            <p v-if="post.category">{{ post.category.name }}</p>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id">
                    {{ tag.name }}
                </li>
            </ul>
            <p>{{ post.date }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: true
        }
    }
}
</script>

<style lang="scss" scoped>
    
</style>