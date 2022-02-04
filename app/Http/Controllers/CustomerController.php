<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customer = Customer::all();
        return view('customer',compact('customer'));
        // dd($customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'cvc'=>['required', 'string', 'max:255'],
        //     'firstname'=>['required', 'string', 'max:255'],
        //     'lastname'=>['required', 'string', 'max:255'],
        //     'sex'=>['required', 'string', 'max:50'],
        //     'date_naissance'=>['required', 'string', 'max:50'],
        //     'cartNumber'=>['required', 'string', 'max:20'],
        //     'month'=>['required', 'string', 'max:255'],
        //     'year'=>['required', 'string', 'max:10'],
        //     'default'=>['required', 'string', 'max:255'],
        // ]);   
        //      $essai =     Customer::create([
        //             'cvc' => $request->cvc,
        //            'firstname'=> $request->firstname,
        //             'lastname' => $request->lastname,
        //             'sex' => $request->sex,
        //             'date_naissance' => $request->date_naissance,
        //             'cartNumber' => $request->cartNumber,
        //             'month' => $request->month,
        //             'year' => $request->year,
        //             'default' => $request->default,                  
        //         ]);
        //         dd($essai);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $essai = $customer->delete();
        console.log($essai);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
