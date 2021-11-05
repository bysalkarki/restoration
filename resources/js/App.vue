<template>
        <navbar></navbar>
        <router-view></router-view>
</template>

<script>
import navbar from "./components/Navbar";
export default {
    name:'app',
    components: {navbar},
};
</script>

<style></style>
