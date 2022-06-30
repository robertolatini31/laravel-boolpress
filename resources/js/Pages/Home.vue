<template>
     <div class="page">
        <div class="p-5 bg-dark text-white">
                <h1>Boolpress Blog</h1>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, consequatur!</p>
                <hr class="my-3 bg-white">
                <p class="lead">
                    <router-link class="btn btn-primary btn-lg" :to="{name: 'posts'}" role="button">
                        Leggi il mio Blog
                    </router-link>
                </p>
            </div>
        <div class="container bg-secondary rounded mt-4" v-if="!loading">
            <div class="recent_posts py-4">
                <h3 class="text-white">Posts recenti:</h3>
                <div class="row">
                    <div class="col" v-for="post in posts" :key="post.id">
                        <div class="card">
                            <img class="img-fluid rounded-top" :src="'/storage/' + post.img" :alt="post.title">
                            <div class="card-body" v-if="post.content">
                                <p>
                                    {{post.content.slice(0,100) + '...'}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            posts: '',
            loading: true,
        }
    },
    methods: {
        getAllPosts(){
            axios
                .get('/api/posts')
                .then((response => {
                    const posts = response.data.data;
                    this.posts = posts.slice(0,4);
                    this.loading = false;
                }))
                .catch(e => {
                    console.log(e);
                })
        },
    },
    mounted() {
        this.getAllPosts();
    }
}
</script>
<style lang="scss" scoped>
    .card {
        img {
            height: 300px;
            object-fit: cover;
        }
    }
</style>