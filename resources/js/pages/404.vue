<template>
    <div class="h-screen flex items-center">
      <div class="container text-center">
        <h1 class="text-2xl">404</h1>
        <p>Pagina non trovata <router-link :to="{ name: 'home'}" >torna alla home</router-link></p>
      </div>
    </div>
  </template>
  
  <script>
    export default {
      
    }
  </script>
  
  <style lang="scss" scoped>
  
  </style>