<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    function blogslist(Request $request){
        
        $blogs=blog::all();
           return view('admin.Blogs.index',compact('blogs'));
        }
        function blogslist_post(Request $request){
            
            if ($request->hasFile('image')) {
                $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('gallary/'), $img_name);
                $imagePath = 'gallary/' . $img_name;
        
                blog::create([
                    'body'=>$request->body,
                    'image' => $imagePath,
                    'title' => $request->title
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
        function blogslist_form(Request $request){
         
            return view('admin.Blogs.create');
        }
        function blogs_edit(Request $request, $id){
            $blogs=blog::find($id);
            return view('admin.Blogs.edit',compact('blogs'));
        }
        function blogs_editsave(Request $request, $id){
            
            $subgallary= blog::find($id);
                    
            if ($request->hasFile('image')) {
                $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('gallary/'), $img_name);
                $imagePath = 'gallary/' . $img_name;
                $subgallary->image = $imagePath;
            }
            $subgallary->title = $request->title;
            $subgallary->body = $request->body;
            $subgallary->save();
                $data = [
                    'message' => 'Success',
                    'data' => [
                        'key' => 'value'
                    ]
                ];  
    
           
            return response()->json($data); 
    
        }
        function blogsdelete(Request $request, $id){
            
               $gallary=blog::find($id);
    
            $gallary->delete();   
    
                $data = [
                    'message' => 'success',
                    'data' => [
                        'key' => 'value'
                    ]
                ];  
                
            
            return redirect()->back()->with('success');
        }
}
