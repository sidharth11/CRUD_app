<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
class FileUploadController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        // $validator = Validator::make($request->all(),[

        // ]);
        $request->validate([
            'file' => 'required|max:2048|mimes:pdf,xlx,xlxs,csv',
        ]);

        $xml = simplexml_load_file('contact.xml');

        // echo '<h2>Contact Listing</h2>';
        
        $list = $xml->record;
        
        for ($i = 0; $i < count($list); $i++) {
        
          $list[$i]->attributes()->name . '<br>';
        
            $list[$i]->lastName . '<br>';
        
            $list[$i]->contact . '<br><br>';
        
        }
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);

        // $xml = XmlParser::load('path/to/contact.xml');
        // $user = $xml->parse([
        //     'name' => ['uses' => 'user.name'],
        //     'lastName' => ['uses' => 'user.lastname'],
        //     'phone' => ['uses' => 'user::phone'],
        // ]);
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }
}
