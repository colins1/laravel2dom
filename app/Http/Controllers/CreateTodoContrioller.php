<?php

namespace App\Http\Controllers;

use App\Models\CreateTodo;
use Illuminate\Http\Request;

class CreateTodoContrioller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo.create',[
            'firsth1' => 'My first list1'
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
     * @param  \App\Models\CreateTodo  $createTodo
     * @return \Illuminate\Http\Response
     */
    public function show(CreateTodo $createTodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateTodo  $createTodo
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateTodo $createTodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateTodo  $createTodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateTodo $createTodo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateTodo  $createTodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateTodo $createTodo)
    {
        //
    }
}
