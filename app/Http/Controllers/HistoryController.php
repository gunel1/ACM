<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $h=History::get();
        return view('admin.history.index')->withhis($h);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_ru' => 'required',
            'text_ru'=>'required',
            'subtitle_ru' => 'required']);
        if(isset($request->id)) {
            $h = History::find($request->id);
        }
        else $h=new History();
        $h->title_en=$request->title_en;
        $h->subtitle_en=$request->subtitle_en;
        $h->text_en=$request->text_en;

        $h->title_ru=$request->title_ru;
        $h->subtitle_ru=$request->subtitle_ru;
        $h->text_ru=$request->text_ru;

        $h->title_az=$request->title_az;
        $h->subtitle_az=$request->subtitle_az;
        $h->text_az=$request->text_az;
        $h->save();
        $h=History::get();
        return view('admin.history.index')->withhis($h);
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
        $h=History::find($id);
        return view('admin.history.edit')->withh($h);
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
        //
    }
}
