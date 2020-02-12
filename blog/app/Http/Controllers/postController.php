<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\postsImport;
use  App\post;

class postController extends Controller
{
    public function posts()
    {
        $posts=post::all();
    	return view('post',compact('posts'));
    }

   public function importPosts(Request $request)
   {
    $request->validate([
        'file'=>'required',
    ]);
    Excel::import(new postsImport,$request->file('file') );
        
    return back();

   }

   public function exportPosts()
   {
    return Excel::download(new  postsExport , 'post.xlsx');
   }
}
