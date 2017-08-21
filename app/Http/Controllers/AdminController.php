<?php
/**
 * Created by PhpStorm.
 * User: gunel
 * Date: 7/18/17
 * Time: 2:02 PM
 */

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    public function index(Request $request){
        return view('admin.master');
    }

  public function  getUserInfo(){

        return view('admin.admininfo.index')->withuser(Auth::user());

  }
  public function  editUserInfo(){

       return view('admin.admininfo.edit')->withuser(Auth::user());
  }
    public function  storeUserInfo(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255']);

        if(isset($request->checkbox))
            $this->validate($request, [
            'password' => 'required|string|min:6|confirmed']);


        $user=User::find($request->id);

        $user->name=$request->name;
        $user->email=$request->email;
        if(isset($request->checkbox))
        {
            $user->password=bcrypt($request->password);

        }
        $user->save();
        return redirect()->action('AdminController@getUserInfo');
    }
    public function getContact(){
        $contacts=Contact::paginate(20);
        return view('admin.contact.index')->withcontacts($contacts);
    }



/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function deleteAll(Request $request)
{
    $checked = $request->checked;

    foreach ($checked as $id) {
        Contact::where("id",$id)->delete();
    }
    return redirect(URL::to("/adminpanel/contact"));
}
}