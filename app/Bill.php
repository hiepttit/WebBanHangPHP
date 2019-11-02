<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BillDetail;
use App\Product;

class Bill extends Model
{
    protected $table = "bills";

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
    public function Customer(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
    public function SetBillDetail($input){
        foreach ($input as $key => $value) {
            $billDetail = new BillDetail();
            $billDetail->id_bill = $this->id;
            $billDetail->id_product = intval($key);
            $billDetail->quantity = intval($value);
            $billDetail->unit_price = Product::find($key)->unit_price*intval($value);
            $billDetail->created_at = $this->create_at;
            $billDetail->updated_at = $this->updated_at;
            $billDetail->save();
        }
    }
}
