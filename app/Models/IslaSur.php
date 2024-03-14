<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslaSur extends Model
{
    use HasFactory;

    protected $table = 'isla_surs';

    protected $fillable = [
        'name',
        'address',
        'plan'
    ];
}
