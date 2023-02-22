<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Pagination\Paginator;

class Pencoblos extends Model
{
    use HasFactory;

    public Tps $tps;

    public function render()
    {
        return view('livewire.show-posts', [
            'tps' => $tps->pencoblos()->paginate(10, ['*'], 'pencoblos'),
        ]);
    }



    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function tps()
    {
        return $this->belongsTo(tps::class, 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'jalan', 'rt', 'rw');
    }



    // protected $fillable = ['nama', 'nik', 'tmp_lahir', 'tgl_lahir', 'umur', 'sts_kawin', 'jns_kelamin', 'alamat'];
    public function scopeFilter($query)
    {
        return $query->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('tps_id', 'like', '%' . request('search') . '%');

    }
}
