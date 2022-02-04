<?php

namespace App\Http\Controllers\BACKEND;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\States;
use Illuminate\Http\Request;


class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $city = City::all();
        if($request->has('search')){
            $city = City::where('state_id','like',"%{$request->search}%")->orWhere('name','like',"%{$request->search}%")->get();
        }
        return view('City.index',compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stateliest = States::all();
        return view('city.create',compact('stateliest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $city = City::create([
        'state_id' => $request->state_id,
        'name' => $request->name,
            ]);

    return redirect()->route('city.index',  compact('city'));

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
    public function edit(City $city)
    {
        $state = States::all();
        // dd($state);
        return view('city.edit',compact('city','state'));
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
        $searchId = City::find($id);

        $searchId->update([
           'state_id' => $request->state_id,
            'name'=> $request->name,
        ]);

        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $val = intval($id);
        $searchVal = City::find($val);
        $return = $searchVal->delete();
        return redirect()->route('city.index',  compact('return'));
    }
}
