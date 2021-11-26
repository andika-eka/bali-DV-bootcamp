<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Wisata;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){        
            //check apakah user id di todo sama dengan user id yang login    
            $user = Auth::user();
            // $data = Wisata::where('User_id','=',Auth::id())->get();

            $data = $user->wisata;
            //   dd($data);
            return view('layout.dashboardPage', [
                'data'=>$data,
                'user'=>$user
            ]);
        }
        return redirect("/login")->withSuccess('Anda Belum Login Silahkan Login Terlebih dahulu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($file);
        $message = [
            'required' => 'kolom harus diisi',
            'numeric' => 'inputkan angka bos'
            
        ];
        $validasi = $request->validate([
            'Nama_Wisata' => 'required',
            'Kategori' => 'required',
            'Deskripsi' => 'required', 
            'Kontak'=>'required',
            'Lokasi'=>'required',
            'Foto' => '' 
        ], $message);
        

        $path = $request->file('Foto')->store('cover');
        $validasi['User_id'] = Auth::id();
        $validasi['Foto'] = $path;
        Wisata::create($validasi);
        return redirect('wisata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $message = [
            'required' => 'kolom harus diisi',
            'numeric' => 'inputkan angka bos'
            
        ];
        $validasi = $request->validate([
            'Nama_Wisata' => 'required',
            'Kategori' => 'required',
            'Deskripsi' => 'required', 
            'Kontak'=>'required',
            'Lokasi'=>'required',
            'Foto' => '' 
        ], $message);
        

        $path = $request->file('Foto')->store('cover');
        $validasi['User_id'] = Auth::id();
        $validasi['Foto'] = $path;
        Wisata::create($validasi);
        return redirect('wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
