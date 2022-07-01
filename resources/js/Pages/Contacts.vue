<template>
    <div class="page container py-5">

        <VueForm method="post" action="/contact-form" class="bg-dark text-white rounded px-4 pb-4">
        <div class="mb-3">
          <label for="full_name" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="full_name" id="full_name" aria-describedby="fullNameHelper" placeholder="Mario Rossi">
          <small id="fullNameHelper" class="form-text text-muted">inserisci il tuo nome e cognome</small>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="mariorossi@example.com">
          <small id="emailHelper" class="form-text text-muted">inserisci la tua email</small>
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" name="subject" id="subject" aria-describedby="textHelper" placeholder="mariorossi@example.com">
          <small id="textHelper" class="form-text text-muted">inserisci l'oggetto dell' email</small>
        </div>  
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        </VueForm>

    </div>
</template>

<script>
import VueForm from '../components/VueForm.vue'
export default {
    name: 'Contacts',
    components: {
        VueForm,
    }
}
</script>