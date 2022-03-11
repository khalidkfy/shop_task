<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  function uploadImg(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'file' => 'required|image|mimes:png,jpg,jpeg',
    ], [], [
        'file' => 'الملف',
    ]);

    if ($validator->fails()) {
      return response()->json($validator->messages(), 422);
    }

    $img = $request->file('file');
    $img_mime = $img->getClientOriginalExtension();
    $path = uploadImage($img, 'temps');
    $img_name = basename($path);
    return ['img' => $path, 'name' => $img_name];
  }
}
