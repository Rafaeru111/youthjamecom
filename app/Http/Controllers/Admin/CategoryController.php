<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.Category.index');
    }

    public function add()
    {
        return view('admin.Category.add');
    }

    public function insert(Request $request)
    {
        // Inserting Image
        $cat = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category'.$filename);
            $cat->image = $filename;
        }
          $cat->name = $request->input('name');
          $cat->slug = $request->input('slug');
          $cat->desc = $request->input('desc');
          $cat->status = $request->input('status') == TRUE ? '1':'0';
          $cat->pop = $request->input('pop') == TRUE ? '1':'0';
          $cat->metat = $request->input('metat');
          $cat->metad = $request->input('metad');
          $cat->metak = $request->input('metak');
          $cat->save();
        return redirect('/dashboard')->with('status',"Category Successfully Added!!"); 
    }
}
