<template>
    <div class="page p-5 bg-dark text-white text-center">
        <h1>404 - Page Not Found</h1>
        <p class="lead">La pagina richiesta non è stata trovata!</p>
        <hr class="my-3 bg-white">
        <p class="lead">
            <router-link class="btn btn-primary btn-lg" :to="{name: 'home'}" role="button">
                Home
            </router-link>
            <router-link class="btn btn-primary btn-lg" :to="{name: 'about'}" role="button">
               About
            </router-link>
            <router-link class="btn btn-primary btn-lg" :to="{name: 'posts'}" role="button">
                Blog
            </router-link>
        </p>
    </div>
</template>

<script>
export default {
    name: 'NotFound',
}
</script>