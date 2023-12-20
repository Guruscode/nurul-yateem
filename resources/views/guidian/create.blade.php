@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h2 class="mb-3">Complete Your Profile Below</h2>
    <hr />
    <h3 class="mb-3">Bio Data</h3>
    <div class="tab-pane mt-4" id="settings">
        <form class="form-horizontal" action=" {{ route('save.guidian.register')}}" method="POST">
            @csrf @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    
            @endif
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">Profile Image</label>
                <div class="col-sm-10">
                    <input name="profile_img" style="height: 60px;" type="file" class="form-control @error('profile_img')is-invalid @enderror" id="customFile" />
                    @error('profile_img')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
    
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" class="form-control @error('gender')is-invalid @enderror" aria-label="Default select example">
                
                        <option selected>--------</option>
                        <option value="FEMALE">Female</option>
                        <option value="MALE">Male</option>
                        <option value="OTHERS">Others</option>
                    </select>
                    @error('gender')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="number" name="phone_number" class="form-control @error('phone_number')is-invalid @enderror" id="inputName2" placeholder="+234 123456789" />
                    @error('phone_number')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">DOB</label>
                <div class="col-sm-10">
                    <input type="date" name="dob" class="form-control @error('dob')is-invalid @enderror" id="inputName" placeholder="Lastname" />
                    @error('dob')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
    
            <hr style="margin: 40px 0 40px 0;" />
    
            {{-- Second Phase --}}
    
            <h3 class="mb-3">OTHER DATA</h3>
    
            <div class="form-group row mt-4">
                <label for="number" class="col-sm-2 col-form-label">Alternative Phone Number</label>
                <div class="col-sm-10">
                    <input type="number" name="alt_phn_number" class="form-control @error('alt_phn_number')is-invalid @enderror" placeholder="+234 5678901" />
                    @error('alt_phn_number')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
           
    
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Employment Status</label>
                <div class="col-sm-10">
                    <select name="employment_status" class="form-control @error('employment_status')is-invalid @enderror" aria-label="Default select example">
                        <option selected>--------</option>
                        <option value="EMPLOYED">Employed</option>
                        <option value="UNEMPLOYED">Unemployed</option>
                        <option value="SELF_EMPLOYED">Selfemployed</option>
                    </select>
                    @error('employment_status')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Annual Income</label>
                <div class="col-sm-10">
                    <input type="number" name="annual_income" class="form-control @error('annual_income')is-invalid @enderror" id="inputName2" placeholder="100,000" />
                    @error('annual_income')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Nature of Occupation</label>
                <div class="col-sm-10">
                    <input type="text" name="nature_of_occupation" class="form-control @error('nature_of_occupation')is-invalid @enderror" id="inputName2" placeholder="School Teacher" />
                    @error('nature_of_occupation')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Employer Name</label>
                <div class="col-sm-10">
                    <input type="text" name="employer_name" class="form-control @error('employer_name')is-invalid @enderror" id="inputName2" placeholder="Mr Joshua caleb" />
                    @error('employer_name')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Employer Address</label>
                <div class="col-sm-10">
                    <input type="text" name="employer_address" class="form-control @error('employer_address')is-invalid @enderror" id="inputName2" placeholder="address" />
                    @error('employer_address')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Employer Phone</label>
                <div class="col-sm-10">
                    <input type="number" name="employer_phone" class="form-control @error('employer_phone')is-invalid @enderror" id="inputName2" placeholder="+234 5678901" />
    
                    @error('employer_phone')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
          
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Means of Identity</label>
                <div class="col-sm-10">
                    <select name="mean_of_identity" class="form-control @error('mean_of_identity')is-invalid @enderror" aria-label="Default select example">
                        <option selected>--------</option>
                        <option value="NATIONAL_ID">National Id</option>
                        <option value="VOTERS_CARD">Voters Card</option>
                        <option value="DRIVER_LICENCE">Driver Licence</option>
                        <option value="INTERNATIONAL_PASSWORD">International Passport</option>
                        @error('mean_of_identity')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Identity Number</label>
                <div class="col-sm-10">
                    <input type="number" name="identity_number" class="form-control @error('identity_number')is-invalid @enderror" id="inputName2" placeholder="1234567890" />
                    @error('identity_number')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">iD issue Date</label>
                <div class="col-sm-10">
                    <input type="date" name="id_issue_date" class="form-control @error('id_issue_date')is-invalid @enderror" id="inputName2" placeholder="" />
                    @error('id_issue_date')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Id Expiry Date</label>
                <div class="col-sm-10">
                    <input type="date" name="id_expiry_date" class="form-control @error('id_expiry_date')is-invalid @enderror" id="inputName2" placeholder="" />
                    @error('id_expiry_date')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Marrital Status</label>
                <div class="col-sm-10">
                    <select name="marital_status" class="form-control @error('marital_status')is-invalid @enderror" aria-label="Default select example">
                
                        <option selected>--------</option>
                        <option value="SINGLE">Single</option>
                        <option value="MARRIED">Married</option>
                        <option value="COMPLICATED">Complicated</option>
                    </select>
                    @error('marital_status')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">Affidavit</label>
                <div class="col-sm-10">
                    <input name="affidavit" style="height: 60px;" type="file" class="form-control @error('affidavit')is-invalid @enderror" id="customFile" />
                    @error('affidavit')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
    
            <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Other Information </label>
                <div class="col-sm-10">
                    <textarea name="other_information" class="form-control @error('other_information')is-invalid @enderror" id="inputExperience" placeholder="Others "></textarea>
                    @error('other_information')
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