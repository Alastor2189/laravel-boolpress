<template>
  <div>
    <h2>List Posts</h2>

    <div class="container">
            <div class="row row-cols-2">
                <div v-for="item in posts" :key="item.id" class="col">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{item.title}}</h5>
                            <p>{{ item.content }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'single-post', params: { slug: post.slug } }" class="card-link">Leggi post</router-link>
            </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'WorkInProgress',

    data() {
        return {
            posts: [],
        };
    },
    created() {
        this.getApiCall();
    },
    methods: {
        getApiCall() {
            axios.get("/api/posts").then((resp) => {
                this.posts = resp.data.results;
            });
        },
    },
};
</script>

<style>

</style>