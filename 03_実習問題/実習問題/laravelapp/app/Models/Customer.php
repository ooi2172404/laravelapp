<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = array('id');
 
    public static $rules = array(
       'name' => 'required',
       'address' => 'string', 
       'mail' => 'email',
       'age' => 'integer|min:0|max:150',
       'hobby' => 'string',
    );
 
    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
 }
