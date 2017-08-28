<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Image;
use Illuminate\Http\Request;

class BlogController extends Controller
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
                $blog= Team::where(DB::raw('LOWER(name_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $blog= Team::where(DB::raw('LOWER(name_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $blog= Team::where(DB::raw('LOWER(name_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
            $blog = Blog::paginate(10);
        return view('admin.blog.index')->with(array('blogs'=>$blog));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            $blog = Blog::find($request->id);
            if (isset($request->image)) {
                $blog->deleteImageFromFolder();
                $dir = config('settings.blog_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $blog->image->file_name = $filename;
                $blog->image->extension = $request->image->extension();
                $blog->image->file_size = filesize($request->image);
                $blog->image->path = date("Y-m-d") . '/' . $filename;
                $blog->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $blog = new Blog();
            if (isset($request->image)) {
                $dir = config('settings.blog_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $blog->image_id = $image->id;
            }
        }
        $blog->name_en = $request->name_en;
        $blog->profession_en= $request->profession_en;
        $blog->text_en=$request->text_en;

        $blog->name_ru= $request->name_ru;
        $blog->profession_ru = $request->profession_ru;
        $blog->text_ru=$request->text_ru;

        $blog->name_az= $request->name_az;
        $blog->profession_az= $request->profession_az;
        $blog->text_az=$request->text_az;

        $blog->save();
        return redirect()->action('BlogController@index');
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

        $blog = Blog::where('id', $id)->first();
        return view('admin.blog.edit',array('blog'=>$blog));
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
    {  $blog= Blog::find($id);
        $blog->delete();
        //files and images of store should be deleted
        return redirect()->action('BlogController@index');  //
    }
}
