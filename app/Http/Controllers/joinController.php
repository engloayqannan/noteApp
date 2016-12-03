<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studenthighschool;
use App\Studentbridging;
use App\Studentpersonal;
use App\Studentacademic;
use App\Healthstatus;
use App\Religion;
use App\Country;
use App\Socialstatus;
use App\City;
use App\Region;
use App\Specialneed;
use App\Highschoolbranch;
use App\Department;
use App\Knowabout;

class joinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Healthstatus = Healthstatus::pluck('name', 'id');
        $Religion = Religion::pluck('name', 'id');
        $Country = Country::pluck('name_ar', 'id');
        $Socialstatus = Socialstatus::pluck('name', 'id');
        $City = City::pluck('name_ar', 'id');
        $Region = Region::pluck('name_ar', 'id');
        $Specialneed = Specialneed::pluck('name', 'id');
        $Highschoolbranch = Highschoolbranch::pluck('name', 'id');
        $Department = Department::pluck('department_name', 'id');
        $Knowabout = Knowabout::pluck('name', 'id');
        return view('student.join.join', compact('Healthstatus',
                                                 'Religion',
                                                 'Country',
                                                 'Socialstatus',
                                                 'City',
                                                 'Region',
                                                 'Specialneed',
                                                 'Highschoolbranch',
                                                 'Department',
                                                 'Knowabout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation 

      $this->validate($request,[
        'ssn' => 'required',
        'mobile' => 'required',
        'email' => 'required',
        'religion' => 'required',
        'nationality' => 'required',
        'social_state' => 'required',
        'health_state' => 'required',
        'first_name_en' => 'required',
        'second_name_en' => 'required',
        'third_name_en' => 'required',
        'fourth_name_en' => 'required',
        'gender' => 'required',
        'guardian' => 'required',
        'guardian_type' => 'required',
        'guardian_mobile' => 'required',
        'home_phone' => 'required',
        'city' => 'required',
        'region' => 'required',
        'street' => 'required',
        'knowabout' => 'required',
        'bob' => 'required',
        'dob' => 'required',
        'image' => 'required',
        'high_school_id' => 'required',
        'high_school_name' => 'required',
        'high_school_branch' => 'required',
        'high_school_gpa' => 'required',
        'high_school_year' => 'required',
        'department' => 'required',
        ]);
      $Studenthighschool = new Studenthighschool;
      $Studentbridging = new Studentbridging;
      $Studentpersonal = new Studentpersonal;
      $Studentacademic = new Studentacademic;
      

      $Studentpersonal->ssn =  $request->ssn;
      $Studentpersonal->mobile =  $request->mobile;
      $Studentpersonal->email =  $request->email;
      $Studentpersonal->religion =  $request->religion;
      $Studentpersonal->nationality =  $request->nationality;
      $Studentpersonal->social_state =  $request->social_state;
      $Studentpersonal->health_state =  $request->health_state;
      $Studentpersonal->first_name_en =  $request->first_name_en;
      $Studentpersonal->second_name_en =  $request->second_name_en;
      $Studentpersonal->third_name_en =  $request->third_name_en;
      $Studentpersonal->fourth_name_en =  $request->fourth_name_en;
      $Studentpersonal->gender =  $request->gender;
      $Studentpersonal->guardian =  $request->guardian;
      $Studentpersonal->guardian_type =  $request->guardian_type;
      $Studentpersonal->guardian_mobile =  $request->guardian_mobile;
      $Studentpersonal->home_phone =  $request->home_phone;
      $Studentpersonal->city =  $request->city;
      $Studentpersonal->region =  $request->region;
      $Studentpersonal->street =  $request->street;
      $Studentpersonal->knowabout =  $request->knowabout;
      $Studentpersonal->bob =  $request->bob;
      $dob = $request->dob;
      $dob = date_create($dob);
      $dob = date_format($dob, "Y-m-d");
      $Studentpersonal->dob =  $dob;
      //upload image
      $file = $request->file('image');
      $path = 'images';
      $filename = $file->getClientOriginalName();
      $file->move($path,$filename);
      $Studentpersonal->image = $filename;
      if($request->specialneed == 0){
            $Studentpersonal->specialNeed = $Studentpersonal->specialNeed;
      }else {
            $Studentpersonal->specialNeed = $request->specialneeddetails;;
      }
      //for test
      $Studentpersonal->stdid = 100;
      $Studentpersonal->status = 'G';
      $Studentpersonal->password = '123';
      $Studentpersonal->first_name = 'محمد';
      $Studentpersonal->second_name = 'احمد';
      $Studentpersonal->third_name = 'محمود';
      $Studentpersonal->fourth_name = 'احمد';
      //--

      if( $request->bridging == 0) {
        $Studentbridging->university_name =  $request->university_name_old;
        $Studentbridging->graduate_year =  $request->graduate_year_old;
        $Studentbridging->college =  $request->college_old;
        $Studentbridging->department =  $request->department_old;
        $Studentbridging->gpa =  $request->gpa_old;
        $Studentbridging->stdid = 100; // for test
      }

      $Studenthighschool->high_school_id =  $request->high_school_id;
      $Studenthighschool->high_school_name =  $request->high_school_name;
      $Studenthighschool->high_school_branch =  $request->high_school_branch;
      $Studenthighschool->high_school_gpa =  $request->high_school_gpa;
      $Studenthighschool->high_school_year =  $request->high_school_year;
      $Studenthighschool->stdid = 100;// for test

      $Studentacademic->dept_id =  $request->department;
      $Studentacademic->stdid = 100;

      $Studentpersonal->save(); 
      $Studentbridging->save();
      $Studentacademic->save();

    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
