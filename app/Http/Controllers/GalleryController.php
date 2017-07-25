<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class GalleryController extends Controller
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
    public function index(Request $request)
    {

        if(isset($request->searchtext)) {
            $searchtext = strtolower($request->searchtext);
            if (App::getLocale() == 'en')
            $galery= Gallery::where(DB::raw('LOWER(title_en)'), 'LIKE', "%".$searchtext."%")->paginate(3);
            if (App::getLocale() == 'ru')
                $galery= Gallery::where(DB::raw('LOWER(title_ru)'), 'LIKE', "%".$searchtext."%")->paginate(3);
            if (App::getLocale() == 'az')
                $galery= Gallery::where(DB::raw('LOWER(title_az)'), 'LIKE', "%".$searchtext."%")->paginate(3);
        }
        else
            $galery = Gallery::paginate(3);
        return view('admin.galery.index')->with(array('galery'=>$galery));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galery.create');
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
            'title_az' => 'required',
            'text_az'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        if(isset($request->galery_id)) {
            $galery = Gallery::find($request->galery_id);
            if(isset($request->image)){
                $galery->deleteImageFromFolder();

                $dir = config('settings.galery_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path,strlen($dir) + 1);
                $galery->image->file_name=$filename;
                $galery->image->extension=$request->image->extension();
                $galery->image->file_size = filesize($request->image);
                $galery->image->path=date("Y-m-d").'/'.$filename;
                $galery->image->save();
            }
        }
        else { $galery = new Gallery();
        if(isset($request->image)){
            $dir = config('settings.galery_base_path') . date("Y-m-d");
            $image = new Image();
            $path = $request->file('image')->store($dir);
            $filename = substr($path,strlen($dir) + 1);
            $image->file_name = $filename;
            $image->extension = $request->image->extension();
            $image->file_size = filesize($request->image);
            $image->path = date("Y-m-d").'/'.$filename;
            $image->save();
            $galery->image_id=$image->id;
        }}


                $galery->title_en = $request->title_en;
                $galery->text_en= $request->text_en;
                $galery->title_ru= $request->title_ru;
                $galery->text_ru = $request->text_ru;
                $galery->title_az= $request->title_az;
                $galery->text_az= $request->text_az;

        $galery->save();
        return redirect()->action('GalleryController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galery = Gallery::where('id', $id)->first();
        return view('admin.galery.edit',array('galery'=>$galery));
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

    public function  show($id){

        $galery=Gallery::find($id);

        $images=Image::where('parent_id',$galery->image->id)->paginate(3);

        return view('admin.galery.image.index',array('images'=>$images,'parent_id'=>$galery->image->id ,'galery_id'=>$id));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galery = Gallery::find($id);
        $galery->delete();
        //files and images of store should be deleted
        return redirect()->action('GalleryController@index');
    }


public function storeImage(Request $request)
{

    $this->validate($request, ['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

        $dir =  config('settings.base_url') . config('settings.galery_base_path') . date("Y-m-d");
        $image = new Image();
        $path = $request->file('image')->store($dir);
        $filename = substr($path,strlen($dir) + 1);
        $image->file_name = $filename;
        $image->extension = $request->image->extension();
        $image->file_size = filesize($request->image);
        $image->path = date("Y-m-d").'/'.$filename;
        $image->parent_id=$request->parent_id;
        $image->save();

         return redirect(URL::to("/adminpanel/galery/$request->galery_id"));
}
public function deleteImage($id,Request $request)
{

   $image=Image::find($id);
   $image->delete();
    return redirect(URL::to("/adminpanel/galery/$request->galery_id"));

}
}
