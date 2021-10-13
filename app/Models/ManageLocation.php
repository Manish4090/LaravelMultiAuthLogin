<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageLocation extends Model
{
    use HasFactory;
	protected $table = "manage_locations";
    protected $fillable = [
        'location_name', 
		'location_code',
		'address',
		'status',
		'services_cat',
		'door_division',
    ];
}
