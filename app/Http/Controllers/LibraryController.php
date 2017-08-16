<?php

namespace App\Http\Controllers;

use App\Image;
use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{public function __construct()
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
        $library = Library::paginate(10);
        return view('admin.library.index')->with(array('libraries'=>$library));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$this->validate($request, ['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        'link'=>'required']);
        if (isset($request->id)){
            $library = Library::find($request->id);
            if (isset($request->image)) {
                $library->deleteImageFromFolder();
                $dir = config('settings.library_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $library->image->file_name = $filename;
                $library->image->extension = $request->image->extension();
                $library->image->file_size = filesize($request->image);
                $library->image->path = date("Y-m-d") . '/' . $filename;
                $library->image->save();}}
        else {
            $this->validate($request, ['image' => 'required']);
            $library = new Library();
            if (isset($request->image)) {
                $dir = config('settings.library_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $library->image_id = $image->id;
            }
        }

        $library->link=$request->link;
        $library->save();
        return redirect()->action('LibraryController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $library = Library::where('id', $id)->first();
        return view('admin.library.edit',array('library'=>$library));
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
    {  $library = Library::find($id);
        $library->delete();
        //files and images of store should be deleted
        return redirect()->action('LibraryController@index');  //
    } //
}
