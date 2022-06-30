<template>
    <div class="page p-5 bg-dark text-white">
        <h1>About Me</h1>
        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, consequatur!</p>
        <hr class="my-3 bg-white">
        <p class="lead">
            <router-link class="btn btn-primary btn-lg" :to="{name: 'posts'}" role="button">
                Leggi il mio Blog
            </router-link>
        </p>
    </div>
</template>

<script>
export default {
    name: 'About',
}
</script>


