<template>
    <div class="section profile-heading">
      <div class="columns">
        <div class="column is-2">
          <div class="image is-128x128 avatar">
            <img src="https://placehold.it/256x256">
          </div>
        </div>
        <div class="column is-4 name">
          <p>
            <span class="title is-bold">{{ user.name }}</span>
          </p>
          <p class="tagline">The users profile bio would go here, of course. It could be two lines</p>
        </div>
        <div class="column is-2 followers has-text-centered">
          <p class="stat-val">129k</p>
          <p class="stat-key">URLs</p>
        </div>
        <div class="column is-2 following has-text-centered">
          <p class="stat-val">2k</p>
          <p class="stat-key">Clicks</p>
        </div>
        <div class="column is-2 likes has-text-centered">
          <p class="stat-val">29</p>
          <p class="stat-key">Published</p>
        </div>
      </div>
    </div>
</template>
<script>
    export default {
      props: [ 'user' ],
      data() {
        return {

        }
      },
      mounted() {
          console.log( this.user );
          console.log('Component profile-heading mounted.')
      }
    }
</script>
