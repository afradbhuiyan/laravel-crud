<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = DB::table('students')->orderBy('id','desc')->get();
            
        return view('pages.home' , [
            'students'=>$students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validate the form data
        $data = $request->validate([
            'name'=>'required|min:3|max:20',
            'age'=>'required|integer',
            'gender'=>'required',
            'city'=>'required'
        ]);

        //add timestamp in created_at column
        $data['created_at'] = new \DateTime();
    
        DB::table('students')->insert($data);

        return \redirect(route('home'));
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
        $student = DB::table('students')->find($id);
        
        return view('pages.edit',[
            'student'=>$student
        ]);
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

        //validate the form data
        $data = $request->validate([
            'name'=>'required|min:3|max:20',
            'age'=>'required|integer',
            'gender'=>'required',
            'city'=>'required'
        ]);

        //add timestamp in updated_at column
        $data['updated_at'] = new \DateTime();
    
        DB::table('students')->where('id',$id)->update($data);

        return \redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('students')->where('id',$id)->delete();

        return \redirect(route('home'));
    }
}
