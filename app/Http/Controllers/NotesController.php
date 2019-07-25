<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;



    if(isset($_GET['note']) && $_GET['note'] != ''){
        $note = $_GET['note'];
        $date = $_GET['date'];
        $_GET['_method'] = 'DELETE';
        // POST http://localhost:8888/5.7/public/rest/?note=【value】&date=【value】
        $notes = new notes;
        $notes->note = rawurldecode($note);
        $notes->date = rawurldecode($date);
        $notes->save();
    } 
    // else{
    //     echo '<strong>$_GET[\'time\']はsまだ送信されていません。'."</strong><br/>\n";
    // }



class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Notes::all();
        // dd($items);
        return $items->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Notes::find($id);
        return $item->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Notes::find($id);
        dd($item);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $notes = new Notes;
        
        $item = Notes::find($id);
        $item->delete();
        return redirect('/');
    }


    /**
     * _GETで入手したデータを保存するメソッド
     */
    // public function saveData($note,$date){

        

       
    // }

    /**
     * fillableの定義
     */
    protected $fillable = ['note'];


}
