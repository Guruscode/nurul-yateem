@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Guidian List</h1>
    
    <hr />

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="col-dm-6 mx-2" style="text-align: right;">
                <a href="{{ url('admin/guidian/guardianuser')}}" class="btn btn-primary">Add new Guidian</a>
              </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                    <thead>
                       
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Annual income</th>
                            <th>Action</th>
                        
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach($getRecord as $user)
                            @foreach ($user->guardians as $guardian)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $guardian->phone_number }}</td>
                                    <td>{{ $guardian->annual_income }}</td>
                                    {{-- <td>{{ $value->guardian-> }}</td>
                                    <td>{{ $value->email }}</td> --}}
                                <td class="text-center">
                                
                                <a href="{{ url('admin/guidian/edit/'.$user->id)}}" class="btn btn-success font-weight-bold  mr-4 " data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                                <a href="{{ url('admin/guidian/delete/'.$user->id)}}" class="btn btn-danger font-weight-bold mr-4" data-toggle="tooltip" data-original-title="delete user">
                                    Delete
                                    </a>
                                </td>
                        
                                </tr>
                            @endforeach
                        
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection