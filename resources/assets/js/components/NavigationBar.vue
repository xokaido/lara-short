<template>
  <nav class="nav has-shadow" id="top">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item" href="../index.html"> <img src="bulma.png" alt="Description"> </a>
      </div>
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>
      <div class="nav-right nav-menu">
        <a class="nav-item is-tab is-active"> Home </a>
        <a class="nav-item is-tab"> Features </a>
        <a class="nav-item is-tab"> Team </a>
        <a class="nav-item is-tab"> Help </a>
        <span class="nav-item">
          <a class="button"> Log in </a>
          <a class="button is-info"> Sign up </a>
          <a class="button is-info" href="/logout"> Sign out </a>
        </span>
      </div>
    </div>
  </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component navigation-bar mounted.')
        }
    }
</script>
