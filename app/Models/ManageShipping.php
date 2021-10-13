<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageShipping extends Model
{
    use HasFactory;
	protected $table = "manage_shipping";
    protected $fillable = [
        'city', 
		'postal_code',
		'sector',
		'delivery_rate',
		'pickup_location',
    ];
}
