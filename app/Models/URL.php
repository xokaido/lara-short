<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class URL extends Model
{
    use SoftDeletes;
    protected $table    = 'urls';
    protected $fillable = [ 'user_id',  'nicename', 'targeturl',  'shorturl',   'draft',
                            'published', 'clicks',  'created_at', 'updated_at', 'deleted_at'
                          ];
    protected $dates    = ['deleted_at'];

    public function owner( )
    {
      return $this->belongsTo( User::class );
    }

}
