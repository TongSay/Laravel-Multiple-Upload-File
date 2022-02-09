<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\ItemDetails;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }



    public function uploadSubmit(Request $request)
    {
         
    $this->validate($request, [
    'name' => 'required',
    'photos'=>'required',
    ]);
$items= Item::create($request->all());

    if($request->hasFile('photos'))
    {
        

        $allowedfileExtension=['pdf','jpg','png','docx'];
        $files = $request->file('photos');
        foreach($files as $file){

            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('FileCompliant'), $name);  
            $files[] = $name;
            
                ItemDetails::create([
                    'item_id' => $items->id,
                    'filename' => $name
                ]);
            }
        }
    }

}