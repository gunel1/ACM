<?php

namespace App\Http\Controllers;

use App\Image;
use App\Project;
use Illuminate\Http\Request;
use Ramsey\Uuid\Generator\PeclUuidRandomGenerator;

class ProjectController extends Controller
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
                $project= Project::where(DB::raw('LOWER(title_en)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'ru')
                $project= Project::where(DB::raw('LOWER(title_ru)'), 'LIKE', "%".$searchtext."%")->paginate(10);
            if (App::getLocale() == 'az')
                $project= Project::where(DB::raw('LOWER(title_az)'), 'LIKE', "%".$searchtext."%")->paginate(10);
        }
        else
        $project= Project::paginate(10);
        return view('admin.project.index')->with(array('projects'=>$project));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
            'text_ru' => 'required',
            'link'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4000']);
        if (isset($request->id)){
            $project = Project::find($request->id);
            if (isset($request->image)) {
                $project->deleteImageFromFolder();
                $dir = config('settings.project_base_path') . date("Y-m-d");
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $project->image->file_name = $filename;
                $project->image->extension = $request->image->extension();
                $project->image->file_size = filesize($request->image);
                $project->image->path = date("Y-m-d") . '/' . $filename;
                $project->image->save();
            }
        }
        else {
            $this->validate($request, ['image' => 'required']);
            $project = new Project();
            if (isset($request->image)) {
                $dir = config('settings.project_base_path') . date("Y-m-d");
                $image = new Image();
                $path = $request->file('image')->store($dir);
                $filename = substr($path, strlen($dir) + 1);
                $image->file_name = $filename;
                $image->extension = $request->image->extension();
                $image->file_size = filesize($request->image);
                $image->path = date("Y-m-d") . '/' . $filename;
                $image->save();
                $project->image_id = $image->id;
            }
        }
        $project->title_en = $request->title_en;
        $project->text_en=$request->text_en;
        $project->title_ru = $request->title_ru;
        $project->text_ru=$request->text_ru;
        $project->title_az = $request->title_az;
        $project->text_az=$request->text_az;
        $project->link=$request->link;

        $project->save();
        return redirect()->action('ProjectController@index');
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

        $project = Project::where('id', $id)->first();
        return view('admin.project.edit',array('project'=>$project));
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
    {  $project= Project::find($id);
        $project->delete();
        //files and images of store should be deleted
        return redirect()->action('ProjectController@index');  //
    }
}
