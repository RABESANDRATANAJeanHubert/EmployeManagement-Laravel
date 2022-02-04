<?php

namespace App\Http\Controllers\BACKEND;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use App\Models\States;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employee = Employee::all();

        if($request->has('search')){
            $employee = Employee::where('first_name','like',"%{$request->search}%")->orWhere('address','like',"%{$request->search}%")->orWhere('last_name','like',"%{$request->search}%")->orWhere('birthday','like',"%{$request->search}%")->get();
        }
        return view('employees.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectcountry = Country::all();
        $stateliest = States::all();
        $city = City::all();
        return view('employees.create',compact('selectcountry','stateliest','city'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state =  Employee::create([
            'last_name'=>$request->last_name,
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'address'=>$request->address,
            'country_id' => $request->country_id,
            // 'state_id' => $request->state_id,
            'city_id' => $request->country_id,
            'zip_code' => $request->zip_code,
            'birthday' => $request->birthday,
            'date_hired' => $request->date_hired
        ]);

        dd($state);

        // return redirect()->route('employees.index',  compact('state'));
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
    public function edit(Employee $employee)
    {
        $country = Country::all();
        $stateliest = States::all();
        $city = City::all();
        // dd($country,$stateliest,$city,$employee);
        return view('employees.edit',compact('employee','country','stateliest','city'));
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


        $searchId = Employee::find($id);

      $test =   $searchId->update([

            'last_name'=>$request->last_name,
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'address'=>$request->address,
            'zip_code' => $request->zip_code,
            'birthday' => $request->birthday,
           'date_hired' => $request->date_hired

        ]);

        // $test = $searchId->update([

        //     'last_name'=>$request->last_name,
        //     'first_name'=>$request->first_name,
        //     'middle_name'=>$request->middle_name,
        //     'address'=>$request->address,
        //     'country_id' => $request->country_id,
        //     'state_id' => $request->state_id,
        //     'city_id' => $request->country_id,
        //     'zip_code' => $request->zip_code,
        //     'birthday' => $request->birthday,
        //     'date_hire' => $request->date_hire
        // ]);
            // dd($test);
        return redirect()->route('employees.index',  compact('test'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $searchData = intval($id);
        $findVal = Employee::find($searchData);
        $findVal->delete();
        return redirect()->route('employees.index');
    }
}
