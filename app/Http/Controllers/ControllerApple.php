<?php

namespace App\Http\Controllers;

use App\Model_Apple;
use Illuminate\Http\Request;

class ControllerApple extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apple = Model_Apple::paginate(3);
        return view('APPLE.apple',['apple' => $apple]);
    }

    public function fapple()
    {
        $fapple = Model_Apple::paginate(3);
        return view('frontend.fapple',['fapple' => $fapple]);
    }

    public function carifapple(Request $request)
    {
        $keyword = $request->get('keyword');
        $fapple = Model_Apple::paginate(10);

       if ($keyword) {
       $fapple = Model_Apple::where("type","LIKE","%$keyword%")->get();
    }

        return view ('frontend.carifapple', compact('fapple'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('APPLE.tambah_apple');
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
    
        Model_Apple::create($input);
    
        return redirect('/Apple');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Apple $apple)
    {
        return view('APPLE.lihat_apple', compact('apple'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Apple $apple)
    {
        return view('apple.edit_apple', compact('apple'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Apple $apple)
    {
        Model_Apple::where('id', $apple->id)
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

     $apple->update($input);

  return redirect('/apple');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Apple $apple)
    {
        Model_Apple::destroy($apple->id);
        return redirect('/Apple');
    }
}
