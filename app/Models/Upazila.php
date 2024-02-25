<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upazila extends Model
{
        public $timestamps = true;

		use SoftDeletes;

		protected $guarded = [];

		protected $dates = ['deleted_at'];

		protected $casts = [
		'created_at' => 'datetime:Y-m-d H:i:s A',
		];

		public function District()
		{
			return $this->belongsTo('App\Models\Districts','district_id','id');
		}
}
