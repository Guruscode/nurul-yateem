<?php

namespace App\Http\Controllers;
use App\Models\Guidian;
use App\Models\Ophans;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GuidianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("guidian.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
            return view("guidian.create");
        
    }


    
    public function registerSave (Request $request) {
       
        Validator::make($request->all(), [
            'gender' => 'required',
            'phone_number' => 'required',
            'dob' => 'required',
            'alt_phn_number' => 'required',
            'profile_img' => 'required',
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
            'affidavit'=> 'required',
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
            // return redirect()->route('guidian/profile')->with('success','');
            return redirect()->route('guidian.success')->with('success','');
    }
    public function profile()
    {
        
        return view("guidian.profile");
    }

    public function success() {
        if (Guidian::count() > 0) {
            if ( !request()->is('/success') && url()->previous() !=  url('guidian/create') ) {
                return redirect()->to('guidian/dashboard'); //Send them somewhere else
            } else {
                return view("guidian.completeaccountsuccess");
            }
        } else {
            return view("guidian.create");
        }
    }

    public function thankyou() {
        if (Guidian::count() > 0) {
            if ( !request()->is('/success') && url()->previous() !=  url('guidian/create') ) {
                return redirect()->to('guidian/dashboard'); //Send them somewhere else
            } else {
                return view("guidian.thankyou");
            }
        } else {
            return view("guidian.create");
        }
    }
    
    public function createOrphans()
    {
        return view("guidian.addOrphan");
    }
    public function saveOrphanRegister (Request $request) {
        Validator::make($request->all(), [
            'firstname' => 'required',
            'midname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'profile_img' => 'required',
            'state_of_origin' => 'required',
            'local_government' => 'required',
            'school_status' => 'required',
            'school_name' =>    'required',
            'school_phone_number' => 'required',
            'school_email' => 'required',
            'class' => 'required',
            'guidian_affidavit' => 'required',
            'other_information' => '',
            ])->validate();
            // $user = auth()->user();
                Ophans::create([
                // 'user_id' => $user->id,
                'firstname' => $request->firstname,
                'midname' => $request->midname,
                'lastname' => $request->lastname,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'profile_img' => $request->profile_img,
                'state_of_origin' =>  $request->state_of_origin,
                'local_government' =>  $request->local_government,
                'school_status' =>  $request->school_status,
                'school_name' => $request->school_name,
                'school_phone_number' =>  $request->school_phone_number,
                'school_email' =>  $request->school_email,
                'class' =>  $request->class,
                'guidian_affidavit' =>  $request->guidian_affidavit,
                'other_information' =>  $request->other_information,
            ]);
            // return redirect()->route('guidian/profile')->with('success','');
            return redirect()->route('guidian.thankyou')->with('success','');
    }
   
}
