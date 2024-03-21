<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'role_id', 'status_id', 'payment_id', 'city_id', 'department_id'];
    

    public function client() { 
        return $this->belongsTo( Client:: class, 'client_id' ); 
    }

    public function role() { 
        return $this->belongsTo( Role:: class, 'role_id' ); 
    }

    public function status() { 
        return $this->belongsTo( Status:: class, 'status_id' ); 
    }

    public function payment() { 
        return $this->belongsTo( Payment:: class, 'payment_id' ); 
    }

    public function city() { 
        return $this->belongsTo( City:: class, 'city_id' ); 
    }

    public function department() { 
        return $this->belongsTo( Department:: class, 'department_id' );
    }

}
