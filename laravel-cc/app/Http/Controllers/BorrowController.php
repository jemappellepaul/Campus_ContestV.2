<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrow;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = Borrow::all();

        return view('borrows.index', compact('borrows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'=>'required',
            'volume'=>'required',
            'start_borrow'=>'required',
            'end_borrow'=>'required'
        ]);

        /*$name = $request->get('name');
        $volume = $request->get('volume');
        $bdd = new PDO('mysql:host=localhost;dbname=dbcc' , 'root' , '');
        $quantity = $bdd->query('SELECT quantity FROM books WHERE name ="'.$name.'" AND volume ="'.$volume.'"')->fetch()[0];
        $quantity -= 1;
        $bdd->query('UPDATE books SET quantity ="'.$quantity.'"WHERE name ="'.$name.'" AND volume ="'.$volume.'"');
        $quantity = $bdd->query('SELECT quantity FROM books WHERE name ="'.$name.'" AND volume ="'.$volume.'"')->fetch()[0];*/

        $borrow = new Borrow([
            'name' => $request->get('name'),
            'volume' => $request->get('volume'),
            'start_borrow' => $request->get('start_borrow'),
            'end_borrow' => $request->get('end_borrow')
        ]);
        $borrow->save();
        return redirect('/index')->with('success', 'Borrow saved!');
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
        $borrow = Borrow::find($id);
        return view('borrows.edit', compact('borrow'));
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
       $request->validate([
            'name'=>'required',
            'volume'=>'required',
            'begin_borrow'=>'required',
            'end_borrow'=>'required'
        ]);

        $borrow = Borrow::find($id);
        $borrow->name = $request->get('name');
        $borrow->volume = $request->get('volume');
        $borrow->begin_borrow = $request->get('begin_borrow');
        $borrow->end_borrow = $request->get('end_borrow');
        $borrow->save();

        return redirect('/borrows')->with('success', 'Borrow updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrow = Borrow::find($id);
        $borrow->delete();

        return redirect('/borrows')->with('success', 'Borrow deleted!');
    }
}