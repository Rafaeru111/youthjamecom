<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;

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

}
