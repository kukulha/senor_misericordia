<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gospel;
use App\Http\Requests\GospelStoreRequest;
use App\Http\Requests\GospelUpdateRequest;

class GospelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gospels = Gospel::orderBy('id', 'DESC')->paginate(10);
        return view('admin.gospels.index', compact('gospels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gospels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GospelStoreRequest $request)
    {
        $gospel = Gospel::create($request->all());
        if ($request->file('file')) {
            $gospel->file = $request->file('file')->store('public');
            $gospel->save();
        }
        return redirect()->route('gospels.index')->with('info', 'Evangelio creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gospel = Gospel::findOrFail($id);
        return view('admin.gospels.edit', compact('gospel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GospelUpdateRequest $request, $id)
    {
        $gospel = Gospel::findOrfail($id);
        $gospel->fill($request->all())->save();
        if ($request->file('file')) {
            $gospel->file = $request->file('file')->store('public');
            $gospel->save();
        }
        return redirect()->route('gospels.index')->with('info', 'Evangelio editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gospel::findOrFail($id)->delete();
        return redirect()->route('gospels.index')->with('info', 'Evangelio eliminado exitosamente');
    }
}
