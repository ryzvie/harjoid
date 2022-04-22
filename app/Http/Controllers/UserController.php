<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;

use Illuminate\Support\Facades\Crypt;

use DB;

class UserController extends Controller
{
    public function index(Request $request)
    {

        return view("home");
    }

    public function register(Request $request)
    {
        return view("register");
    }

    public function registeradd(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:pelanggan',
            'namalengkap' => 'required',
            'password' => 'required',
            'no_hp' => 'required|unique:pelanggan',
        ]);

        $pelanggan = new UserModel;

        $pelanggan->nama         = $request->input("namalengkap");
        $pelanggan->tgl_lahir    = date("Y-m-d", strtotime($request->input("tgl_lahir")));
        $pelanggan->alamat       = $request->input("alamatlengkap");
        $pelanggan->email        = $request->input("email");
        $pelanggan->no_hp        = $request->input("no_hp");
        $pelanggan->no_wa        = $request->input("no_wa");
        $pelanggan->tgl_register = date("Y-m-d");
        $pelanggan->password     = md5($request->input("password"));
        $pelanggan->activate     = 0;

        $pelanggan->save();

        $_ID = Crypt::encryptString($pelanggan->id);

        return redirect("/success?_id=".$_ID);
    }

    public function succeess(Request $request)
    {
        $_ID = Crypt::decryptString($request->get("_id"));
        $pelanggan = DB::table("pelanggan")
                    ->where("id", $_ID)
                    ->get();

        $data = array(
            "nama" => $pelanggan->first()->nama
        );

        return view("success")->with($data);
    }
}
