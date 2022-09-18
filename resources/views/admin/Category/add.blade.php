@extends('layouts.admin')
@section('content')
  
<div class="container-fluid">
                    <!-- Page Heading -->
                  
             

                         <div class="card">
                            <div class="card-body">
                                    <form action ="{{ url('insert-category') }}" method= "post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="row">
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""> Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class='col-md-6 mb-3'>
                                                    <label for=""> Slug</label>
                                                    <input type="text" class="form-control" name="slug">
                                                </div>
                                            </div> 
                                             <div class='col-md-12 mb-3'>
                                                <label for=""> Description</label>
                                                <textarea class="form-control" rows = '3' name="desc"></textarea>
                                             </div>
                                             <div class="row">
                                                <div class='col-md-2 mb-3'>
                                                    <label for=""> <strong>Description</strong></label>
                                                    <input type="checkbox" class="form-control" name="status">
                                                </div>
                                                 <div class='col-md-2 mb-3'>
                                                    <label for=""> Popular</label>
                                                    <input type="checkbox" class="form-control" name="pop">
                                                 </div>
                                                 </div>
                                             <div class='col-md-6 mb-3'>
                                                <label for=""> Meta Tile</label>
                                                <input type="text" class="form-control" name="metat">
                                             </div>
                                             <div class='col-md-12'>
                                                <label for=""> Meta Description</label>
                                                <textarea class="form-control" rows = '3' name="metad"></textarea>
                                             </div>
                                             <div class='col-md-6 mb-3'>
                                                <label for=""> Meta Keyword</label>
                                                <input type="text" class="form-control" name="metak">
                                             </div>
                                             <div class='col-md-12'>
                                                <label for=""> Image</label>
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