<?php

namespace App\Http\Controllers;

use App\Models\coba;
use Illuminate\Http\Request;
use Clockwork\Support\Lumen\Controller;
use Laravel\Lumen\Routing\Controller as BaseController;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search($value, $strict = false)
    {
    if (! $this->useAsCallable($value)) {
         return array_search($value, $this->items, $strict);
    }

    foreach ($this->items as $key => $item) {
        if (call_user_func($value, $item, $key)) {
             return $key;
        }
    }

     return false;
    }
    public function index()
    {
            $pagination  = 5;
            $articles    = Tps::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('title', 'like', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);

            $articles->appends($request->only('keyword'));

            return view('articles.index', [
                'title'    => 'Articles',
                'articles' => $articles,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function coba()
    {
        return view('datadaerah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function show(coba $coba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function edit(coba $coba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coba $coba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function destroy(coba $coba)
    {
        //
    }
}
