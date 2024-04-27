<?php

namespace App\Http\Controllers;
use App\Models\gallary;
use App\Models\subgallary;
use Illuminate\Http\Request;

class gallarycontroller extends Controller
{
    //

    function gallarylist(Request $request){
    $gallary=gallary::all();
       return view('admin.gallary.index',compact('gallary'));
    }
    function gallarylist_post(Request $request){
        
        if ($request->hasFile('image')) {
            $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('gallary/'), $img_name);
            $imagePath = 'gallary/' . $img_name;
    
            gallary::create([
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
    function gallarylist_form(Request $request){
        return view('admin.gallary.creategallary');
    }
    function gallary_edit(Request $request){
        return view('admin.gallary.gallaryEdit');
    }
    function gallary_editsave(Request $request){
        return $request;
    }
    function gallarydelete(Request $request, $id){
        
           $gallary=gallary::find($id);

        $gallary->delete();   

            $data = [
                'message' => 'success',
                'data' => [
                    'key' => 'value'
                ]
            ];  
            
        
        return redirect()->back()->with('success');
    }
//sub gallary
function subgallarylist(Request $request, $id){
    $title=gallary::find($id);
    $gallary=subgallary::all();
       return view('admin.gallary.image.index',compact('gallary','title'));
    }
    function subgallarylist_post(Request $request){
        
        if ($request->hasFile('image')) {
            $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('gallary/'), $img_name);
            $imagePath = 'gallary/' . $img_name;
    
            subgallary::create([
                'gallary_id'=>$request->gallary_id,
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
    function subgallarylist_form(Request $request, $id){
        $gallary=gallary::find($id);
        return view('admin.gallary.image.creategallary',compact('gallary'));
    }
    function subgallary_edit(Request $request, $id){
        $gallary=subgallary::find($id);
        return view('admin.gallary.image.gallaryEdit',compact('gallary'));
    }
    function subgallary_editsave(Request $request, $id){
        
        $subgallary= subgallary::find($id);
                
        if ($request->hasFile('image')) {
            $img_name = 'gallayImage_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('gallary/'), $img_name);
            $imagePath = 'gallary/' . $img_name;
            $subgallary->image = $imagePath;
        }
        $subgallary->title = $request->title;
          
        $subgallary->save();
            $data = [
                'message' => 'Success',
                'data' => [
                    'key' => 'value'
                ]
            ];  

       
        return response()->json($data); 

    }
    function subgallarydelete(Request $request, $id){
        
           $gallary=subgallary::find($id);

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
