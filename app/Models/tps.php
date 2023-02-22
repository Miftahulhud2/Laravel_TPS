<?php

namespace App\Models;

use App\Models\Suara;
use App\Models\Datacalon;
use App\Models\Pencoblos;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tps extends Model
{


    use HasFactory;

    // use WithPagination;
    public Tps $tps;

    public function render()
    {
        return view('livewire.show-posts', [
            'tps' => $tps->pencoblos()->paginate(10, ['*'], 'pencoblos'),
        ]);
    }


    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' . $search . '%');
        });
        $query->when($filter['[pencoblos'] ?? false, function($query, $pencoblos){
            return $query->wherehas('nama', 'like', '%' . $search . '%');
        });
    }




    public function suara()
    {
        return $this->hasOne(Suara::class);
    }
    public function datacalon()
    {
        return $this->hasOne(Datacalon::class, 'id','tps_id','foto1','foto2','nm_calon1');
    }
    public function pencoblos()
    {
        return $this->hasMany(Pencoblos::class, 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'jalan', 'rt', 'rw');
    }
    public function getFileAttribute(){ return $this->uploads . $this->file; }

}
