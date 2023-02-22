<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacalon extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'datacalon';
    protected $returntype = 'Myth\Auth\Entities\User';

    public function tps()
    {
        return $this->belongsTo(Tps::class);
    }
    public function suara()
    {
        return $this->belongsTo(Suara::class);
    }

}
