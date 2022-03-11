<?php

function getTranslationsJs()
{
  $translationFile = resource_path('lang/' . app()->getLocale() . '.json');

  if (!is_readable($translationFile)) {
    $translationFile = resource_path('lang/' . app('translator')->getFallback() . '.json');
  }

  return ['translations' => json_decode(file_get_contents($translationFile), true)];
}

function uploadImage($img, $folder, $height = 900, $width = 900)
{
  File::exists(public_path() . '/uploads/' . $folder) or File::makeDirectory(public_path() . '/uploads/' . $folder, 0755, true);

  $path = $img->hashName('uploads/' . $folder);

  \Image::make($img)->resize($height, $width, function ($constraint) {
    $constraint->aspectRatio();
  })->save(public_path($path));

  return $path;
}

function moveImgFromTemp($folder, $path_of_img, $name_of_img)
{

  File::exists(public_path() . '/' . $folder) or File::makeDirectory(public_path() . '/' . $folder, 0755, true);

  if (File::exists($path_of_img)) {
    File::move(public_path($path_of_img), public_path() . '/' . $folder . '/' . $name_of_img);
  }
  return $folder . '/' . $name_of_img;
}

function deleteFile($file)
{
  if (\File::exists(public_path($file))) {
    \File::delete(public_path($file));
  }
}