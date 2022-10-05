<?php

namespace App\Http\Controllers;

use App\Model_Cpugaming;
use Illuminate\Http\Request;

class ControllerCpugaming extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cpugaming = Model_Cpugaming::paginate(3);
      return view('CPU_GAMING.cpu_gaming',['cpugaming' => $cpugaming]);
    }

    public function fcpu_gaming()
    {
        $fcpu_gaming = Model_Cpugaming::paginate(3);
        return view('frontend.fcpu_gaming',['fcpu_gaming' => $fcpu_gaming]);
    }

    public function carifcpu_gaming(Request $request)
    {
        $keyword = $request->get('keyword');
        $fcpu_gaming = Model_Cpugaming::paginate(10);

       if ($keyword) {
       $fcpu_gaming = Model_Cpugaming::where("type","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifcpu_gaming', compact('fcpu_gaming'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CPU_GAMING.tambah_cpu_gaming');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'harga' => 'required',
            'spesifikasi' => 'required',
            'toko' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Model_Cpugaming::create($input);
    
        return redirect('/cpu_gaming');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Cpugaming $cpugaming)
    {
        return view('CPU_GAMING.lihat_cpugaming', compact('cpugaming'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Cpugaming $cpugaming)
    {
        return view('CPU_GAMING.edit_cpu_gaming', compact('cpugaming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Cpugaming $cpugaming)
    {
        Model_Cpugaming::where('id', $cpugaming->id)
      ->update([
          'type' => $request->type,
          'harga' => $request->harga,
          'spesifikasi' => $request->spesifikasi,
          'toko' => $request->toko,
          'image' => $request->image
      ]);

      $input = $request->all();

     if ($image = $request->file('image')) {
         $destinationPath = 'image/';
         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
         $image->move($destinationPath, $profileImage);
         $input['image'] = "$profileImage";
     }else{
         unset($input['image']);
     }

     $cpugaming->update($input);

  return redirect('/cpu_gaming');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Cpugaming $cpugaming)
    {
        Model_Cpugaming::destroy($cpugaming->id);
        return redirect('/cpu_gaming');
    }
}
