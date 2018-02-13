<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        'auther_id' => 'required',
        'title'     => 'required',
        'content'    => 'required'
    );

    public function getData()
    {
      return $this->auther_id.':'.$this->title.':'.$this->content;
    }
}
