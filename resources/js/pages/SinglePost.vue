<template>
  <div class="container">
    <section v-if="post">
      <h1>{{ post.title }}</h1>
      <p>Category: {{ categoryName }}</p>
      <div class="mb-4">
        <span
          v-for="tag in post.tags"
          :key="tag.id"
          class="badge rounded-pill bg-warning text-dark mr-3"
          >{{ tag.name }}</span
        >
      </div>
      <p>
        {{ post.content }}
      </p>
    </section>
    <section v-else>
        <h2>Loading...</h2>
    </section>
  </div>
</template>

<script>
export default {
  name: "SinglePost",
  data() {
    return {
      post: null,
    };
  },
  created() {
    this.getPostDetails();
  },
  computed: {
    categoryName() {
      return this.post.category ? this.post.category.name : "nessuna";
    },
  },
  methods: {
    getPostDetails() {
      const slug = this.$route.params.slug;
      axios.get(`/api/posts/${slug}`).then((resp) => {
        if (resp.data.success) {
          this.post = resp.data.results;
        } else {
          this.$router.push({ name: "not-found" });
        }
      });
    },
  },
};
</script>

<style>
</style>