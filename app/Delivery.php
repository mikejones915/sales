<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable =[
        "reference_no", "sale_id", "truck_id", "address", "delivered_by", "recieved_by", "file", "status", "note","delivery_date"
    ];

    public function sale()
    {
    	return $this->belongsTo('App\Sale');
    }
}
