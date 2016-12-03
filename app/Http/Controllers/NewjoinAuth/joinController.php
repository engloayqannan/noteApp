<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studentacademic;
use App\Studentbridging;
use App\Studentpersonal;
use App\Healthstatus;
use App\Religion;
use App\Country;
use App\Socialstatus;
use App\City;
use App\Region;
use App\SpecialNeed;
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
        $SpecialNeed = SpecialNeed::pluck('name', 'id');
        $Highschoolbranch = Highschoolbranch::pluck('name', 'id');
        $Department = Department::pluck('department_name', 'id');
        $Knowabout = Knowabout::pluck('name', 'id');
        return view('student.join.join', compact('Healthstatus',
                                                 'Religion',
                                                 'Country',
                                                 'Socialstatus',
                                                 'City',
                                                 'Region',
                                                 'Region',
                                                 'SpecialNeed',
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
      $Studentacademic = new Studentacademic;
      $Studentbridging = new Studentbridging;
      $Studentpersonal = new Studentpersonal;
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
      $Studentpersonal->foruth_name_en =  $request->foruth_name_en;
      $Studentpersonal->image =  $request->image;
      $Studentpersonal->bob =  $request->bob;
      $Studentpersonal->dob =  $request->dob;
      $Studentpersonal->guardian =  $request->guardian;
      $Studentpersonal->guardian_type =  $request->guardian_type;
      $Studentpersonal->guardian_mobile =  $request->guardian_mobile;
      $Studentpersonal->home_phone =  $request->home_phone;
      $Studentpersonal->city =  $request->city;
      $Studentpersonal->region =  $request->region;
      $Studentpersonal->street =  $request->street;
      $Studentpersonal->stdid = 100;
      if($request->specialNeed == 0){
            $Studentpersonal->specialNeedDetails = $request->specialNeedDetails;
        }
      $Studentpersonal->knowaboutus =  $request->knowaboutus;
      if( $request->bridging == 0) {
        $Studentbridging->university_name_old =  $request->university_name;
        $Studentbridging->graduate_year_old =  $request->graduate_year;
        $Studentbridging->college_old =  $request->college;
        $Studentbridging->department_old =  $request->department;
        $Studentbridging->gpa_old =  $request->gpa_old;
        $Studentbridging->stdid = 100;
      }

      $Studentacademic->high_school_id =  $request->high_school_id;
      $Studentacademic->high_school_name =  $request->high_school_name;
      $Studentacademic->high_school_branch =  $request->high_school_branch;
      $Studentacademic->high_school_gpa =  $request->high_school_gpa;
      $Studentacademic->high_school_year =  $request->high_school_year;
      $Studentacademic->department =  $request->department;
      $Studentacademic->stdid = 100;

      $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['image']);

        $this->postImage->add($input);

        return back()->with('success','Image Upload successful');


      $Studentpersonal->save();
      $Studentbridging->save();
      $Studentacademic->save();

    return back();
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
