<?php

namespace App\Http\Controllers;

use App\Model_Vivo;
use Illuminate\Http\Request;

class ControllerVivo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vivo = Model_Vivo::paginate(3);
        return view('VIVO.vivo',['vivo' => $vivo]);
    }

    public function fvivo()
    {
        $fvivo = Model_Vivo::paginate(3);
        return view('frontend.fvivo',['fvivo' => $fvivo]);
    }

    public function carifvivo(Request $request)
    {
        $keyword = $request->get('keyword');
        $fvivo = Model_Vivo::paginate(10);

       if ($keyword) {
       $fvivo = Model_Vivo::where("type","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifvivo', compact('fvivo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VIVO.tambah_vivo');
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
    
        Model_Vivo::create($input);
    
        return redirect('/vivo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Vivo $vivo)
    {
        return view('VIVO.lihat_vivo', compact('vivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Vivo $vivo)
    {
        return view('vivo.edit_vivo', compact('vivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Vivo $vivo)
    {
        Model_Vivo::where('id', $vivo->id)
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

     $vivo->update($input);

  return redirect('/vivo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Vivo $vivo)
    {
        Model_Vivo::destroy($vivo->id);
        return redirect('/vivo');
    }
}
