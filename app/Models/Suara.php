<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suara extends Model
{
    use HasFactory;
    protected $table = 'Suara';
    protected $guarded = ['id'];
    

    public function tps()
    {
        return $this->belongsTo(Tps::class);
    }

    public function datacalon()
    {
        return $this->belongsTo(Datacalon::class);
    }
}
