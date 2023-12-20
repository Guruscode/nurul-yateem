@extends('layouts.app')
  
@section('title', '')
  
@section('contents')

    <hr />
    <h3 class="mb-3">Bio Data</h3>
    <div class="tab-pane mt-4" id="settings">
        <form class="form-horizontal" action=" {{ route('guidian.user.save')}}" method="POST">
            @csrf @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    
            @endif

            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="firstname" class="form-control @error('firstname')is-invalid @enderror" id="inputName2" placeholder="First Name" />
                    @error('firstname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="lastname" class="form-control @error('lastname')is-invalid @enderror" id="inputName" placeholder="Lastname" />
                    @error('lastname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="inputName" placeholder="Input Address" />
                  @error('email')
                  <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="inputName" placeholder="Password" />
                @error('password')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
          <label for="inputName" class="col-sm-2 col-form-label">Confirm Password</label>
          <div class="col-sm-10">
              <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')is-invalid @enderror" id="inputName" placeholder="Confirm Password" />
              @error('password_confirmation')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror
          </div>
      </div>
  
      <div class="form-group row">
        <label for="number" class="col-sm-2 col-form-label">User Type</label>
        <div class="col-sm-10">
            <select name="user_type" class="form-control @error('user_type')is-invalid @enderror" aria-label="Default select example">
     
                <option value="3">Guardian</option>
            </select>
            @error('employment_status')
            <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
    </div>
    
      
         
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" style="width: 50%;" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
    @endsection