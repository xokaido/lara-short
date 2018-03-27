<template>
<div>
  Published URLs would go here!...
</div>
</div>
</template>

<script>

  export default {

      data() {

        return {
          
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
          $("#published").html( '<strong>Published</strong>' );

      },

    }
</script>

<style>

</style>