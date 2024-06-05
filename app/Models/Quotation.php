<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'no_off_nights',
        'no_off_adults',
        'no_off_kids',
        'interested_in',
        'name',
        'email',
        'phone_number',
        'description',
        
    ];

}
