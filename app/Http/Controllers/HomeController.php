<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title'=> 'Home Page',
            'data_barang' => Barang::count(),
            'data_transaksi' => Transaksi::count(),
            'seluruh_pendapatan' => Transaksi::all(),
            'data_user' => User::whereId(auth()->user()->id)->get(),
        );
        return view('home',$data);
    }
}
