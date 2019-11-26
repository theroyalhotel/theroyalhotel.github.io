<?php

namespace App\Http\Controllers;

use App\blogs;
use App\BlogsTag;
use App\catagories;
use App\tags;
use App\User;
use Illuminate\Http\Request;

class BlogdetailController extends Controller
{
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
                $categories=catagories::all();
                foreach($categories as $category) {
                    $category->count = blogs::where('catagory', $category->id) ->get();
                }
                $catagory=catagories::find($blog->catagory);
                if($catagory)
                {
                    $blog->catagory_name=$catagory->name;
                }

                $tags=tags::all();
                return view('home.blogdetail')
                ->with(['blog'=>$blog])
                ->with(['blog_tags'=>$list_tag])
                ->with(['categories'=>$categories])
                ->with(['tags'=>$tags]);
                // ->with(['count_blog_category'=>$count_blog_category]);
            }
        }
        session()->flash('error','This Post is not found');
        return redirect('/admin/blogs');
    }
}
