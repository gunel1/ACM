<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Image;
use App\Video;
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
            $galery= Gallery::where(DB::raw('LOWER(title_en)'), 'LIKE', "%".$searchtext."%")->paginate(12);
            if (App::getLocale() == 'ru')
                $galery= Gallery::where(DB::raw('LOWER(title_ru)'), 'LIKE', "%".$searchtext."%")->paginate(12);
            if (App::getLocale() == 'az')
                $galery= Gallery::where(DB::raw('LOWER(title_az)'), 'LIKE', "%".$searchtext."%")->paginate(12);
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
            'title_ru' => 'required',
            'text_ru'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20000']);
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
        else {
            $this->validate($request, ['image'=>'required']);
            $galery = new Gallery();
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
    public function  show($id){

        $galery=Gallery::find($id);
        $images=Image::where('parent_id',$galery->image->id)->paginate(12);

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
    $this->validate($request, [ 'images' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20000']);


       $dir =  config('settings.galery_base_path') . date("Y-m-d");
        $images=$request->file('images');
     foreach ($images as $image) {
        $img = new Image();
        $path = $image->store($dir);
        $filename = substr($path,strlen($dir) + 1);
        $img->file_name = $filename;
        $img->extension = $image->extension();
        $img->file_size = filesize($image);
        $img->path = date("Y-m-d").'/'.$filename;
        $img->parent_id=$request->parent_id;
        $img->save();
        }
         return redirect(URL::to("/adminpanel/galery/$request->galery_id"));
}
public function deleteImage(Request $request)
{
    $checked = $request->checked;

    foreach ($checked as $id) {
        Image::where("id", $id)->delete();
    }
    return redirect(URL::to("/adminpanel/galery/$request->galery_id"));

}
    public function createVideo($id)
    {
        $video=Video::find($id);
        return view('admin.galery.video.edit')->withvideo($video);
    }


    public function storeVideo(Request $request)
    {

        $this->validate($request, [
            'title_ru' => 'required',
            'link'=>'required']);
        if(isset($request->video_id)) $video=Video::find($request->video_id);
        else $video=new Video();

        $link=$request->link;
        $youtubelink="https://www.youtube.com/embed/".substr($link,  strpos($link, '=')+1);

        $video->title_en = $request->title_en;

        $video->title_ru= $request->title_ru;

        $video->title_az= $request->title_az;
        $video->link=$youtubelink;
        $video->save();


        return redirect(URL::to("/adminpanel/video"));
    }
    public function deleteVideo($id)
    {

        $video=Video::find($id);
        $video->delete();
        return redirect(URL::to("/adminpanel/video"));

    }
    public function showVideo()
    {
            $videos = Video::paginate(12);
        return view('admin.galery.video.index')->with(array('videos'=>$videos));
    }


}
