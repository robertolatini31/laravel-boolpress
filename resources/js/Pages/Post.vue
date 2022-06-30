<template>
<div>
     <div class="container" v-if="!loading">
            <h1>{{post.title}}</h1>
            <div class="d-flex gap-3">
                <img :src="'/storage/' + post.img" :alt="post.title">
                <p v-if="post.content" class="lead">{{post.content}}</p>
            </div>
            
            <hr class="my-3">
            <p class="lead">
                <router-link class="btn btn-success" :to="{name: 'posts'}" role="button">
                    Torna al mio Blog
                </router-link>
            </p>
        </div>
</div>
    
</template>

<script>


export default {
    name: 'Post',
    data() {
        return {
            post: '',
            loading: true,
        }
    },
    methods: {
        getPost(){
            axios
                .get('/api/posts/' + this.$route.params.slug)
                .then((response => {
                    this.post = response.data;
                    this.loading = false;
                }))
                .catch(e => {
                    console.log(e);
                })
        },
    },
    mounted() {
        this.getPost();
    }

}
</script>
