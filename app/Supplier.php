<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'companyName','logo','ownerName','paymentStatus','address','city','state','country','mobile_number','email'];

    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}
