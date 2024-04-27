<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class courseController extends Controller
{
    function courselist(Request $request){
        $course=product::all();
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
        
                product::create([
                    'product_image' => $imagePath,
                    'product_name'=>$request->product_name,
                    'product_disc'=> $request->product_disc,
                    'quantity'=>$request->quantity,
                    'dateofexpire'=>$request->dateofexpire,
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
            $data=product::find($id);
return view('admin.course.edit',compact('data'));
        }
        function course_editsave(Request $request, $id){
           
              $product=product::find($id);
             
              if ($request->hasFile('image')) {
                $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('gallary/'), $img_name);
                $imagePath = 'gallary/' . $img_name;
                $product->image =$imagePath;
            }
            $product->product_image =$imagePath;
            $product->product_name=$request->product_name;
            $product->product_disc=$request->product_disc;
            $product->quantity=$request->quantity;
            $product->dateofexpire=$request->dateofexpire;
            $product->status=true;
                    
              $product->save();
        
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
