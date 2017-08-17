<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Blog;
use App\Event;
use App\Expert;
use App\Gallery;
use App\History;
use App\Image;
use App\Library;
use App\Massmedia;
use App\MomCan;
use App\Project;
use App\Story;
use App\Team;
use App\Video;
use Illuminate\Http\Request;
use Mail;

class PageController extends Controller
{
   public function index(){

       $achievement=Achievement::first();
       $albumlist=Gallery::paginate(12);
       $videos=Video::paginate(12);
       $experts=Expert::paginate(5);
       $teams=Team::get();
       $massmedia=Massmedia::paginate(12);
       $projects=Project::paginate(5);
       $events=Event::get();
       $library=Library::get();
       $history=History::first();

       return view('index')->withalbumlist($albumlist)->withvideos($videos)->withachievement($achievement)->withhistory($history)
           ->withexperts($experts)->withteams($teams )->withmassmedia($massmedia)->withprojects($projects)->withevents($events)->withlibraries($library);

   }

   public function getStories()
   {
       $stories = Story::all();
       return view('storys')->withstories($stories);

   }
    public function getMomsBlog()
    {
        $blogs = Blog::all();
        return view('momsblog')->withblogs($blogs);

    }
    public function getMomsCan()
    {
        $momscan = MomCan::all();
        return view('momscan')->withmomscan($momscan);

    }
   public function getImages($id){

       $galery=Gallery::find($id);
       $images=Image::where('parent_id',$galery->image->id)->get();
       return view('album')->withimages($images)->withgalery($galery);
   }

    public function sendEmail(Request $request)
    {

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->text;
        $contact->save();

        Mail::raw($request->input('message'), function ($message) {

            $message->to('rose.red.gunel@gmail.com', 'Online Education')->subject('SIKAYET&TEKLIFLER');
            $message->from($_POST['email'], $_POST['name']);

        });

    }

}
