<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaptopController extends Controller
{
    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|exist:users,username',
            'password' => 'required',
        ],[
            'username.exists' => "This username doesn't exists"
        ]);

        $user = $request->only('username', 'password');
        if (Auth::attempt($user)){
            return redirect()->route('/');
        } else {
            return redirect('/')->with('fail', "Gagal login");
        }

    }





    public function login(){

        return view('login');
    }

    public function index()
    {
        // menampilkan index
        return view('index');
    }


    public function data()
    {
        // variabel laptops untuk menampilkan data laptop (model) semuanya (all)
        $laptops = Laptop::all();
        // menampilkan tampilan data dan menyambungkan variabel laptops (compact('laptops'))
        return view('data', compact('laptops'));
    }


    public function create()
    {
        // variabel laptops untuk menampilkan data laptop (model) semuanya (all)
        $laptops = Laptop::all();
        // menampilkan tampilan form dan menyambungkan variabel laptops (compact('laptops'))
        return view('form', compact('laptops'));
    }

    public function done(Request $request, $id)
    {
        /*
        mengambil objek Laptop dengan ID yang sesuai dan 
        mengupdate tanggal pengembalian (return_date) menjadi sekarang(\Carbon\Carbon::now()). 
        dan mengalihkan kembali ke halaman sebelumnya dan menampilkan 
        pesan bernama "done" dengan nilai "a".
        */
        $laptop = Laptop::where('id', $id)->update([
            'return_date' => \Carbon\Carbon::now()
        ]);

        return redirect()->back()->with('done', 'a');
    }


    public function store(Request $request)
    {
        // Memvvalidasi form yang ada di blade.php, semuanya required (harus diisi)
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'purposes' => 'required',
            'date' => 'required',
            'teacher' => 'required'
        ]);

        /*
        Model akan membuat data baru dari request yang di input pada saat form di submit
        */
        Laptop::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'purposes' => $request->purposes,
            'date' => $request->date,
            'teacher' => $request->teacher
        ]);

        // mengembalikan ke halaman /data
        return redirect('/data');
    }


    public function show(Laptop $laptop)
    {
        
    }


    public function edit(Laptop $laptop)
    {
       
    }


    public function update(Request $request, Laptop $laptop)
    {
        
    }


    public function destroy($id)
    {
        // mengambil objek Laptop dengan ID yang sesuai kemudia di hapus (delete()) dan di kembalikan ke halaman sebelumnya
        Laptop::where('id', $id)->delete();
        return redirect()->back();
    }
}
