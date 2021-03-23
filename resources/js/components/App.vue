<template>
    <Navbar />
    <router-view />
</template>

<script>
import Navbar from "./Navbar";
import Hero from "./Home/Hero";

export default {
    components: {
        Navbar,
        Hero
    }

}
</script>

<style scoped>

</style>
