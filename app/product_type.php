<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    //
    protected $table = 'product_type';
    protected $fillable = [
        'sort', 'name'
    ];
    public function product(){
        return $this->hasMany("App\product",'product_type_id');
    }
}
