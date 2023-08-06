<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo.index',[
            'firsth1' => 'My first list'
        ]);
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
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function show(Todos $todos)
    {
        $todos = App\Models\Todos::create([
            'title' => 'New Work',
            'description' => 'New Work description',
            'created_at' => mktime(0, 0, 0, date("m")  , date("d"), date("Y")),
            'updated_at' => mktime(0, 0, 0, date("m")  , date("d"), date("Y")),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function edit(Todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todos $todos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todos $todos)
    {
        //
    }
}
