<template> 
    
<div class="container">
    <div class="row my-4">
       <div class="col-md-8 col-md-offset-2">
      <div class="card ">
 
        <div class="card-body" v-for="(post,index) in posts.data"
        :key="index">
        <div class="media">
            <img :src="post.photo" alt="">
                    <h4 class="card-title">{{post.title}}</h4>
          <p class="card-text">{{post.body.substr(0,200)}}</p>
      
        </div>
 
        </div>
      </div>
            </div>
        </div>
    </div>
</template>

<script >

export default{
data(){
    return{
        posts : {}
    }
},
created(){
    this.getPosts();
},
methods:{
    getPosts(){
        axios.get('/api/posts')
        .then(response => {
            console.log(response.data);
            this.posts = response.data
        })
        .catch(err => console.log(err));
    }
},
}

</script>