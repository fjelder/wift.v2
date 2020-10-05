<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
			$companies = Companies::all();
			return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('companies.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd($request);
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
        $company = Companies::where('id', $id)->first();
        $company->people;
        $parts = array(0 => 2, 2 => 3, 5 => 3, 8 => 3);
        $company->phone_number_1 = $this->formatPhoneNumber($company->phone_number_1, $parts, '+');
        $parts = array(0 => 2, 2 => 3, 5 => 2, 7 => 2);
        $company->phone_number_2 = $this->formatPhoneNumber($company->phone_number_2, $parts);
        return view('companies.show', ['company' => $company]);
    }
    public function formatPhoneNumber($phoneNumber, $parts, $prefix = '')
    {
      $newNumber = $prefix;
      foreach ($parts as $key => $val)
      {
        $newNumber = $newNumber.substr($phoneNumber, $key, $val).' ';
      }
      return trim($newNumber);
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
