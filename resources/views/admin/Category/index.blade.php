@extends('layouts.admin')
@section('content')
  
<div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Category Page</h1>
                        <a href="{{ url('addcat')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Category </a>
                    </div>
                  
                <div class="card">

                    <div class="card-body">
                           <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cat as $c)
                                        <tr>
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->name}}</td>
                                            <td>{{$c->slug}}</td>
                                                <td>
                                                    <img width="45px" src="{{asset('assets/uploads/category/'.$c->image)}}" alt=""> 
                                        
                                                </td>
                                            <td>
                                                    <button class="btn btn-primary"> Edit </button>
                                                    <button class="btn btn-danger"> Delete </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                    </div>
                </div>


</div>



@endsection