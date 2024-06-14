<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory,SoftDeletes;

    public function Unit()
    {
        return $this->belongsTo('App\Models\Unit', 'product_unit_id', 'id');
    }
    public function Product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    public function Size()
    {
        return $this->belongsTo('App\Models\Size', 'size_id', 'id');
    }
}
