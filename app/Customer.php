<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

  protected $fillable = [
    'cpf', 'name', 'surname', 'phone'
  ];


  public function user()
  {
    return $this->morphOne('App\User', 'model');
  }
}
