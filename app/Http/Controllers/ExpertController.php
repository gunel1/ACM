<?php

namespace App\Http\Controllers;

use App\Expert;
use App\Image;
use Illuminate\Http\Request;

class ExpertController extends Controller
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
                $experts= Expert::where(DB::raw('LOWER(name_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $experts= Expert::where(DB::raw('LOWER(name_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $experts= Expert::where(DB::raw('LOWER(name_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
            $experts = Expert::paginate(10);
        return view('admin.expert.index')->with(array('experts'=>$experts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expert.create');
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20000']);
        if (isset($request->id)){
            $expert = Expert::find($request->id);
            if (isset($request->image)) {
                $expert->deleteImageFromFolder();
                $dir = config('settings.expert_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $expert->image->file_name = $filename;
                $expert->image->extension = $request->image->extension();
                $expert->image->file_size = filesize($request->image);
                $expert->image->path = date("Y-m-d") . '/' . $filename;
                $expert->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $expert = new Expert();
            if (isset($request->image)) {
                $dir = config('settings.expert_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $expert->image_id = $image->id;
            }
        }
        $expert->name_en = $request->name_en;
        $expert->profession_en= $request->profession_en;
        $expert->name_ru= $request->name_ru;
        $expert->profession_ru = $request->profession_ru;
        $expert->name_az= $request->name_az;
        $expert->profession_az= $request->profession_az;
        $expert->save();
        return redirect()->action('ExpertController@index');
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

        $expert = Expert::where('id', $id)->first();
        return view('admin.expert.edit',array('expert'=>$expert));
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
    {  $expert = Expert::find($id);
        $expert->delete();
        //files and images of store should be deleted
        return redirect()->action('ExpertController@index');  //
    }
}
