<template>
<div>
  <vue-good-table 
      globalSearch="true"
      title="Your All Saved URLs"
      :columns="columns"
      :rows="urls"
      :paginate="true"
      :lineNumbers="true"
      styleClass="table table-bordered table-stripped"
      >
    <template slot="table-row" slot-scope="props">
      <td class="fancy">{{ props.row.nicename }}</td>
      <td class=""><a :href="props.row.targeturl">{{ props.row.targeturl }}</a></td>
      <td class=""><a :href="`/u/${props.row.shorturl}`">{{ props.row.shorturl }}</a></td>
      <td class="">
        <i class="fa fa-check" v-if="props.row.published"></i>
        <i class="fa fa-minus" v-if="!props.row.published"></i>
      </td>
      <td class="">{{ props.row.clicks}}</td>
      <td class=""><button class="button is-danger" @click="deleteURL( props.row );"><i class="fa fa-ban"></i> &nbsp;Delete</button></td>
    </template>
  </vue-good-table>
</div>
</template>

<script>

  export default {

      data() {
        return {
          curPage: ( this.$route.query.page ? this.$route.query.page : 1 ),
          urls: [],

          columns: [
            {
              label: 'Nice Name',
              field: 'nicename',
              filterable: true,
            },
            {
              label: 'Target URL',
              field: 'targeturl',
              filterable: true,
            },
            {
              label: 'Short URL',
              field: 'shorturl',
              filterable: true,
            },
            {
              label: 'Published',
              field: 'published',
              filterable: false,
            },
            {
              label: 'Clicks',
              field: 'clicks',
              filterable: false,
            },
            {
              label: 'Action',
              field: 'clicks',
              filterable: false,
            },
          ],

        }
      },

      filters: {

      },
      computed: {

      },
      methods:
      {
        deleteURL( row )
        {
          axios.delete( '/urls/' + row.id ).then( response => {

            this.urls.splice( this.urls.indexOf( row ), 1 );

            console.log( response.data );
          }).catch( error => {
            alert( error.response.data );
          });
        },
        addURL( url )
        {
          console.log( url );
        },

      },
      mounted() 
      {
        window.Bus.$on( 'url-changed', row =>  { 
            this.urls.push( row );
         });
          $(".xok-pages").find( '.level-item' ).each( function( i, v ) {
            let text = $(v).text();
            let link = '<a href="#/'+ $(v).attr( 'id' ) +'">' + text + '</a>';
            $(v).html( link );
          });
          $("#home").html( '<strong>All</strong>' );

          axios.get( '/urls/' ).then( response => { this.urls = response.data } );

      },

    }
</script>

<style>

</style>