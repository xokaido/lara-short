<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\URL;

class ShortURLController extends Controller
{
    /**
     * GET /urls/ 
     */
    public function index()
    {
        $urls = URL::whereUserId( \Auth::user()->id )->get( );
      return $urls;
    }

    /**
     * GET|HEAD  /urls/create
     */
    public function create()
    {
        //
    }

    /**
     * POST /urls/
     */
    public function store( )
    {
      $url = request( 'url' );
      $urlData = [
        'nicename'  => $this->getDomain( $url ),
        'shorturl'  => $this->shorten( $url ),
        'targeturl' => $url,
        'published' => 1,
        'clicks'    => 0,
        'user_id'   => \Auth::user()->id
      ];
      try {
          $newURL = URL::create( $urlData );
        return response()->json([ 'status' => 'Success!', 'row' => $newURL ]);
      }
      catch( QueryException $e )
      {
        return response()->json([ 'status' => 'Failed!',
                                  'message' => 'Could not save the URL! Make sure the URL is unique and you have not already saved it!' 
                                ],
                                503 );
      }
    }

    /**
     * GET|HEAD /urls/$id
     */
    public function show($id)
    {
        //
    }

    /**
     * GET|HEAD  /urls/$id
     */
    public function edit($id)
    {
        //
    }

    /**
     * PUT|PATCH   /urls/$id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * DELETE  /urls/$id
     */
    public function destroy($id)
    {
      try {
        URL::find( $id )->delete( );
        return response()->json([ 'status' => 'Success!',
                                  'message' => 'The URL was deleted!'
                                ]);
      }
      catch( QueryException $e )
      {
        return response()->json([ 'status' => 'Failed!',
                                  'message' => 'Could not delete the URL!'
                                ],
                                503 );
      }

      return request( )->getContent( );
    }
    public function handleRedirects( $shorturl )
    {
        $url = URL::whereShorturl( $shorturl )->first( );
        if( !$url )
          return redirect( '/' );
        $url->increment( 'clicks' );
      return redirect( $url->targeturl );
    }
    private function shorten( $url )
    {
        $hash        = hash( 'sha512', $url );
        $regexWords  = '/(?P<words>[a-z]{2,4})/';
        $regexDigits = '/(?P<digits>[\d]{3,4})/';

        preg_match_all( $regexWords,  $hash, $words  );
        preg_match_all( $regexDigits, $hash, $digits );

        $start  = end( $words[ 'words' ] );
        $middle = end( $digits[ 'digits' ] );
        $end    = prev( $words[ 'words' ] );
       return  $start . $middle . $end;  
    }
    private function getDomain( $url )
    {
        $parsed = parse_url( $url );
      return $parsed[ 'host' ];
    }

}
