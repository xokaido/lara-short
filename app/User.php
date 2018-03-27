<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\URL;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [ 'name', 'email', 'password', ];
    protected $hidden   = [ 'password', 'remember_token', ];

    public function urls()
    {
      return $this->hasMany( URL::class );
    }
}
