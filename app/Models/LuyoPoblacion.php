<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuyoPoblacion extends Model
{
    use HasFactory;

    protected $table = 'luyo_poblacions';

    protected $fillable = [
        'fullname',
        'address',
        'plan',
        'contact',
        'duedate',
        'january',
        'febuary',
        'march',
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december'
    ];
}
