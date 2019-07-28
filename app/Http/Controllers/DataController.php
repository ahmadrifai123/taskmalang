<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Data;
use Image;

use Auth;
class DataController extends Controller
{
    public function __construct()
    {               
        $this->middleware('auth');
    }
    public function index()
    {

        $data=Data::orderBy('id','desc')->get();
        return view('data.list',compact('data')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         return view('data.add');
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
   $data = new Data();

   $data->nama = $request->nama; 
   $data->email = $request->email;
   $data->date = $request->date;
   $data->telepon = $request->tlp;
   $data->gender = $request->gender;
     $file   = $request->file('foto');
    $gambar = $file->getClientOriginalName();
    $request->file('foto')->move("image/", $gambar);
    $data->foto = $gambar;

     $data->save();
      return redirect()->route('data.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $data = Data::findOrFail($id);
        return view('data.edit', compact('data'));
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
        $data = Data::findOrFail($id);
        $data->nama = $request->nama; 
        $data->email = $request->email;
           $data->date = $request->date;
           $data->telepon = $request->tlp;
           $data->gender = $request->gender;
           $data->foto = $request->foto;
            $data->save();
            return redirect()->route('data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = Data::findOrFail($id);
        $pages->delete();
        return redirect()->route('data.index');
    }
}
