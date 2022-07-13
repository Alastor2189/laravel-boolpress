<template>
    <div class="text-center mt-5">
        <h1>Error 404: Page not found</h1>
        <router-link :to="{ name: 'home' }">
            Return to homepage
        </router-link>
    </div>
</template>

<script>
export default {
    name: "NotFound",
};
</script>

<style></style>