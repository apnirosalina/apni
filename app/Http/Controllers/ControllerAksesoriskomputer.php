<?php

namespace App\Http\Controllers;

use App\Model_Aksesoriskomputer;
use Illuminate\Http\Request;

class ControllerAksesoriskomputer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $aksesoriskomputer = Model_Aksesoriskomputer::paginate(3);
      return view('AKSESORIS_KOMPUTER.aksesoris_komputer',['aksesoriskomputer' => $aksesoriskomputer]);
    }

    public function faksesoris_komputer()
    {
        $faksesoris_komputer = Model_Aksesoriskomputer::paginate(3);
        return view('frontend.faksesoris_komputer',['faksesoris_komputer' => $faksesoris_komputer]);
    }

    public function carifaksesoris_komputer(Request $request)
    {
        $keyword = $request->get('keyword');
        $faksesoris_komputer = Model_Aksesoriskomputer::paginate(10);

       if ($keyword) {
       $faksesoris_komputer = Model_Aksesoriskomputer::where("type","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifaksesoris_komputer', compact('faksesoris_komputer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AKSESORIS_KOMPUTER.tambah_aksesoris_komputer');
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
    
        Model_Aksesoriskomputer::create($input);
    
        return redirect('/aksesoris_komputer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Aksesoriskomputer $aksesoriskomputer)
    {
        return view('AKSESORIS_KOMPUTER.lihat_aksesoriskomputer', compact('aksesoriskomputer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Aksesoriskomputer $aksesoriskomputer)
    {
        return view('AKSESORIS_KOMPUTER.edit_aksesoris_komputer', compact('aksesoriskomputer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Aksesoriskomputer $aksesoriskomputer)
    {
        Model_Aksesoriskomputer::where('id', $aksesoriskomputer->id)
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

     $aksesoriskomputer->update($input);

  return redirect('/aksesoris_komputer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Aksesoriskomputer $aksesoriskomputer)
    {
        Model_Aksesoriskomputer::destroy($aksesoriskomputer->id);
        return redirect('/aksesoris_komputer');
    }
}
