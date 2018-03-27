<template>
    <div class="box">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <strong>123</strong> posts
            </p>
          </div>
          <div class="level-item">
            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a post">
              <button class="button"> Search </button>
            </p>
          </div>
        </div>

        <!-- Right side -->
        <div class="level-right">
          <p class="level-item"><strong>All</strong></p>
          <p class="level-item"><a>Published</a></p>
          <p class="level-item"><a>Drafts</a></p>
          <p class="level-item"><a>Deleted</a></p>
          <p class="level-item"><a class="button is-success">New</a></p>
        </div>
      </nav>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component profile-urlbox mounted.')
        }
    }
</script>
