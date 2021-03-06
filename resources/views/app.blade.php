@include( 'parts.header' )

<body>
  <div id="app">
    
    <navigation-bar></navigation-bar>

    <div class="container profile">

      <profile-heading :user="{{ Auth::user() }}"></profile-heading>

      <profile-options></profile-options>

      <profile-urlbox></profile-urlbox>

      @yield( 'content' )

    </div>
  </div>

  <script src="{{ mix('js/app.js') }}" defer></script>

  @yield( 'javascripts' )
  
  @include( 'parts.footer' )

</body>
</html>