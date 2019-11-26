<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helpers\AmazonS3;
use App\Helpers\Local;
use File;
class ImageController extends Controller
{
   public function uploadImage(Request $request)
   {
       $url = Local::upload($request->image);
       return response()->json([
           'url' => $url
       ]);
   }
   public static function deleteImage(Request $request)
   {
       $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://';
       $HOST = $protocol . $_SERVER['HTTP_HOST'];
       $new_url = str_replace($HOST, '', $request->url);
       File::delete(base_path() . $new_url);
       return response()->json([
           'message' => 'Success!'
       ]);
   }
}