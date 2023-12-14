@extends('layouts.app')
  
@section('title', '')
  
@section('contents')

    <hr />
 
    <div class="container-fluid">        
        <div class="card card-body blur shadow-blur mx-2 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{url('assets/img/bruce-mars.jpg')}}" style="border-radius: 20%; height:150px" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                 
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{ auth()->user()->firstname }}. {{ auth()->user()->lastname }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ auth()->user()->email }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; {{ auth()->user()->firstname }}</li>
                            
                            </ul>
               
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card mb-4">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-1">Orphans</h6>
                                <p class="text-sm"></p>
                            </div>
                    <div class="card-body p-3">
                        <div class="row">
                            {{-- <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="{{url('assets/img/bruce-mars.jpg')}}" style="border-radius: 50%; height:50px; margin: 30px 0 0 20px" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0 m-1 ">
                                        <h5>First and Last Name</h5>
                                            <p class="text-gradient text-dark mb-2 text-sm">Gender</p>
                                                <a href="javascript:;"></a>
                                            <p class="mb-4 text-sm">DOB</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button"  style="width: 100px !important; border: 1px solid green !important; color : green !important"  class="btn btn-outline-primary btn-sm mb-0">View </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           --}}
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card h-100 card-plain border hover">
                                        <div class="card-body d-flex flex-column justify-content-center text-center">
                                            <a style="text-decoration: none" href="{{route('guidian/create/orphans')}}">
                                            <i class="fa fa-plus text-secondary mb-3"></i>
                                            <h5 class=" text-secondary"> Add Ophan </h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
</div>
@endsection