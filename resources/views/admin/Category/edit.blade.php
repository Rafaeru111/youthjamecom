@extends('layouts.admin')
@section('content')
  
<div class="container-fluid">
                    <!-- Page Heading -->
                  
             

                         <div class="card">
                            <div class="card-header "><h1 class="text-center"><strong> Category Edit</strong> <strong></div>
                            <div class="card-body">
                                    <form action ="{{ url('update-category',$cat->id) }}" method= "post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                            <div class="row">
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""> Name</label>
                                                    <input type="text" value="{{$cat->name}}" class="form-control" name="name">
                                                </div>
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""> Slug</label>
                                                    <input type="text" value="{{$cat->slug}}"  class="form-control" name="slug">
                                                </div>
                                            </div> 
                                             <div class='col-md-12 mb-3'>
                                                <label for=""> Description</label>
                                                <textarea class="form-control" rows = '3'  name="desc">{{$cat->desc}}</textarea>
                                             </div>
                                             <div class="row">
                                                <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Status</strong></label>
                                                    <!-- Single lined conditional statement if the status are equal to 1 then the checkbox is checked -->
                                                    <input type="checkbox" {{$cat->status == 1 ? 'checked' : '' }} class="form-control" name="status">
                                                </div>
                                                 <div class='col-md-2 mb-3'>
                                                    <label for=""> Popular</label>
                                                    <input type="checkbox" {{$cat->pop == 1 ? 'checked' : '' }} class="form-control" name="pop">
                                                 </div>
                                                 </div>
                                             <div class='col-md-6 mb-3'>
                                                <label for=""> Meta Tile</label>
                                                <input type="text" value="{{$cat->metat}}" class="form-control" name="metat">
                                             </div>
                                             <div class='col-md-12'>
                                                <label for=""> Meta Description</label>
                                                <textarea class="form-control" rows = '3' name="metad">{{$cat->metad}}</textarea>
                                             </div>
                                             <div class='col-md-6 mb-3'>
                                                <label for=""> Meta Keyword</label>
                                                <input type="text" value="{{$cat->metak}}" class="form-control" name="metak">
                                             </div>

                                                <div class='col-md-12  mb-3'>
                                                    <label for=""> Image</label>
                                                    @if($cat->image)
                                                    <img src="{{asset('assets/uploads/category/'.$cat->image)}}" alt="cat-image" width="100">
                                                    @endif
                                                
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