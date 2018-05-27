<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listForAdmin() {
        $posts = Post::where('id','>=','0')->paginate(10);
        return view('society.admin.posts.list',['posts'=>$posts]);
    }

    public function listForProprieter() {
        $posts = Post::where('id','>=','0')->pagainate(10);
        return view('society.proprieter.post.list',['posts'=>$posts]);
    }

    public function detailForAdmin($id) {
        /*
         *  page for admin and proprieter should be different.
         */
        $post = Post::find($id);
        return view('society.admin.posts.detail',['post'=>$post]);
    }

    public function detailForProprieter($id) {
        /*
         * set the privilege
         */
        $post = Post::find($id);
        return view('society.proprieter.post.detail',['post'=>$post]);
    }


    public function deleteForAdmin() {
        return view('society.admin.posts.delete');
    }

    public function rate() {
        return view('welcome');
    }

    public function pre_add() {
        return view('society.proprieter.post.add');
    }

    public function add() {
        return view('welcome');
    }

    public function update() {
        return view('welcome');
    }
}
