<?php

namespace App\Http\Controllers;

use App\blogs;
use App\catagories;
use App\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showpage(){
        $blogs=blogs::where('awaitings','0')->paginate(2);
        foreach($blogs as $blog)
        {
            $id_user=$blog->user_id;
            if($id_user)
            {
                $blog->admin_name=User::find($id_user)->name;
            }
        }
        return view('home.blog')->with('blogs',$blogs);
    }

    
    public function getBlogById($id)
    {
        $blog=blogs::find($id);
        if($blog)
        {
            $catagory=catagories::find($blog->catagory);
            if($catagory)
            {
                $blog->catagory_name=$catagory->name;
            }
            if($blog)
            {
                $blog_tags=BlogsTag::where('blogs_id',$blog->id)->pluck('tags_id');
                $list_tag =tags::whereIn('id',$blog_tags)->pluck('name');
                $id_user=$blog->user_id;
                if($id_user)
                {
                    $blog->admin_name=User::find($id_user)->name;
                }
                return view('admin.single_blog')
                ->with(['blog'=>$blog])
                ->with(['blog_tags'=>$list_tag]);
            }
        }
        session()->flash('error','This Post is not found');
        return redirect('/admin/blogs');
    }

    public function getBlogsByCata($id)
    {
        $blogs=blogs::where('catagory',$id)->get();
        if($blogs)
        {
            foreach ($blogs as $blog)
            {
                $catagory=catagories::find($blog->catagory);
                if($catagory)
                {
                    $blog->catagory_name=$catagory->name;
                }
            return view('home.blog')->with('blogs',$blogs);}
        }
        session()->flash('error','This tag is not found');
        return redirect('/admin');
    }
}
