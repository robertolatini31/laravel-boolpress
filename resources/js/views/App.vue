<template>
    <div>
        <div class="bg-light">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <router-link class="navbar-brand" :to="{name: 'home'}">
                    Boolpress
                </router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" v-for="item in menuItems" :key="item.routeName">
                            <router-link class="nav-link" :to="{name: item.routeName}">
                                {{item.routeText}}
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <router-view></router-view>
    </div>
    
</template>

<script>
export default {
    name: 'App',
    components:{},
    data(){
        return {
            menuItems: [
                {
                    routeName: 'home',
                    routeText: 'Home'
                },
                {
                    routeName: 'about',
                    routeText: 'About Me'
                },
                {
                    routeName: 'posts',
                    routeText: 'Posts'
                }
            ]
        }
    }
}
</script>