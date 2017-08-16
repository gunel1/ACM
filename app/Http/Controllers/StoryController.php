<?php

namespace App\Http\Controllers;

use App\Image;
use App\Story;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\StringInput;

class StoryController extends Controller
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
                $experts= Expert::where(DB::raw('LOWER(title_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $experts= Expert::where(DB::raw('LOWER(title_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $experts= Expert::where(DB::raw('LOWER(title_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
            $stories = Story::paginate(10);
        return view('admin.story.index')->with(array('stories'=>$stories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.story.create');
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
            'subtitle_ru' => 'required',
            'text_ru'=>'required',
            'link'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4000']);
        if (isset($request->id)){
            $story = Story::find($request->id);
            if (isset($request->image)) {
                $story->deleteImageFromFolder();
                $dir = config('settings.story_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $story->image->file_name = $filename;
                $story->image->extension = $request->image->extension();
                $story->image->file_size = filesize($request->image);
                $story->image->path = date("Y-m-d") . '/' . $filename;
                $story->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $story= new Story();
            if (isset($request->image)) {
                $dir = config('settings.story_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $story->image_id = $image->id;
            }
        }
        $story->title_en = $request->title_en;
        $story->title_ru = $request->title_ru;
        $story->title_az = $request->title_az;
        $story->subtitle_en = $request->subtitle_en;
        $story->subtitle_ru = $request->subtitle_ru;
        $story->subtitle_az = $request->subtitle_az;
        $story->text_en = $request->text_en;
        $story->text_ru = $request->text_ru;
        $story->text_az = $request->text_az;
        $story->link=$request->link;
        $story->save();
        return redirect()->action('StoryController@index');
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

        $story = Story::where('id', $id)->first();
        return view('admin.story.edit',array('story'=>$story));
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
    {  $story = Story::find($id);
        $story->delete();
        //files and images of store should be deleted
        return redirect()->action('StoryController@index');  //
    }
}
