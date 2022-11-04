<template>
    <div class="flex flex-col">
        <img v-if="post.cover" class="max-w-full" :src="post.cover_path">
        <h2 class="font-bold">{{ post.title }}</h2>
        <p v-if="post.category">{{ post.category.name }}</p>
        <ul class="flex gap-4 justify-center py-4">
            <li class="bg-cyan-900 rounded-lg p-1" v-for="tag in post.tags" :key="tag.id">
                {{ tag.name }}
            </li>
        </ul>
        <p>{{ post.date }}</p>
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