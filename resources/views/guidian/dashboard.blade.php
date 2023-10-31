@extends('layouts.app')

@section('title', 'Welcome ')


@section('contents')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin"  style="background-image:url('assets/img/people.svg');" >
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              @if(!$profile->isEmpty())
              <h6 class="font-weight-normal mb-0">To be able to add Orphans you need to complete your Profile Data <span class="text-primary" ><a style="text-decoration:none;" href="{{route('guidian/create')}}">Profile Upload!</a></span></h6>
              @endif
            </div>
            <div class="col-12 col-xl-4 mb-4">
             <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                  <a class="dropdown-item" href="#">January - March</a>
                  <a class="dropdown-item" href="#">March - June</a>
                  <a class="dropdown-item" href="#">June - August</a>
                  <a class="dropdown-item" href="#">August - November</a>
                </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card mt-6">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              <img src="{{url('assets/img/people.svg')}}" width="100%" height="100%" alt="people">
          
            </div>
          </div>
        </div>
    
        <div class="col-md-6 grid-margin stretch-card mb-4">
            <div class="card">
                <div class="card-body">
                <p class="card-title mb-0">All Ophans</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                        <th>Names</th>
                        <th>Age</th>
                        <th>DOB</th>
                        <th>Status</th>
                        </tr>  
                    </thead>
                    <tbody>
                        <tr>
                        <td> Full Name </td>
                        <td class="font-weight-bold">10</td>
                        <td>21 Sep 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                        </tr>
                        <tr>
                            <td> Full Name </td>
                            <td class="font-weight-bold">10</td>
                        <td>13 Jun 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        <tr>
                            <td> Full Name </td>
                            <td class="font-weight-bold">10</td>
                        <td>28 Sep 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                            <td> Full Name </td>
                            <td class="font-weight-bold">10</td>
                        <td>30 Jun 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                            <td> Full Name </td>
                            <td class="font-weight-bold">10</td>
                        <td>01 Nov 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                        </tr>
                        <tr>
                            <td> Full Name </td>
                            <td class="font-weight-bold">10</td>
                        <td>20 Mar 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                            <td> Full Name </td>
                            <td class="font-weight-bold">10</td>
                        <td>26 Oct 2018</td>
                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        
      </div>
   
  
 
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Advanced Table</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="example" class="display expandable-table" style="width:100%">
                      <thead>
                        <tr>
                          <th>Quote#</th>
                          <th>Product</th>
                          <th>Business type</th>
                          <th>Policy holder</th>
                          <th>Premium</th>
                          <th>Status</th>
                          <th>Updated at</th>
                          <th></th>
                        </tr>
                      </thead>
                  </table>
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