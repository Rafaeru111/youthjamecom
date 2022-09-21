@extends('layouts.admin')
@section('content')
  
<div class="container-fluid">
                    <!-- Page Heading -->
                         <div class="card">
                           <div class="card-header "><h1 class="text-center"><strong> Add Product</strong> </h1></div>
                            <div class="card-body" style="text-color: black">
                                    <form action ="{{ url('insert-prod') }}" method= "post" enctype="multipart/form-data">
                                    @csrf
                                    <hr>
                                    <h2 class="text-center"><strong>Name and Description</strong> </h2>
                                    <hr> 
                                            <div class="row text-center">
                                                <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Category</strong></label>
                                                    <select class="form-select form-control" name="cat_id" aria-label="Default select example">
                                                        <option selected>Select Category</option>
                                                        @foreach($cat as $c)
                                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                      </select>
                                                 </div>
                                                 <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Status</strong></label>
                                                    <input type="checkbox" class="form-control" name="status">
                                                </div>
                                                 <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Most Popular</strong></label>
                                                    <input type="checkbox" class="form-control" name="trend">
                                                 </div>
                                            </div>


                                            <div class="row">
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""><strong> Name</strong></label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""> <strong>Short Description</strong></label>
                                                    <input type="text" class="form-control" name="psdec">
                                                </div>
                                                </div> 
                                                    <div class='col-md-12 mb-3'>
                                                    <label for=""> <strong>Description</strong></label>
                                                        <textarea class="form-control" rows = '3' name="pdesc"></textarea>
                                                    </div>
                                                                <hr>
                                                                <h2 class="text-center"><strong> Pricing and Quantity</strong> </h2>
                                                                <hr>
                                                <div class="row">
                                                    <div class='col-md-3 mb-3 text-center'>
                                                        <label for=""><strong> Quantity Available</strong></label>
                                                        <input type="number" class="form-control" name="qty">
                                                </div>
                                                    <div class='col-md-3 mb-3 text-center'>
                                                            <label for=""> <strong>Original Price</strong></label>
                                                            <input type="number" class="form-control" name="original_price">
                                                    </div>
                                                    <div class='col-md-3 mb-3 text-center'>
                                                            <label for=""><strong> Selling Price</strong></label>
                                                            <input type="number" class="form-control" name="selling_price">
                                                    </div>
                                                    <div class='col-md-3 mb-3 text-center'>
                                                        <label for=""><strong>Tax</strong></label>
                                                        <input type="number" class="form-control" name="tax">
                                                </div>
                                                </div>      


                    

                                                        <hr>

                                             <h2 class="text-center"><strong> Metas</strong> </h2>
                                             <hr>
                                             <div class="row ">
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""><strong> Meta Tile</strong></label>
                                                    <input type="text" class="form-control" name="mett">
                                                 </div>
                                                 <div class='col-md-6 mb-3'>
                                                    <label for=""> <strong>Meta Keyword</strong></label>
                                                    <input type="text" class="form-control" name="metk">
                                                 </div>
                                             </div>         
                                            
                                             <div class='col-md-12'>
                                                <label for=""><strong> Meta Description</strong></label>
                                                <textarea class="form-control" rows = '3' name="metd"></textarea>
                                             </div>
                                       
                                             <div class='col-md-3'>
                                                <label for=""> <strong>Image</strong></label>
                                                <input type="file" class="form-control" name="image">
                                             </div>
                                             <hr>
                                             <div class='col-md-12 text-center'>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit"> Submit </button>
                                             </div>
    
                                        
                                    </form>
                            </div>
                        </div>
                    

                    <!-- Content Row -->



@endsection