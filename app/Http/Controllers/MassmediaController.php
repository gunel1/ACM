<?php

namespace App\Http\Controllers;

use App\Image;
use App\Massmedia;
use Illuminate\Http\Request;

class MassmediaController extends Controller
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
                $medias= Massmedia::where(DB::raw('LOWER(name_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $medias= Massmedia::where(DB::raw('LOWER(name_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $medias= Massmedia::where(DB::raw('LOWER(name_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
            $medias = Massmedia::paginate(10);
        return view('admin.massmedia.index')->with(array('medias'=>$medias));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.massmedia.create');
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
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4000']);
        if (isset($request->id)){
            $media = Massmedia::find($request->id);
            if (isset($request->image)) {
                $media->deleteImageFromFolder();
                $dir = config('settings.massmedia_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $media->image->file_name = $filename;
                $media->image->extension = $request->image->extension();
                $media->image->file_size = filesize($request->image);
                $media->image->path = date("Y-m-d") . '/' . $filename;
                $media->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $media = new Massmedia();
            if (isset($request->image)) {
                $dir = config('settings.massmedia_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $media->image_id = $image->id;
            }
        }
        $media->title_en= $request->title_en;
        $media->title_ru= $request->title_ru;
        $media->title_az= $request->title_az;
        $media->link= $request->link;
        $media->save();
        return redirect()->action('MassmediaController@index');
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

        $media = Massmedia::where('id', $id)->first();
        return view('admin.massmedia.edit',array('media'=>$media));
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
    {  $media= Massmedia::find($id);
        $media->delete();
        //files and images of store should be deleted
        return redirect()->action('MassmediaController@index');  //
    }
}
