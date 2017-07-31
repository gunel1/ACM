<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
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
        $a=Achievement::get();
        return view('admin.achievement.index')->withach($a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $this->validate($request, [
        'title_ru' => 'required',
        'text_ru'=>'required',
        'subtitle_ru' => 'required']);
        if(isset($request->id)) {
            $a = Achievement::find($request->id);
        }
        else $a=new Achievement();
            $a->title_en=$request->title_en;
            $a->subtitle_en=$request->subtitle_en;
            $a->text_en=$request->text_en;

            $a->title_ru=$request->title_ru;
            $a->subtitle_ru=$request->subtitle_ru;
            $a->text_ru=$request->text_ru;

            $a->title_az=$request->title_az;
            $a->subtitle_az=$request->subtitle_az;
            $a->text_az=$request->text_az;
            $a->save();
            $a=Achievement::get();
            return view('admin.achievement.index')->withach($a);

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
        $a=Achievement::find($id);
        return view('admin.achievement.edit')->witha($a);
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
