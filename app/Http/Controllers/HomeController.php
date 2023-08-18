<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post=Post::orderBy('id', 'DESC')->get();;

         return view('home.index',compact('post'));
    }

    public function upload(Request $request)
    {

        $data=new Post;

        $data->username=Auth::user()->name;

        $data->user_id=Auth::user()->id;

        $data->description=$request->description;

        /*image insert part*/

        $image=$request->image;

        if($image)

        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('post',$imagename);

       /* image part end here*/

        $data->image=$imagename;

        }


        $data->save();

        return redirect()->back();


    }


    public function view_post()
    {
        $id=Auth::user()->id;

        $post= Post::where('user_id','=',$id)->get();


        return view('post_page',compact('post'));
    }


    public function delete_post($id)
    {

        $data=post::find($id);

        $data->delete();

        return redirect()->back();


    }

    public function update_post($id)
    {
        $data=post::find($id);

        return view('updatepost',compact('data'));
    }

    public function confirm_update(Request $request , $id)

    {
        $post=post::find($id);

        $post->description=$request->description;


        $image=$request->image;

        if($image)

        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('post',$imagename);

       /* image part end here*/

        $post->image=$imagename;

        }


        $post->save();

        return redirect()->back();



    }

    public function view_profile($id)
    {
        $post=post::where('user_id','=',$id)->orderBy('id', 'DESC')->get();;
        return view('home.profile',compact('post'));
    }
}
