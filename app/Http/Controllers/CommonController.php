<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
use App\Models\Faculty;
use App\Models\SubjectMaster;


class CommonController extends Controller
{
    public function subjectList(Request $request)
    {
        $subjectList= SubjectMaster::with('terms')->get();
        $data['subjectLists'] = $subjectList;
        return view('subject_list',$data);
    }

    public function facultyList(Request $request)
    {
        $facultyList= Faculty::get();
        $data['facultyLists'] = $facultyList;
        return view('faculties_list',$data);
    }

    public function subjectAdd(Request $request)
    {
        $terms= Term::all();
        $data['terms'] = $terms;
        return view('add_subject',$data);
    }

    public function facultyAdd(Request $request)
    {
       
        return view('add_faculty');
    }

    public function subjectStore(Request $request)
    {
        $subjectAttr = new SubjectMaster();
        $subjectAttr->subject_name = $request->subject_name;
        $subjectAttr->term_id = $request->term_id;
        $subjectAttr->created_at = date("Y-m-d H:i:s", strtotime('now'));
        if($subjectAttr->save()) {
            return redirect()->route('subject.list')->with('success','Subject added successfully');
        }else{
            return redirect()->route('subject.list')->with('error', 'Somthing want wrong');
        }
       
    }

    public function facultyStore(Request $request)
    {
        $data = new Faculty();
        $data->faculty_name = $request->faculty_name;
        $data->email = $request->email;
        $data->created_at = date("Y-m-d H:i:s", strtotime('now'));
        if($data->save()) {
            return redirect()->route('faculty.list')->with('success','Faculty added successfully');;

        }else{
            return redirect()->route('faculty.list')->with('error', 'Somthing want wrong');;
        }
    }


    public function partOne(Request $request)
    {
        
        return view('index');
    }
}
