<template>
    <ul class="flex gap-4 py-3">
      <li class="rounded-full hover:bg-amber-400 bg-gray-200 px-2 py-1 text-xs" v-for="tag in tags" :key="tag.id">{{ tag.name }}</li>
    </ul>
  </template>
  
  <script>
    export default {
      props: {
        tags: {
          type: Array,
          required: true
        }
      }
    }
  </script>
  
  <style lang="scss" scoped>
  
  </style>