<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guidian;
use App\Models\Ophans;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use  Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guidianlist()
    {
        $data1['getRecord'] = User::where('user_type','=',3)
            ->get();
        // $data['getRecords'] = Guidian::getGuidian();
      
        
        return view("admin.guidian.index",$data1);
    }
    public function sponsorlist()
    {
        $data['getRecord'] = User::getSponsor();
        return view("admin.sponsor.index", $data);
    }
    public function orphanlist()
    {
        $data['getRecord'] = User::getOphans();
        return view("admin.orphan.index", $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function guidiancreate()
    {
      
        return view("admin.guidian.create", );
    }
    public function guardianuser()
    {      
        return view("admin.guidian.create_guardian_user", );
    }
    public function  createOrphans()
    {
        return view("admin.guidian.createorphan");
    }
 
    public function sponsorcreate()
    {
        return view("admin.sponsor.create");
    }
    public function usersave(Request $request) 
    {
        Validator::make($request->all(), [
            "firstname"=> "required",
            "lastname"=> "required",
            "email"=> "required|email",
            "password"=> "required|confirmed",
            "user_type"=> "required"
            ])->validate();

            User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' =>  $request->user_type,
            ]);  return redirect()->route('admin/guidian/create')->with('success',''); 
          
    }
    public function registerSave(Request $request) 
    {
        Validator::make($request->all(), [
            'gender' => 'required',
            'phone_number' => 'required',
            'dob' => 'required',
            'alt_phn_number' => 'required',
            'profile_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'employment_status' => 'required',
            'annual_income' => 'required',
            'nature_of_occupation' => 'required',
            'employer_name' => 'required',
            'employer_address' => 'required',
            'employer_phone' => 'required',
            'mean_of_identity' => 'required',
            'identity_number'=> 'required',
            'id_issue_date'=> 'required',
            'id_expiry_date'=> 'required',
            'marital_status'=> 'required',
            'other_information'=> '',
            'affidavit'=> 'required|image|mimes:jpeg,png,jpg|max:2048',
            ])->validate();
            $user = auth()->user();
            Guidian::create([
            'user_id' => $user->id,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'dob' => $request->dob,
                'alt_phn_number' => $request->alt_phn_number,
                'profile_img' => $request->profile_img,
                'employment_status' =>  $request->employment_status,
                'annual_income' =>  $request->annual_income,
                'nature_of_occupation' =>  $request->nature_of_occupation,
                'employer_name' =>  $request->employer_name,
                'employer_address' =>  $request->employer_address,
                'employer_phone' =>  $request->employer_phone,
                'mean_of_identity' =>  $request->mean_of_identity,
                'identity_number' =>  $request->identity_number,
                'id_issue_date' =>  $request->id_issue_date,
                'id_expiry_date' =>  $request->id_expiry_date,
                'marital_status' =>  $request->marital_status,
                'other_information' =>  $request->other_information,
                'affidavit' =>  $request->affidavit,
                

            ]);
            return redirect()->route('admin/guidian/profile')->with('success','');
    }
    public function sponsorSave(Request $request) 
    {
        Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'othername' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            ])->validate();
                Sponsor::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'othername' => $request->othername,
                'email' => $request->email,
                'password' => $request->password,
                'phone_number' => $request->phone_number,
              

            ]);
            return redirect()->route('admin/sponsor')->with('success','');
    }
    public function orphansave(Request $request) 
    {
        Validator::make($request->all(), [
            'firstname' => 'required',
            'midname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'dob' =>'required',
            'alt_phn_number' =>'required',
            'profile_img' => 'required',
            'employment_status' =>  'required',
            'annual_income' =>'required',
            'nature_of_occupation' =>  'required',
            'employer_name' => 'required',
            'employer_address' => 'required',
            'employer_phone' => 'required',
            'mean_of_identity' =>  'required',
            'identity_number' =>  'required',
            'id_issue_date' => 'required',
            'id_expiry_date' =>  $request->id_expiry_date,
            'marital_status' =>  $request->marital_status,
            'other_information' =>  $request->other_information,
            'affidavit' =>  $request->affidavit,     
            ])->validate();
            
                Ophans::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'othername' => $request->othername,
                'email' => $request->email,
                'password' => $request->password,
                'phone_number' => $request->phone_number,
              

            ]);
            return redirect()->route('admin/Orphan')->with('success','');
    }
    public function profile()
    {
        $data['getRecords'] = Guidian::getGuidian();
        return view("admin.guidian.profile", $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
