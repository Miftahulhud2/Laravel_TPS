<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class judul_rekap extends Model
{
    use HasFactory;
    public $table = 'judul_rekap';
    public $guarded = ['id'];
}
