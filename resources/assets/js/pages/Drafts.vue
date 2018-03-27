<template>
<div>
  Drafts...
</div>
</template>

<script>

  export default {

      data() {
        return {
          curPage: ( this.$route.query.page ? this.$route.query.page : 1 ),
        }
      },

      filters: {

      },
      computed: {

      },
      methods:
      {

      },
      mounted() 
      {
          $(".xok-pages").find( '.level-item' ).each( function( i, v ) {
            let text = $(v).text();
            let link = '<a href="#/'+ $(v).attr( 'id' ) +'">' + text + '</a>';
            $(v).html( link );
          });
          $("#drafts").html( '<strong>Drafts</strong>' );

      },

    }
</script>

<style>

</style>