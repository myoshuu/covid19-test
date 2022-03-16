<?php

namespace App\Http\Controllers;

use App\Models\Covid;
use App\Models\User;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Covid::all();
        return view('index')->with(
            [
                'title' => 'Main',
                'datas' => $datas,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create')->with(
            [
                'title' => 'Add Data'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $request->except(['_token']);
        Covid::insert($datas);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Covid::findOrFail($id);
        return view('edit')->with(
            [
                'title' => 'Edit Data',
                'datas' => $data
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Covid::findOrFail($id);
        $datas = $request->except(['_token']);
        $data->update($datas);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Covid::findOrFail($id);
        $data->delete();
        return redirect('/');
    }
}
