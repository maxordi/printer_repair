<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterRequest;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master.index', [
            'masters' => Master::query()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.create', [
            'masters' => Master::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('img')){
            $path = Storage::disk('public')
                ->putFile('master', $request->file('img'));
            $data['img'] = $path;
        }
        Master::create($data);
        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        return view('admin.master.edit', [
            'masters' => Master::all(),
            'master' => $master
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(MasterRequest $request, Master $master)
    {
        $master->fill($request->all())->save();
        return redirect()->route('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        $master->delete();
        return redirect()->route('success');
    }
}
