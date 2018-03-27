@extends( 'app' )


@section( 'content' )

      <div class="spacer"></div>

      {{-- @include( 'parts.profile-columns' ) --}}
      
      <router-view></router-view>

@stop

@section( 'javascripts' )
  <script type="text/javascript">
    
  </script>
@stop