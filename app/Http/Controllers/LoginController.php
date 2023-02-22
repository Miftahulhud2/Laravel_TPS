<?php

namespace App\Http\Controllers;

use App\Models\Tps;
use App\Models\User;
use App\Models\Suaras;
use App\Models\Pencoblos;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('suara')
        ->groupBy('suara')
        ->pluck(DB::raw('sum(jml_suara) as sum'), 'suara')
        ->toarray();
        
        // return $data;
        // format data for pie chart
        $labels = [];
        $values = [];
        foreach ($data as $item => $key) {
            $labels[] = $item;
            $values[] = $key;
        }

        // return response()->json([
        //     'labels' => $labels,
        //     'datasets' => [
        //         [
        //             'data' => $values,
        //             'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56', '#F44336']
        //         ]
        //     ]
        // ]);
        return view('login.beranda', compact('data'));
        return auth()->user();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coba',[
            'title' => 'DASHBOARD'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        // // dd($credentials);
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('tentang');
        // }
        // else{
        //     return redirect()->back()->with('loginerror', 'Login Gagal!!'); //redirect kembali ke halaman login
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            // dd($credentials);
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('tps/tentang');
            }
            else{
                return redirect()->back()->with('loginerror', 'Login Gagal!!'); //redirect kembali ke halaman login
            }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}
