<template>
    <div id="app">
        <p>{{ message }}</p>
        <input v-model="message">
    </div>
</template>

<style>
</style>

<script>
    export default {
        name:'app',
        data () {
        return {
            message: 'Hello Vue.js!'
        }
    }
    }
</script>