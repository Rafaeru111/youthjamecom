<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
        public function index()
        {
            $prod = Products::all();
            
               return view('admin.Product.index', compact('prod'));
        }

        
        public function add()
        {
                $cat = Category::all();
               return view('admin.Product.add',  compact('cat'));
        }



    //insert controller
    public function insert(Request $request)
    {
        // Inserting Image
        $prod = new Products();

        if($request->hasFile('image'))
        {
            //setting up the path of the uploaded file
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product' ,$filename);
            $prod->image = $filename;
        }
          $prod->cat_id = $request->input('cat_id');
          $prod->name = $request->input('name');
          $prod->psdec = $request->input('psdec');
          $prod->pdesc = $request->input('pdesc');
          $prod->original_price = $request->input('original_price');
          $prod->selling_price = $request->input('selling_price');
          $prod->qty = $request->input('qty');
          $prod->tax = $request->input('tax');
          $prod->status = $request->input('status') == TRUE ? '1':'0';
          $prod->trend = $request->input('trend') == TRUE ? '1':'0';
          $prod->mett = $request->input('mett');
          $prod->metd = $request->input('metd');
          $prod->metk = $request->input('metk');
          $prod->save();

          //after submitting, it will redirect to the dashboard
        return redirect('/product')->with('status',"Category Successfully Added!!"); 
    }


    //edit prod
    public function edit($id)
    {   //find edit based on the ID
        $prod = Products::find($id);
                                         //prod is declared
        return view('admin.Product.edit', compact('prod'));
    }
 
     //update product
     public function update(Request $request, $id) 
     {
         $prod = Products::find($id);
         if($request->hasFile('image'))
         {
             // Declaring the path
             $path = 'assets/uploads/product/'.$prod->image;
             //checking if it still exist

             if(File::exists($path))
             {   //delete the old fro mthe path
                 File::delete($path);
             }

             $file = $request->file('image');
             $ext = $file->getClientOriginalExtension();
             $filename = time().'.'.$ext;
             $file->move('assets/uploads/product' ,$filename);
             $prod->image = $filename;
         }

 
         $prod->name = $request->input('name');
         $prod->psdec = $request->input('psdec');
         $prod->pdesc = $request->input('pdesc');
         $prod->original_price = $request->input('original_price');
         $prod->selling_price = $request->input('selling_price');
         $prod->qty = $request->input('qty');
         $prod->tax = $request->input('tax');
         $prod->status = $request->input('status') == TRUE ? '1':'0';
         $prod->trend = $request->input('trend') == TRUE ? '1':'0';
         $prod->mett = $request->input('mett');
         $prod->metd = $request->input('metd');
         $prod->metk = $request->input('metk');
         // update the request
         $prod->update();
         return redirect('/product')->with('status',"Product Successfully Updated!!"); 
     }
 
       //Delete 
    public function destroy($id)
    {
        
        $prod = Products::find($id); 
        if($prod->image)
        {
            // Declaring the path
            $path = 'assets/uploads/category/'.$prod->image;
            //checking if it still exist
            if(File::exists($path))
            {   //delete the old fro mthe path
                File::delete($path);
            }
        }
        $prod->delete();
        return redirect('/product')->with('status',"Product Deleted Already!!"); 
    }
}
