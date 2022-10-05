<?php

namespace App\Http\Controllers;

use App\Model_Samsung;
use Illuminate\Http\Request;

class ControllerSamsung extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $samsung = Model_Samsung::paginate(3);
      return view('SAMSUNG.samsung',['samsung' => $samsung]);
    }

    public function fsamsung()
    {
        $fsamsung = Model_Samsung::paginate(3);
        return view('frontend.fsamsung',['fsamsung' => $fsamsung]);
    }

    public function carifsamsung(Request $request)
    {
        $keyword = $request->get('keyword');
        $fsamsung = Model_Samsung::paginate(10);

       if ($keyword) {
       $fsamsung = Model_Samsung::where("type","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifsamsung', compact('fsamsung'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SAMSUNG.tambah_samsung');
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
    
        Model_Samsung::create($input);
    
        return redirect('/samsung');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Samsung $samsung)
    {
        return view('SAMSUNG.lihat_samsung', compact('samsung'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Samsung $samsung)
    {
        return view('SAMSUNG.edit_samsung', compact('samsung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Samsung $samsung)
    {
        Model_Samsung::where('id', $samsung->id)
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

     $samsung->update($input);

  return redirect('/samsung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Samsung $samsung)
    {
        Model_Samsung::destroy($samsung->id);
        return redirect('/samsung');
    }
}
