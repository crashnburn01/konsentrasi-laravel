<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metode extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'no';
}
