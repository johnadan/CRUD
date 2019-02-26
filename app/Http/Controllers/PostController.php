<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Auth;
//use App\User;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function getDashboard(){
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'content')->get();
        return view('layouts.dashboard', compact('posts'));

    }

    public function postCreatePost(Request $request){

    	$this->validate($request, [
    		'post' => 'required|max:1000'
    	]);

    	$post = new Post();
    	$post->content = $request['post'];
    	$message = "There was an error!";
    	if ($request->user()->posts()->save($post)) {
    		$message = "Post was successfully created!";
    	}
    	
    	//dd($post);
    	return redirect('/dashboard')->with(['message' => $message]);

    }

    public function getDeletePost($id){
    //$post = Post::where('id', $post_id)->first();
    //$post = Post::where('id', $post_id)->first();
    $post = Post::find($id);
    //dd($id);
    //$post = Post::find($id)->firstOrFail();
    //$post = Post::find($id);
    //$post = Post::find($post_id);
    //$post = Post::where('id', $post_id)->firstOrFail();
    //if(Auth::user()->id != $post->user_id){
        //return redirect()->back();
    //}
    $post->delete();
    //$message = "There was an error!";
    return redirect('/dashboard')->with(['message' => 'Post was successfully deleted']);
    }

    // public function deleteTask($id){
    //     $taskDelete = Task::find($id); //id
    //     $taskDelete->delete();
    //     return redirect("/tasklist");
    // }

    public function postEditPost(Request $request, $post_id){
        $this->validate($request, [
            'postbody' => 'required'
        ]);
        //$post = Post::find($request ['postId']); 
        //$post = Post::find($request ['postId'])->where('user_id', Auth::user()->id)->get();
        $post = Post::find($id);

        //$post = Post::find($request->user()->posts());
        $post->postbody = $request->editedpost;
        //$post->update();
        $post->save();
        //dd($post);
        return response()->json(['message' => 'Post was successfully edited!'], 200);
         return redirect("/dashboard");
        //
        //$data = Data::find ( $req->id );
        //$data->name = $req->name;
        //$data->save ();
        //return response ()->json ( $data );
    }

    // public function updateTask(Request $request, $id){
    //     $taskUpdate = Task::find($id);
    //     $taskUpdate->task = $request->editedtask;
    //     $taskUpdate->save();
    //     //dd($taskUpdate);
    //     return redirect("/tasklist");
    // }
}
