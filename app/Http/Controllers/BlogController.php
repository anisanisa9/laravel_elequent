<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\blog;

class BlogController extends Controller
{
    public function index(){
    //mengambil data semua
        $blog = Blog::all();
        return view('crud',['blog'=> $blog]);


    // mengambil data pegawai yang id nya 1
        // $blog = Blog::find(1); 
        // return view('blog', ['blog' => $blog]); 

    //mengambil data pertama
        // $blog = Blog::first();
        // return view('blog',['blog'=> $blog]);

    //mengambil data menggunakan where
        // mengambil data pegawai yang bernama Jamal Uwais
        // $pegawai = Pegawai::where('nama', 'Jamal Uwais')->get(); 
        // return view('pegawai', ['pegawai' => $pegawai]); 

        // mengambil data pegawai yang id nya lebih besar dari 10
        // $pegawai = Pegawai::where('id', '>' , 10)->get();

        // mengambil data pegawai yang di namanya ada huruf a 
        // $pegawai = Pegawai::where('nama', 'like' , '%a%')->get();

        // menampilkan 10 data pegawai per halaman
        // $pegawai = Pegawai::paginate(10);
    }

    public function tambah(){
        return view('nambahdata');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required'
    	]);
 
        blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penulis' => $request->penulis
        ]);
        
        $request->session()->flash('pesen',"berhasil nambah Blog Baru ");
 
    	return redirect('/blog');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('edit', ['blog' => $blog]);

    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'judul' => 'required',
        'isi' => 'required',
        'penulis' => 'required'
        ]);
    
        $blog = Blog::find($id);
        $blog->judul = $request->judul;
        $blog->isi = $request->isi;
        $blog->penulis = $request->penulis;
        $blog->save();

        $request->session()->flash('update',"berhasil Mengedit Blog ");
 
    	return redirect('/blog');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
    	return redirect('/blog')->with('delete',"Blog sudah terhapus");
    }
}
