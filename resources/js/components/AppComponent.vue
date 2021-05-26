<style>
body {
  width: 100vw;
  height: 100vh;
  background: rgb(34, 193, 195);
  background: linear-gradient(
    0deg,
    rgba(34, 193, 195, 1) 0%,
    rgba(253, 187, 45, 1) 100%
  );
}
</style>

<template>
  <div id="app">
    <Movie />
  </div>
</template>

<script>
import Movie from "./MovieComponent.vue";

export default {
  components: {
    Movie,
  },
  data() {
    return {
      movies: "",
      search: "",
    };
  },

  methods: {
    loadmovies() {
      axios
        .get("/api/movie?search=" + this.search)
        .then((res) => {
          this.movies = res.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },

  mounted() {
    this.loadmovies();
  },
};
</script>