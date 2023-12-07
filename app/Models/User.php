<?php

namespace App\Models;

;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
  use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'lastname', 'email', 'city','conference'];

    function conference() {
      return $this->belongsTo(Conference::class);
	}


  function scopeRecent($query) {
		$query->orderBy("created_at", "desc");
	}
    
}
