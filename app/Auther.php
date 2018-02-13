<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Auther extends Model
{
    protected $guarded = array('id');

    public static $rules =array(
      'name'=> 'required',
      'age'=> 'required',
      'gender'=> 'required'
    );

    public function getData()
    {
      return $this->id.':'. $this->name.':'.$this->age.':'.$this->gender.':'.$this->content;
    }

    public function messages()
    {
      return $this->hasMany('\App\Message');
    }
    public static function search($request)
      {

        $query = DB::table("author");

        $name = empty($request->name) ? "" : $request->name;
        $min = empty($request->min) ? "" : $request->min;
        $max = empty($request->max) ? "" : $request->max;

        if($name != "") {
          $query = $query->where("name", "=" , $name);
        }

        if($min != "") {
          $query = $query->where("age" , ">=", $min);
        }

        if($max != "") {
          $query = $query->where("age" , "<=" , $max);
        }

        $people = $query->get();

        return $auther;

      }
}
