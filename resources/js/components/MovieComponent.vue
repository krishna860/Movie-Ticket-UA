<style>
  body{
      width: 100vw;
      height: 100vh;
      background: rgb(34,193,195);
      background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
  }
  .container{
        margin: 0 auto;
        /* margin-top: 20px; */
        width: 780px;
        height: 10%;
        background: #F0F0ED;
        border-radius: 5px;
      
}
  .column2 {
        width: 150%;
        margin-right: 40%;
        margin-top: 5%;
        margin-left: 70px;
}
  .list-group-item{
      margin-bottom:70px;
      background-color:#b3ccff;
      color:red;
      width:150%;
}
  .search{
   font-family: Arial, Helvetica, sans-serif;
    text-shadow: 2px 2px #ff0000;
    margin-top: 10%;
    margin-left: 25%;
   
  }
      .input-group-lg{
        width:100%;
        padding-bottom:5%;
        margin-top:5%;
        margin-left: 0%;
        height: 0%;
        background-color: darkgray;
  
}

</style>

<template>

  <div class="container">   
    <div class="row">
        <input class="input-group-lg"  @keyup.enter="loadmovies" v-model="search" placeholder="Search Movie Details Here..">
      <h2 class="search">Movie searching list here</h2>
        <div class="column2">
            <div class="list-group-item mr-5" style="margin-right:20px;"  v-for="movie in movies" :key="movie">
            <p style="margin-left:35%;">Movie Title: {{movie.title}}</p>
            <p style="margin-left:35%;"> overview: {{movie.overview}}</p>
            <p style="margin-left:35%;"> release_year: {{movie.release_year}}</p>
            <p style="margin-left:35%;"> runtime: {{movie.runtime}}</p>
            <p style="margin-left:35%;"> cast_mem: {{movie.cast_mem}}</p>
            <p style="margin-left:35%;"> popular_movie: {{movie.popular_movie}}</p>
            <p style="margin-left:35%;"> trending_movie: {{movie.trending_movie}}</p>
            <center><a class="btn btn-primary mt-5" href="/selectcity">Select City & Theater</a></center>
            </div>
        </div>
    </div>
  </div> 

  
</template>

<script>
  export default {
    data(){
      return{
        movies:'',
        search:'',
      }
    },

    methods:{
      loadmovies(){
        axios.get('/api/movie?search='+this.search)
        .then((res) => {
          this.movies = res.data;
        })
        .catch(function(error){
          console.log(error);
        });

      },
    

      
    },
    mounted() {
     this.loadmovies();
    }
  }
</script>