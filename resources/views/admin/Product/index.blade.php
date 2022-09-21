@extends('layouts.admin')
@section('content')

<div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Products Page</h1>
                        <a href="{{ url('addprod')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-plus fa-lg text-white-50"></i> Add Product </a> 
                
                    </div>
                  
                <div class="card">

                    <div class="card-body">
                           <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Popular</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($prod as $p)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                                <!-- Single line if else statement  1 = YES and 0 = NO-->
                                            <td></td>
                                            <td></td>
                                                <td>
                                                    {{-- <img height="60px" src="{{asset('assets/uploads/product/'.$c->image)}}" alt="">  --}}
                                        
                                                </td>
                                            <td> 
                                              {{--       <a href="{{ url('editcat/'.$c->id)}}" class="btn btn-primary"> Edit </a>
                                                    
                                                    <a href="{{ url('deletecat/'.$c->id)}}" class="btn btn-danger"> Delete </a> --}}
                                            </td>
                                    
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                    </div>
                </div>


</div>



@endsection