<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Age;
use Illuminate\Http\Request;

class AgesController extends Controller
{
  public function index()
  {
    return view('dashboard.ages.index');
  }

  public function data()
  {
    $ages = Age::orderBy('id', 'desc')->paginate(10);

    return response()->json(compact('ages'));
  }

  public function create()
  {
    return view('dashboard.ages.form');
  }

  public function store(Request $request)
  {

    $request->validate([
        'age' => 'required',
        'cm' => 'required',
        'inch' => 'required',
        'eur' => 'required',
        'uk' => 'required',
        'usa' => 'required',
        'jap' => 'required',
    ], [], [
        'age' => 'الحقل',
        'cm' => 'الحقل',
        'inch' => 'الحقل',
        'eur' => 'الحقل',
        'uk' => 'الحقل',
        'usa' => 'الحقل',
        'jap' => 'الحقل',
    ]);

    $male_img = null;
    if ($request->male_img) {
      $male_img = moveImgFromTemp('uploads/ages/males', $request->male_img['img'], $request->male_img['name']);
    }
    $female_img = null;
    if ($request->female_img) {
      $female_img = moveImgFromTemp('uploads/ages/females', $request->female_img['img'], $request->female_img['name']);
    }

    $age = Age::create([
        'age' => $request->age,
        'cm' => $request->cm,
        'inch' => $request->inch,
        'eur' => $request->eur,
        'uk' => $request->uk,
        'usa' => $request->usa,
        'jap' => $request->jap,
        'male_img' => $male_img,
        'female_img' => $female_img
    ]);

    return response()->json(['message' => "تم الحفظ بنجاح"]);
  }

  public function edit(Age $age)
  {
    return view('dashboard.ages.form', compact('age'));
  }

  public function update(Request $request, Age $age)
  {
    $request->validate([
        'age' => 'required',
        'cm' => 'required',
        'inch' => 'required',
        'eur' => 'required',
        'uk' => 'required',
        'usa' => 'required',
        'jap' => 'required',
    ], [], [
        'age' => 'الحقل',
        'cm' => 'الحقل',
        'inch' => 'الحقل',
        'eur' => 'الحقل',
        'uk' => 'الحقل',
        'usa' => 'الحقل',
        'jap' => 'الحقل',
    ]);

    $male_img = $age->male_img;
    if ($request->male_img) {
      deleteFile($age->male_img);
      $male_img = moveImgFromTemp('uploads/ages/males', $request->male_img['img'], $request->male_img['name']);
    }
    $female_img = $age->female_img;
    if ($request->female_img) {
      deleteFile($age->female_img);
      $female_img = moveImgFromTemp('uploads/ages/females', $request->female_img['img'], $request->female_img['name']);
    }

    $age->update([
        'age' => $request->age,
        'cm' => $request->cm,
        'inch' => $request->inch,
        'eur' => $request->eur,
        'uk' => $request->uk,
        'usa' => $request->usa,
        'jap' => $request->jap,
        'male_img' => $male_img,
        'female_img' => $female_img
    ]);

    return response()->json(['message' => "تم الحفظ بنجاح"]);
  }

  public function delete(Age $age)
  {
    deleteFile($age->male_img);
    deleteFile($age->female_img);

    $age->delete();

    return response()->json(['message' => 'تم الحذف بنجاح']);
  }
}
