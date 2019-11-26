<?php

namespace App\Http\Controllers;
use App\Bill;
use App\BillDetail;
use App\Hotel;
use App\Place;
use App\Room;
use Illuminate\Http\Request;
use App\catagories;
use App\blogs;
use App\BlogsTag;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\CreateCatagoryRequest;
use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Permissions;
use App\tags;
use App\User;
use CreateTagsTable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $catagories=catagories::paginate(10);
        return view('admin.catagories')->with(['catagories'=>$catagories]);
    }

    public function createCatagories()
    {
        return view('admin.add_catagory');
    }

    public function storeCatagory(CreateCatagoryRequest $request)
    {
        $data=$request->all();
        $catagory=new catagories();
        $catagory->name=$data['name'];
        $catagory->save();
        session()->flash('success','Create Cata Successfully');
        return redirect('/admin');
    }

    public function editCatagories($id)
    {
        $catagory=catagories::find($id);
        if($catagory)
        {
            return view('admin.add_catagory')->with(['edit'=>$catagory]);
        }
        session()->flash('error','This Tag is not Found');
        return redirect('/admin');
    }

    public function updateCatagory($id)
    {
        $this->validate(request(),[
            'name'=>'required|min:3|max:20'
        ]);
        $data=request()->all();
        $catagory=catagories::find($id);
        $catagory->name=$data['name'];
        $catagory->save();
        session()->flash('success','Edit data successfully');
        return redirect('/admin');
    }

    public function deleteCatagories($id)
    {
        $catagory=catagories::find($id);
        if($catagory){
            $catagory->delete();
            session()->flash('success','Delete data successfully');
            return redirect('/admin');
        }
        session()->flash('error','This Catagory is not found');
        return redirect('/admin');
    }

    public function getBlogs()
    {
        $blogs=blogs::where('awaitings','1')->paginate(10);
        foreach ($blogs as $blog)
        {
            $catagory=catagories::find($blog->catagory);
            if($catagory)
            {
                $blog->catagory_name=$catagory->name;
            }
        }
        return view('admin.blogs')->with(['blogs'=>$blogs]);
    }

    public function getBlogsAwaiting()
    {
        if(Auth::user()->is_admin=="1")
        {
            $blogs=blogs::where('awaitings','0')->paginate(10);
            // dd($blogs);
            foreach ($blogs as $blog)
            {
                $catagory=catagories::find($blog->catagory);
                if($catagory)
                {
                    $blog->catagory_name=$catagory->name;
                }
            }
            return view('admin.blogs')->with(['blogs_waiting'=>$blogs]);
        }
        session()->flash('error','You are not admin');
        return redirect('/admin/tags');

    }

    public function approvedBlog ($id){
        if(Auth::user()->is_admin=="1")
        {
            $blog=blogs::find($id);
            if($blog)
            {
                $blog->awaitings=true;
                $blog->save();
                return redirect('/admin/blogs');
            }
            session()->flash('error','This admin is not found');
            return redirect('/admin/admins');

        }
        session()->flash('error','You are not admin');
        return redirect('/admin/tags');

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
        $blog=blogs::where('catagory',$id)->get();
        if($blog)
        {
            foreach ($blog as $blog)
            {
                $catagory=catagories::find($blog->catagory);
                if($catagory)
                {
                    $blog->catagory_name=$catagory->name;
                }
            return view('admin.blog')->with('blog',$blog);}
        }
        session()->flash('error','This tag is not found');
        return redirect('/admin');
    }

    public function getBlogsByTag($id)
    {
        $tag=tags::find($id);
        if($tag)
        {
            $blogs_id=BlogsTag::where('tags_id',$tag->id)->pluck('blogs_id');
            if(count($blogs_id) > 0)
            {
                $blogs=blogs::whereIn('id',[$blogs_id])->paginate(10);
            }
            else
            {
                $blogs=[];
            }
            return view('admin.blogs')->with('blogs',$blogs);
        }
        session()->flash('error','This tag is not found');
        return redirect('/admin/tags');
    }

    public function createBlogs()
    {
        $catagories=catagories::all();
        return view('admin.add_blog')
        ->with(['catagories'=>$catagories])
        ->with(['tags'=>tags::all()]);
    }

    public function storeBlogs(CreateBlogRequest $request)
    {
        if($request->new_tags)
        {
            $tagNames=explode(',',$request->get('new_tags'));
            $tagIds=[];
            foreach($tagNames as $tagName)
            {
                $tag=tags::firstOrCreate(['name'=>$tagName]);
                if($tag)
                {
                $tagIds[]=$tag->id;
                }
            }
            $post=blogs::create([
                'name'=>$request->name,
                'catagory'=>$request->cata,
                'content'=>$request->content,
                'detail'=>$request->detail,
                'file'=>$request->file->store('posts'),
                'user_id'=>auth()->user()->id
            ]);


            if ($request->tags)
            {
                $post->tags()->attach($request->tags);
            }
            if($tagNames)
            {
                $post->tags()->attach($tagIds);
            }
            session()->flash('success','Create Blog Successfully');
            return redirect('/admin/blogs');
        }
    }
    public function editBlogs($id)
    {
        $tags=tags::all();
        $blog=blogs::find($id);
        $catagory=catagories::all();
        if($blog)
        {
            return view('admin.add_blog')->with([
                'catagories'=>$catagory,
                'edit'=>$blog,
                'tags'=>$tags
            ]);
        }
        session()->flash('error','This Post is not Found');
        return redirect('/admin/blogs');
    }

    public function updateBlog(UpdatePostsRequest $request,blogs $id)
    {
        if($request->new_tags)
        {
        $tagNames=explode(',',$request->get('new_tags'));
        $tagIds=[];
        foreach($tagNames as $tagName)
        {
            $tag=tags::firstOrCreate(['name'=>$tagName]);
            if($tag)
            {
              $tagIds[]=$tag->id;
            }
        }
        $data=$request->only(['name','cata','content','detail','file']);
        $data["catagory"]=floatval($data["cata"]);
        if($request->hasFile('file')){
        $request->file=$data['file']->store('posts');
            Storage::delete($id->file);
            $data['file']=$request->file;
        }
        $blogs_tags=BlogsTag::where('blogs_id',$id->id)->pluck('id');
        foreach ($blogs_tags as $blog_tag)
        {
            BlogsTag::find($blog_tag)->delete();
        }
        $id->update($data);
        $id->tags()->attach($request->tags);
        if($tagNames)
        {
            foreach ($tagIds as $tagId){
                $blog_tag_create=new BlogsTag();
                $blog_tag_create->blogs_id=$id->id;
                $blog_tag_create->tags_id=$tagId;
                $blog_tag_create->save();
            }
        }
    }
        session()->flash('success','Edit data successfully');
        return redirect('/admin/blogs');
    }

    public function deleteBlogs($id)
    {
        $blog=blogs::find($id);
        if($blog)
        {
            Storage::delete($blog->file);
            $blog->delete();
        session()->flash('success','Delete data successfully');
        return redirect('/admin/blogs');
        }
        session()->flash('error','This Post is not found');
        return redirect('/admin/blogs');
    }

    public function getTags()
    {
        $tags=tags::paginate(10);
        return view('admin.tags')->with(['tags'=>$tags]);
    }

    public function createTags()
    {
        return view('admin.add_tags');
    }

    public function storeTag(CreateTagRequest $request)
    {
        tags::create([
            'name'=>$request->name
        ]);
        return redirect('/admin/tags');
    }

    public function editTag($id)
    {
        $tag=tags::find($id);
        if($tag)
        {
            return view('admin.add_tags')->with(['edit'=>$tag]);
        }
        session()->flash('error','This tag is not Found');
        return redirect('/admin/tags');
    }

    public function updateTag($id)
    {
        $this->validate(request(),[
            'name'=>'required|min:3|max:20'
          ]);
        $data=request()->all();
        $tag=tags::find($id);
        $tag->name=$data['name'];
        $tag->save();
        session()->flash('success','Edit data successfully');
        return redirect('/admin/tags');
    }

    public function deleteTag($id)
    {
        $tag=tags::find($id);
        if($tag){
            $tag->delete();
        session()->flash('success','Delete data successfully');
        return redirect('/admin/tags');
        }
        session()->flash('error','This Tag is not found');
        return redirect('/admin/tags');
    }

    public function getAdmins(){
        if(Auth::user()->is_admin=="1")
        {
            $all_admins=User::paginate(10);
            return view('/admin/admins')->with('Admins',$all_admins);
        }
        session()->flash('error','You are not admin');
        return redirect('/admin/tags');

    }

    public function verifyAdmins($id){
        if(Auth::user()->is_admin=="1")
        {
            $verify_admin=User::find($id);
            if($verify_admin)
            {
                $verify_admin->verify=true;
                $verify_admin->save();
                return redirect('/admin/admins');
            }
            session()->flash('error','This admin is not found');
            return redirect('/admin/admins');

        }
        session()->flash('error','You are not admin');
        return redirect('/admin/tags');
    }

    public function notiVerify(){
        return view('admin/very');
    }

    public function getProfile(){
        $my_profile=Auth::user();
        $hotel_name=Hotel::find($my_profile->id_hotel)->name;
        $my_profile->hotel_name=$hotel_name;
        $permission=Permissions::find($my_profile->id_permission)->name;
        $my_profile->permission_name=$permission;
        return view('admin/profile')->with(['my_profile'=>$my_profile]);
    }

    public function editProfile(){
        // dd(Auth::user()->id);
        // if(Auth::user()->id==)
        $my_profile=Auth::user();
        $hotel_name=Hotel::find($my_profile->id_hotel)->name;
        $my_profile->hotel_name=$hotel_name;

        return view('admin/profile')->with(['my_profile_edit'=>$my_profile]);
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $data=$request->all();
        $profile=Auth::user();
        $profile->name=$data['name'];
        $profile->about_me=$data['about_me'];
        $profile->phone_number=$data['phone_number'];
        if($request->hasFile('avatar')){
            $request->avatar=$data['avatar']->store('posts');
                Storage::delete(Auth::user()->avatar);
                $profile['avatar']=$request->avatar;
            }
        $profile->save();
        session()->flash('success','Edit data successfully');
        return redirect('/admin/profile');
    }

    public function editPassword(){
        $my_profile=Auth::user();
        $hotel_name=Hotel::find($my_profile->id_hotel)->name;
        $my_profile->hotel_name=$hotel_name;
        return view('admin/profile')->with(['edit_password'=>$my_profile]);
    }

    public function updatePassword(UpdatePasswordRequest $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

    public function getAdminById($id){

        if(Auth::user()->id==$id||Auth::user()->id=='1'){
            $my_profile=User::find($id);
            if($my_profile)
            {
                $hotel_name=Hotel::find($my_profile->id_hotel)->name;
                $my_profile->hotel_name=$hotel_name;
                $permission=Permissions::find($my_profile->id_permission)->name;
                $my_profile->permission_name=$permission;
                return view('admin/profile')->with(['my_profile'=>$my_profile]);
            }
            return redirect()->back()->with("error","Cannot see profile of that User!");

        }
        return redirect()->back()->with("error","Cannot see profile of that User!");
    }

    public function getHotels(){
        $hotels = Hotel::all();
        return view('admin.hotels',compact('hotels'));
    }
    public function delhotel($id){
        Hotel::destroy($id);
        return back();
    }
    public function createHotels(){
        $places=Place::all();
        return view('admin.add_hotel',compact('places'));
    }
    public function postHotels(Request $request){
        $newhotel = new hotel();
        $newhotel->name = $request->name;
        $newhotel->address = $request->address;
        $newhotel->phone = $request->phone;
        $newhotel->email = $request->email;
        $newhotel->avatar_hotel = $request->avatar_hotel;

        $newhotel->id_place = $request->id_place;
        if ($newhotel->id_place == null){
            $newhotel->id_place == 1;
        }
        $newhotel->detail = $request->detail;
        $newhotel->location = $request->location;
        $newhotel->save();
        return back();
    }
    public function createPlaces()
    {
        return view('admin.add_place');
    }
    public function postPlaces(Request $request){
        $newplace = new place();
        $newplace->name_place = $request->name;
        $newplace->save();
        return back();
    }
    public function getRooms(){
        $iduser = Auth::user()->id_hotel;
        $rooms = Room::where('id_hotel',$iduser)->paginate(10);
        $allrooms = Room::orderBy('id','desc')->paginate(15);
        return view('admin.rooms',compact('rooms','allrooms'));
    }
    public function delroom($id){
        Room::destroy($id);
        return back();
    }
    public function editHotel($id){
        $hotels = Hotel::where('id',$id)->get();
        return view('admin.edithotel',compact('hotels'));
    }
    public function posteditHotel(Request $request, $id){
        $edit = Hotel::find($id);
        $edit->phone = $request->phone;
        $edit->email = $request->email;
        $edit->detail = $request->detail;
        if ($request->avatar_hotel != null) {
            $edit->avatar_hotel = $request->avatar_hotel;
        }
        $edit->save();
        return back();
    }
    public function createRooms(){
        $listhotels = Hotel::all();
        return view('admin.add_room',compact('listhotels'));
    }
    public function postRooms(Request $request){
        $newroom = new room();
        $newroom->price = $request->price;
        $newroom->no_slot = $request->no_slot;
        $newroom->no_bed = $request->no_bed;
        $newroom->no_room = $request->no_room;
        $newroom->vip = $request->vip;
        $newroom->detail = $request->detail;
        $newroom->id_hotel = $request->id_hotel;
        $newroom->avatar_room = $request->avatar_room;
        $newroom->save();
        return back();
    }
    public function editRoom($id){
        $rooms = Room::where('id',$id)->get();
        return view('admin.editroom',compact('rooms'));
    }
    public function posteditRoom(Request $request, $id){
        $edit = Room::find($id);
        $edit->price = $request->price;
        $edit->no_slot = $request->no_slot;
        $edit->no_bed = $request->no_bed;
        $edit->vip = $request->vip;
        $edit->detail = $request->detail;
        $edit->avatar_room = $request->avatar_room;
        if ($request->avatar_room != null) {
            $edit->avatar_room = $request->avatar_room;
        }
        $edit->save();
        return back();
    }
    public function getlistadinhotel($id){
        $listad = User::where('id_hotel',$id)->get();
        return view('admin.listadmin',compact('listad'));
    }
    public function getorders(){
        $iduser = Auth::user()->id_hotel;
        $orders = Bill::where('id_hotel',$iduser)->paginate(10);
        $allorders = Bill::orderBy('id','desc')->paginate(15);
        return view('admin.orders',compact('allorders','orders'));
    }
    public function getorderdetail($id){
        $orderdetail = BillDetail::where('id_bill',$id)->paginate(10);
        return view('admin.orderdetail',compact('orderdetail'));
    }
    public function getlistroominhotel($id){
        $listroominhotel = Room::where('id_hotel',$id)->paginate(10);
        $listroominhotel_not_free_id = Room::where('id_hotel',$id)->pluck('id')->toArray();
        $mutable = Carbon::now()->format('Y-m-d H:i:s');
        $bills=Bill::where('status',1)->get();
        
        foreach($listroominhotel_not_free_id as $room)
        {
            if($bills)
            {
                foreach($bills as $bill)
                {
                    $bills_detail=BillDetail::where('id_bill',$bill->id)->get();
                    foreach($bills_detail as $detail)
                    {
                        $room_on_bill= $detail->id_room;
                        if (($key = array_search($room_on_bill, $listroominhotel_not_free_id)) !== false) {
                            unset($listroominhotel_not_free_id[$key]);
                        }
                    }
                }
            }
        }

        return view('admin.listroominhotel',compact('listroominhotel'));
    }
}
