<?php

namespace App\Http\Controllers;

use App\Image;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
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
    public function index( Request $request)
    {

        if(isset($request->searchtext)) {
            $searchtext = strtolower($request->searchtext);
            if (App::getLocale() == 'en')
                $teams= Team::where(DB::raw('LOWER(name_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $teams= Team::where(DB::raw('LOWER(name_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $teams= Team::where(DB::raw('LOWER(name_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
            $teams = Team::paginate(10);
        return view('admin.team.index')->with(array('teams'=>$teams));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'name_ru' => 'required',
            'profession_ru' => 'required',
            'text_ru'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20000']);
        if (isset($request->id)){
            $team = Team::find($request->id);
            if (isset($request->image)) {
                $team->deleteImageFromFolder();
                $dir = config('settings.team_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $team->image->file_name = $filename;
                $team->image->extension = $request->image->extension();
                $team->image->file_size = filesize($request->image);
                $team->image->path = date("Y-m-d") . '/' . $filename;
                $team->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $team = new Team();
            if (isset($request->image)) {
                $dir = config('settings.team_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $team->image_id = $image->id;
            }
        }
        $team->name_en = $request->name_en;
        $team->profession_en= $request->profession_en;
        $team->text_en=$request->text_en;

        $team->name_ru= $request->name_ru;
        $team->profession_ru = $request->profession_ru;
        $team->text_ru=$request->text_ru;

        $team->name_az= $request->name_az;
        $team->profession_az= $request->profession_az;
        $team->text_az=$request->text_az;

        $team->save();
        return redirect()->action('TeamController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $team = Team::where('id', $id)->first();
        return view('admin.team.edit',array('team'=>$team));
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
    {  $team= Team::find($id);
        $team->delete();
        //files and images of store should be deleted
        return redirect()->action('TeamController@index');  //
    }
}
