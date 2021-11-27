<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Wisata;
use App\Models\Review;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $title = 'Tambah Wisata';
        return view('layout.inputform', compact('title'));
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
    public function show($Id_Wisata)
    {
        $komentar = Review::where('Wisata_id', $Id_Wisata)->get();
        $jumlahKomen= $komentar->count();
        
        $data = Wisata::find($Id_Wisata);
        return view('layout.konten', compact('data', 'komentar', 'jumlahKomen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Wisata)
    {
        // dd($Id_Wisata);
        $data = Wisata::find($Id_Wisata);
        $title = 'Edit Wisata';
        // dd($data);
        return view('layout.inputform', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Wisata)
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
        
        if($request->hasFile('Foto')){
            $fileName= time().$request->file('Foto')->getClientOriginalName();
            $path = $request->file('Foto')->storeAs('cover', $fileName);
            $validasi['Foto'] = $path;
            $Wisata = Wisata::find($Id_Wisata);
            // dd($Wisata);
            Storage::delete($Wisata);
        }

        $validasi['User_id'] = Auth::id();
        Wisata::where('Id_Wisata', $Id_Wisata)->update($validasi);;
        return redirect('wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Wisata)
    {
        $data = Wisata::find($Id_Wisata);
        if($data != null){
            Storage::delete($data->Foto);
            $data = Wisata::find($data->Id_Wisata);
            Wisata::where('Id_Wisata', $Id_Wisata)->delete();
        
        }
        return redirect('wisata');
    }
}
