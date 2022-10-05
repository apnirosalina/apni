<?php

namespace App\Http\Controllers;

use App\Model_Macbook;
use Illuminate\Http\Request;

class ControllerMacbook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $macbook = Model_Macbook::paginate(3);
      return view('MACBOOK.macbook',['macbook' => $macbook]);
    }

    public function fmacbook()
    {
        $fmacbook = Model_Macbook::paginate(3);
        return view('frontend.fmacbook',['fmacbook' => $fmacbook]);
    }

    public function carifmacbook(Request $request)
    {
        $keyword = $request->get('keyword');
        $fmacbook = Model_Macbook::paginate(10);

       if ($keyword) {
       $fmacbook = Model_Macbook::where("type","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifmacbook', compact('fmacbook'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MACBOOK.tambah_macbook');
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
    
        Model_Macbook::create($input);
    
        return redirect('/macbook');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Macbook $macbook)
    {
        return view('MACBOOK.lihat_macbook', compact('macbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Macbook $macbook)
    {
        return view('macbook.edit_macbook', compact('macbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Macbook $macbook)
    {
        Model_Macbook::where('id', $macbook->id)
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

     $macbook->update($input);

  return redirect('/macbook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Macbook $macbook)
    {
        Model_Macbook::destroy($macbook->id);
        return redirect('/macbook');
    }
}
