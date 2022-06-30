<template>
    <div class="bg-light">
        <h1 class="text-center py-5">Work In Progress</h1>

       <div class="container-fluid">
         <div class="row">
            <main class="col-12 col-md-9 col-lg-10">
                <section class="posts py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col p-3" v-for="post in postsResponse.data" :key="post.id">
                        <div class="product card">
                            <img :src="'storage/' + post.img" :alt="post.title">
                            <div class="card-body">
                                <h3>{{post.title}}</h3>
                                <p v-if="post.content" >{{trimText(post.content)}}</p>
                            </div>
                            <div class="card-footer">
                                <span v-if="post.category"><strong>Categoria: </strong>{{ post.category.name}}</span>
                                <div class="tags" v-if="post.tags.length > 0">
                                    <ul>
                                        <strong>Tags:</strong>
                                        <li v-for="tag in post.tags" :key="tag.id">
                                            {{tag.name}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item" v-if="postsResponse.current_page > 1">
                      <a class="page-link" href="#" aria-label="Previous" @click.prevent="getAllPosts(postsResponse.current_page - 1)">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="visually-hidden">Previous</span>
                      </a>
                    </li>

                    <li class="{ 'page-item' : true, 'active' : page == postsResponse.current_page }" v-for="page in postsResponse.last_page" :key="page">
                        <a class="page-link" href="#" @click.prevent="getAllPosts(page)">{{page}}</a>
                    </li>
                    
                    <li class="page-item" v-if="postsResponse.current_page < postsResponse.last_page">
                      <a class="page-link" href="#" aria-label="Next" @click.prevent="getAllPosts(postsResponse.current_page + 1)">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="visually-hidden">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
                </section>
            </main>
            <aside class="bg-white p-2 col-12 col-md-3 col-lg-2">
                <div class="categories">
                     <h6>Categorie:</h6>
                    <ul>
                        <li v-for="category in categories" :key="category.id">
                                {{category.name}}
                        </li>
                    </ul>
                </div>
                <div class="tags">
                    <h6>Tags:</h6>
                    <ul>
                        <li v-for="tag in tags" :key="tag.id">
                                {{tag.name}}
                        </li>
                    </ul>
                </div>
            </aside>
         </div>
       </div>

    </div>
</template>

<script>
export default {
    name: 'App',
    components:{},
    data() {
        return {
            categories: '',
            tags: '',
            postsResponse: '',
        }
    },
    methods: {
        getAllPosts(postPage){
            //console.log(postPage);
            axios
                .get('/api/posts',{
                    params: {
                        page: postPage
                    }
                })
                .then((response => {
                    this.postsResponse = response.data;
                }))
                .catch(e => {
                    console.log(e);
                })
        },
        getAllCategories() {
            axios
                .get('/api/categories',)
                .then((response => {
                    //console.log(response.data);
                    this.categories = response.data;
                }))
                .catch(e => {
                    console.log(e);
                })
        },
        getAllTags() {
            axios
                .get('/api/tags',)
                .then((response => {
                    //console.log(response.data);
                    this.tags = response.data;
                }))
                .catch(e => {
                    console.log(e);
                })
        },
        trimText(text) {
            if(text.length > 100) {
                return text.slice(0, 100);
            }
            return text;
        }
    },
    mounted() {
       this.getAllPosts(1);
       this.getAllCategories();
       this.getAllTags();
    }
}
</script>