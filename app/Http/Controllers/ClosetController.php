<?php

namespace App\Http\Controllers;

use App\Models\Closet;
use Illuminate\Http\Request;

class ClosetController extends Controller
{
  public function addProduct()
  { 
    $closets = Closet::paginate(3);
    return view('admin.addProduct', compact('closets'));
  }

  public function welcome()
  {
    $closets = Closet::all();
    return view('user.home', compact('closets'));
  }

  public function exploreCloset()
  {
    $closets = Closet::all();
    return view('user.explore', compact('closets'));
  }

  public function addItem()
  {

    return view('admin.addItem');
  }

  public function addedItem()
  {
    $closets = Closet::all();
    return view('admin.explore',compact('closets'));
  }

  public function createCloset(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'brand' => 'required',
      'description' => 'required',
      'price' => 'required',
      'image' => 'required',
    ]);


    try {
      $closet = new Closet();
      $closet->name = $request->name;
      $closet->brand = $request->brand;
      $closet->description = $request->description;
      $closet->price = $request->price;

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move(public_path('Image/'), $filename);
      }
      $closet->image = 'Image/' . $filename;
      $closet->save();
      return redirect('product')->with('message', 'Successfully Created!');
    } catch (\Throwable $th) {
      return back()->with('message', 'Sorry! Error while creating, Please try again.');
    }
  }

  public function destroy($id)
  {
    try {
      $data = Closet::where('id', $id)->first();
      $data->delete();
      return redirect('product')->with('message', 'Successfully Deleted!');
    } catch (\Throwable $th) {
      return back()->with('message', 'Sorry! Error while Deleting, Please try again.');
    }
  }


  public function edit($id)
  {
    $closet = Closet::find($id);
    return view('admin.edit', compact('closet'));
  }

  
  public function editBlog($id, Request $request)
  {
    
try{
    $closet = Closet::find($id);
    $closet->name = $request->name;
    $closet->brand = $request->brand;
    $closet->description = $request->description;
    $closet->price = $request->price;
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalName();
      $file->move(public_path('Image/'), $filename);
      $closet->image = 'Image/' . $filename;
    }
    $closet->update();
    return redirect('product')->with('message', 'Successfully Updated!');
    } catch (\Throwable $th) {
      return back()->with('message', 'Sorry! Error while updating, Please try again.');
    }
  
  
}


public function description($id){
  $closet = Closet::find($id);
  return view('user.description',compact('closet'));
}

public function search(Request $request)
    {
        
        $closets = Closet::where('name', 'like', '%'.$request->search.'%')->get();   
        return view('user.explore', compact('closets'));
    }



}