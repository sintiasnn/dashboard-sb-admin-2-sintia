<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

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
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        //SELECT COUNT(tabel_a.ikp_a1) as jumlah FROM tabel_a;
        $jumlah = DB::table('tabel_indeks')
            ->selectRaw('count(ikp_a1) as jumlah')
            ->value('jumlah');
        
        $jumlah2 = DB::table('instansi')
            ->selectRaw('count(nama_instansi) as jumlah')
            ->value('jumlah');

        
        return view('home', compact('widget','jumlah','jumlah2',));
    }
}
