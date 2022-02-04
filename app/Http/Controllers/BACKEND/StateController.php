<?php

namespace App\Http\Controllers\BACKEND;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\States;
use PHPUnit\Framework\Constraint\Count;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $state = States::all();
        if($request->has('search')){
            $state = States::where('country_id','like',"%{$request->search}%")->orWhere('name','like',"%{$request->search}%")->get();
        }
          return view('state.index',compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectcountry = Country::all();
        return view('State.create',compact('selectcountry'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $state =  States::create([
        'country_id' => $request->country_id,
        'name' => $request->name,
    ]);

    return redirect()->route('state.index',  compact('state'));

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
    public function edit(States  $state)
    {
        // $country = States::find($id);
        $country = Country::all();
        return view('state.edit',compact('state','country'));
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
        $searchId = States::find($id);

        $test = $searchId->update([
           'country_id' => $request->country_id,
            'name'=> $request->name,
        ]);

        return redirect()->route('state.index',  compact('test'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $searchbar = intval($id);

        $statedelete = States::find($searchbar);
        $back =  $statedelete->delete();

        return redirect()->route('state.index',  compact('back'));
    }
}
