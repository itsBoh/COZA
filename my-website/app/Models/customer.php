<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
        'CUST_NAME', 
        'CUST_PASSWORD', 
        'CUST_EMAIL', 
        'CUST_USERNAME', 
        'cust_phone', 
        'CUST_ADDRESS', 
        'CUST_GENDER'
    ];
    public $timestamps = false;
}
