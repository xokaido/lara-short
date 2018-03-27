<template>
<div>
  DELETED...
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
          $("#deleted").html( '<strong>Deleted</strong>' );

      },

    }
</script>

<style>

</style>