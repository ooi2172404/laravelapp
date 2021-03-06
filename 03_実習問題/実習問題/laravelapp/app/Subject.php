<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
       'person_id' => 'required|exists:people,id',
       'name' => 'required|max:10',
   );

   public function getData()
   {
       return $this->id . ': ' . $this->name;
   }

   public function getData2()
{
   return $this->id . ': ' . $this->name . ' ('
      . $this->person->name . ')';
}

   public function person()
   {
      return $this->belongsTo('App\Person');
   }

}
