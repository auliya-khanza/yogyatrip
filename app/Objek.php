<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
  protected $table = 'objek';
  protected $primaryKey = 'id_objek';
  // public function tiket(){
  //   return $this->hasMany(Tiket::class);
  // }
}
