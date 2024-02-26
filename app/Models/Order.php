<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function Division()
    {
        return $this->belongsTo('App\Models\Divisions', 'division', 'id');
    }
    public function District()
    {
        return $this->belongsTo('App\Models\Districts', 'district', 'id');
    }
    public function Upazila()
    {
        return $this->belongsTo('App\Models\Upazila', 'upazila', 'id');
    }
}
