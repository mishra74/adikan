<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class courseController extends Controller
{
    function courselist(Request $request){
        $course=course::all();
           return view('admin.course.index',compact('course'));
        }
        function courselist_form(){
            return view('admin.course.create');
        }
        function course_post(Request $request){
            
            if ($request->hasFile('image')) {
                $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('gallary/'), $img_name);
                $imagePath = 'gallary/' . $img_name;
        
                course::create([
                    'image' => $imagePath,
                    'course_name'=>$request->course_name,
                    'startOn'=> $request->startOn,
                    'time'=>$request->time,
                    'totalDayInWeek'=>$request->totalDayInWeek,
                    'CourseDuration'=>$request->CourseDuration,
                     'mode'=>$request->mode,
                      'status'=>true,
                    
                ]);
        
                $data = [
                    'message' => 'Success',
                    'data' => [
                        'key' => 'value'
                    ]
                ];  
    
            } else {
                $data = [
                    'message' => 'error',
                    'data' => [
                        'key' => 'value'
                    ]
                ];  
                
            }
            return response()->json($data); 
    
        }

       
        function course_edit(Request $request, $id){
            $data=course::find($id);
return view('admin.course.edit',compact('data'));
        }
        function course_editsave(Request $request, $id){
           
              $course=course::find($id);
             
              if ($request->hasFile('image')) {
                $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('gallary/'), $img_name);
                $imagePath = 'gallary/' . $img_name;
                $course->image =$imagePath;
            }
              $course->course_name=$request->course_name;
              $course->startOn= $request->startOn;
              $course->time=$request->time;
              $course->totalDayInWeek=$request->totalDayInWeek;
              $course->CourseDuration=$request->CourseDuration;
              $course->mode=$request->mode;
              $course->status=true;
                    
              $course->save();
        
                $data = [
                    'message' => 'Success',
                    'data' => [
                        'key' => 'value'
                    ]
                ];  
    
            
            return response()->json($data); 
        }
        function coursedelete(Request $request, $id){
return rerect()->back();
        }
}
