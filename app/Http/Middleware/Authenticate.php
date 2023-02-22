<?php

namespace App\Http\Middleware;

use App\Models\Datacalon;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('beranda');
        }
    }
    public function datacalon()
    {
        return $this->hasOne(Datacalon::class, 'id','tps_id','foto1','foto2','nm_calon1');
    }
}
