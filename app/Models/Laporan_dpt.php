<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_dpt extends Model
{
    use HasFactory;
    public $table = 'Laporan_dpt';
    public $guarded = ['id'];
}
