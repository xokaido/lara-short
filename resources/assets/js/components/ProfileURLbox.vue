<template>
    <div class="box">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="control has-addons">
              <input @paste="onPaste" v-model="URL" class="input" type="text" placeholder="Input URL to Shorten" style="width: 730px !important">
              <button class="button is-success" @click="saveURL();"> <i class="fa fa-save"></i> &nbsp; Save URL&nbsp;
                <i v-if="loading" class="fa fa-spin fa-spinner"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Right side -->
        <div class="level-right xok-pages">
          <p class="level-item" id="home"><strong>All</strong></p>
          <p class="level-item" id="published"><a href="#/published">Published</a></p>
          <p class="level-item" id="drafts"><a href="#/drafts">Drafts</a></p>
          <p class="level-item" id="deleted"><a href="#/deleted">Deleted</a></p>
          <p class="level-item" id="new"><a class="button is-success">New</a></p>
        </div>
      </nav>
    </div>

</template>

<script>
    export default {
        data() {
          return {
            URL: '',
            loading: false,
          }
        },
        watch: {
         URL( newValue )
         {
            console.log( 'The URL changed to new value: ' + newValue );
         },

        },
        methods: 
        {
          pleaseTellUs()
          {
            alert( 'Congratulations!' );
          },
          saveURL() 
          {
            this.loading = true;
            axios.post( '/urls/', { url: this.URL } ).then( response => { 
              console.log( response.data ) 
              this.loading = false;
              window.Bus.$emit( 'url-changed', response.data.row );
              this.loading = false; 
            }).catch( error => { 
              alert( error.response.data.message );
              this.loading = false;
            });

          },
          onPaste(event)
          {
            let pastedText = event.clipboardData.getData( 'text' );
          },

        },
        mounted() {
            console.log('Component profile-urlbox mounted.')
        }

    }
</script>
