<?php

namespace App\Http\Controllers;

use App\Image;
use App\MomCan;
use Illuminate\Http\Request;

class MomsCanController extends Controller
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
                $momscan= MomCan::where(DB::raw('LOWER(name_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $momscan= MomCan::where(DB::raw('LOWER(name_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $momscan= MomCan::where(DB::raw('LOWER(name_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
            $momscan = MomCan::paginate(10);
        return view('admin.momcan.index')->with(array('momscan'=>$momscan));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.momcan.create');
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
            'title_ru' => 'required',
            'text_ru'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4000']);
        if (isset($request->id)){
            $momcan = MomCan::find($request->id);
            if (isset($request->image)) {
                $momcan->deleteImageFromFolder();
                $dir = config('settings.momscan_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $momcan->image->file_name = $filename;
                $momcan->image->extension = $request->image->extension();
                $momcan->image->file_size = filesize($request->image);
                $momcan->image->path = date("Y-m-d") . '/' . $filename;
                $momcan->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $momcan = new MomCan();
            if (isset($request->image)) {
                $dir = config('settings.momscan_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $momcan->image_id = $image->id;
            }
        }
        $momcan->name_en = $request->name_en;
        $momcan->title_en= $request->title_en;
        $momcan->text_en=$request->text_en;

        $momcan->name_ru = $request->name_ru;
        $momcan->title_ru= $request->title_ru;
        $momcan->text_ru=$request->text_ru;

        $momcan->name_az = $request->name_az;
        $momcan->title_az= $request->title_az;
        $momcan->text_az=$request->text_az;

        $momcan->save();
        return redirect()->action('MomsCanController@index');
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

        $momcan = MomCan::where('id', $id)->first();
        return view('admin.momcan.edit',array('momcan'=>$momcan));
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
    {  $momcan= MomCan::find($id);
        $momcan->delete();
        //files and images of store should be deleted
        return redirect()->action('MomsCanController@index');  //
    }
}
