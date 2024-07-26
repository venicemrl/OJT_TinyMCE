<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Response; 

class ContentController extends Controller
{
    public function index()
    {
        return view('content-form');
    }
    public function storeContent(Request $request)
    {
      $input_data = $request->all();
      $content = new Content();     
      $content->title = $input_data['title'];
      $content->description = $input_data['description'];
      $content->save();
      return redirect()->route('content.form')->withSuccess(['Data saved successfully.']);
    }
   
    public function showContent(Request $request, $id)
    {
      $content = Content::where('id',$id)->first();
      return view('display-content', compact('content'));
    }
}
