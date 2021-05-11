<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Facades\DB;
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user = Auth::user(); 
        return view('home',['user' => $user]);
    }
    public function update(Request $request, $username)
    {
        //TODO : Implementasikan Proses Update Data Mahasiswa By Id
        // return "Proses udpate data ke database";

        $request->validate([
            'username',
            'name',
            'email',
            'password',
        ]);

 //fungsi eloquent untuk mengupdate data inputan kita
        User::find($username)->update($request->all());

//jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('user.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');

    }
}
