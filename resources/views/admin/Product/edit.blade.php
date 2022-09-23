@extends('layouts.admin')
@section('content')
  
<div class="container-fluid">
                    <!-- Page Heading -->
                         <div class="card">
                           <div class="card-header "><h1 class="text-center"><strong> Edit Product</strong> </h1></div>
                            <div class="card-body" style="text-color: black">
                                    <form action ="{{ url('update-prod',$prod->id) }}" method= "post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <hr>
                                    <h2 class="text-center"><strong>Name and Description</strong> </h2>
                                    <hr> 
                                 
                                            <div class="row text-center">
                                                <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Category</strong></label>
                                                    <select class="form-select form-control" name="cat_id" aria-label="Default select example">
                                                        <option selected>{{$prod->cat->name}}</option>      
                                                      </select>
                                                 </div>
                                                 <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Status</strong></label>
                                                    <input type="checkbox" {{$prod->status == '1' ? 'checked' : ''}} class="form-control" name="status">
                                                </div>
                                                 <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Most Popular</strong></label>
                                                    <input type="checkbox"  {{$prod->trend == '1' ? 'checked' : '' }} class="form-control" name="trend">
                                                 </div>
                                            </div>


                                            <div class="row">
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""><strong> Name</strong></label>
                                                    <input type="text" value="{{$prod->name}}" class="form-control" name="name">
                                                </div>
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""> <strong>Short Description</strong></label>
                                                    <input type="text" value="{{$prod->psdec}}" class="form-control" name="psdec">
                                                </div>
                                                </div> 
                                                    <div class='col-md-12 mb-3'>
                                                    <label for=""> <strong>Description</strong></label>
                                                        <textarea class="form-control" rows = '3' name="pdesc">{{$prod->pdesc}}</textarea>
                                                    </div>
                                                                <hr>
                                                                <h2 class="text-center"><strong> Pricing and Quantity</strong> </h2>
                                                                <hr>
                                                <div class="row">
                                                    <div class='col-md-3 mb-3 text-center'>
                                                        <label for=""><strong> Quantity Available</strong></label>
                                                        <input type="number" value="{{$prod->qty}}" class="form-control" name="qty">
                                                </div>
                                                    <div class='col-md-3 mb-3 text-center'>
                                                            <label for=""> <strong>Original Price</strong></label>
                                                            <input type="number" value="{{$prod->original_price}}" class="form-control" name="original_price">
                                                    </div>
                                                    <div class='col-md-3 mb-3 text-center'>
                                                            <label for=""><strong> Selling Price</strong></label>
                                                            <input type="number" value="{{$prod->selling_price}}" class="form-control" name="selling_price">
                                                    </div>
                                                    <div class='col-md-3 mb-3 text-center'>
                                                        <label for=""><strong>Tax</strong></label>
                                                        <input type="number"  value="{{$prod->tax}}" class="form-control" name="tax">
                                                </div>
                                                </div>      


                                                        <hr>

                                             <h2 class="text-center"><strong> Metas</strong> </h2>
                                             <hr>
                                             <div class="row ">
                                                    <div class='col-md-6 mb-3'>
                                                        <label for=""><strong> Meta Tile</strong></label>
                                                        <input type="text" value="{{$prod->mett}}" class="form-control" name="mett">
                                                    </div>
                                                    <div class='col-md-6 mb-3'>
                                                        <label for=""> <strong>Meta Keyword</strong></label>
                                                        <input type="text" value="{{$prod->metk}}" class="form-control" name="metk">
                                                    </div>
                                             </div>         
                                            
                                             <div class='col-md-12'>
                                                <label for=""><strong> Meta Description</strong></label>
                                                <textarea class="form-control" rows = '3' name="metd"> {{$prod->metd}} </textarea>
                                             </div>
                                       
                                             <div class="row ">
                                                <div class='col-md-6' style="padding-top: 15px;" >
                            
                                                    <label for=""><strong>Image</strong></label><br>
                                                        @if($prod->image)
                                                        <img src="{{asset('assets/uploads/product/'.$prod->image)}}" alt="prod-image" width="500">
                                                        @endif
                                                 </div>
                                                 <div class='col-md-6' style="padding-top: 15px;" >
                                                    <div class='col-md-6'>
                                                        <label for=""> <strong>Image</strong></label>
                                                        <input type="file" class="form-control" name="image">
                                                     </div>
                                                 </div>
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