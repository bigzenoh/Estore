<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bill"

    public function BillDetail(){
      return $this->hasMany('App\bill_detail','id_bill','id');
    }

    public function Customer(){
      return $this->belongsTo('App\Customer','id_customer','id');
    }
}
