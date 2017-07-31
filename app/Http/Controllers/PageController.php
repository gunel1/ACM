<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Event;
use App\Expert;
use App\Gallery;
use App\History;
use App\Image;
use App\Library;
use App\Massmedia;
use App\Project;
use App\Team;
use App\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

       $achievement=Achievement::first();
       $albumlist=Gallery::paginate(12);
       $videos=Video::paginate(12);
       $experts=Expert::paginate(5);
       $team=Team::get();
       $massmedia=Massmedia::paginate(12);
       $projects=Project::get();
       $events=Event::get();
       $library=Library::get();
       $history=History::first();
       return view('index')->withalbumlist($albumlist)->withvideos($videos)->withachievement($achievement)->withhistory($history)
           ->withexperts($experts)->withteam($team)->withmassmedia($massmedia)->withprojects($projects)->withevents($events)->withlibrary($library);

   }

   public function getStories()
   {
      //return redirect(URL::to('/'.App::getLocale().'stories'));
   }

   public function getImages($id){

       $galery=Gallery::find($id);
       $images=Image::where('parent_id',$galery->image->id)->get();
       return view('album')->withimages($images)->withgalery($galery);
   }

}