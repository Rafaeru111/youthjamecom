<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {

       // model category will fetch the data and store in $cat
        $cat = Category::all();
/*         function is used to convert given variable to to array 
            in which the key of the array will be the name of the variable 
            and the value of the array will be the value of the variable. */
            
        return view('admin.Category.index', compact('cat'));
    }

    //add controller
    public function add()
    {
        return view('admin.Category.add');
    }


//edit controller
    public function edit($id)
    {   //find edit based on the 
        $cat = Category::find($id);
        return view('admin.Category.edit', compact('cat'));
    }



    //insert controller
    public function insert(Request $request)
    {
        // Inserting Image
        $cat = new Category();
        if($request->hasFile('image'))
        {
            //setting up the path of the uploaded file
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category' ,$filename);
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
          //after submitting, it will redirect to the dashboard
        return redirect('/category')->with('status',"Category Successfully Added!!"); 
    }

    //Delete 
    public function destroy($id)
    {
        
        $cat = Category::find($id); 
        if($cat->image)
        {
            // Declaring the path
            $path = 'assets/uploads/category/'.$cat->image;
            //checking if it still exist
            if(File::exists($path))
            {   //delete the old fro mthe path
                File::delete($path);
            }
        }
        $cat->delete();
        return redirect('/category')->with('status',"Category Deleted Already!!"); 
    }


    public function update(Request $request, $id) 
    {
        $cat = Category::find($id);
        if($request->hasFile('image'))
        {
            // Declaring the path
            $path = 'assets/uploads/category/'.$cat->image;
            //checking if it still exist
            if(File::exists($path))
            {   //delete the old fro mthe path
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category' ,$filename);
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
        // update the request
        $cat->update();
        return redirect('/category')->with('status',"Category Successfully Updated!!"); 
    }

    
    public function changeStatus(Request $request)
    {
        $cat = User::find($request->id);
        $cat->status = $request->status;
        $cat->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
