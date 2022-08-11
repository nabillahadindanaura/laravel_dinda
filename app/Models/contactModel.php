<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{

    protected $table = 'contact';
    protected $primarykey = 'id';
    use HasFactory;
    protected $fillable = [
        'email',
        'message'
    ];
}
