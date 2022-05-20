<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('students')->get();
        return view('home',['student'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'dept' => $request->dept,
            'city' => $request->city,
            
        ]);

        return redirect(route('index'))->with('status','Data Added Successfully!!');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('students')->find($id);
        return view('editform',['student'=>$data]);
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
        DB::table('students')
              ->where('id', $id)
              ->update([
                'name' => $request->name,
                'email' => $request->email,
                'dept' => $request->dept,
                'city' => $request->city,
                ]);
                return redirect(route('index'))->with('status','Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')
        ->where('id', $id)
        ->delete();
        return redirect(route('index'))->with('status','Data Deleted Successfully!!');
    }
    
}
