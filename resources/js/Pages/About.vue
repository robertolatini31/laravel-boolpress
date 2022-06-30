<template>
    <div class="page py-4">
        <div class="container">
            <h1>About Me</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, consequatur!</p>
            <hr class="my-3">
            <p class="lead">
                <router-link class="btn btn-primary btn-lg" :to="{name: 'posts'}" role="button">
                    Leggi il mio Blog
                </router-link>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'About',
}
</script>
