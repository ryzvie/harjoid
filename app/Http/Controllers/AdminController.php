<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\UserModel;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view("admin.login");
    }

    public function authlogin(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $checkUser = AdminModel::where("email", $request->input("email"))
                    ->where("password", md5($request->input("password")))
                    ->get();

        if($checkUser->count() > 0)
        {
            return redirect("admin/dashboard");
        }
        else
        {
            return back()->withInput()->with("error", "Silahkan cek kembali password anda.");
        }
    }

    public function dashboard(Request $request)
    {
        return view("admin.dashboard");
    }

    public function pelanggan(Request $request)
    {

        $pelanggan = UserModel::all();

        $data = array(
            "pelanggan" => $pelanggan
        );

        return view("admin.pelanggan")->with($data);
    }

    public function pelangganadd(Request $request)
    {

        return view("admin.pelanggan-add");
    }

    public function pelangganpost(Request $request)
    {
        $id = $request->input("id");

        if($request->ajax())
        {
            $idpost = $request->input("idpost");

            foreach($idpost as $id)
            {
                $pelanggan = UserModel::find($id['id']);

                $pelanggan->delete();
            }

            $response = array(
                "status" => 200,
                "message" => "data has been deleted. Please wait to return page."
            );

            return response()->json($response);
        }

        if(!empty($id))
        {
            $pelanggan = UserModel::find($id);
            $request->validate([
                "namalengkap" => "required",
                "tgl_lahir" => "required",
                "email" => "required",
                "no_hp" => "required",
                "no_wa" => "required"
            ]);

            $pelanggan->nama      = $request->input("namalengkap");
            $pelanggan->tgl_lahir = date("Y-m-d", strtotime($request->input("tgl_lahir")));
            $pelanggan->alamat    = $request->input("alamatlengkap");
            $pelanggan->email     = $request->input("email");
            $pelanggan->no_hp     = $request->input("no_hp");
            $pelanggan->no_wa     = $request->input("no_wa");
            $pelanggan->activate = 0;
            
            if(strlen($request->password) > 0)
            {
                $pelanggan->password  = md5($request->input("password"));
            }

            $pelanggan->save();

            return redirect("admin/pelanggan")->with("success", "Data has been updated");
        }
        
        $pelanggan = new UserModel;

        $request->validate([
            "namalengkap" => "required",
            "tgl_lahir" => "required",
            "email" => "required|unique:pelanggan",
            "no_hp" => "required|unique:pelanggan",
            "no_wa" => "required|unique:pelanggan",
            "password" => "required",
            "konf_password" => "required",
        ]);

        $pelanggan->nama      = $request->input("namalengkap");
        $pelanggan->tgl_lahir = date("Y-m-d", strtotime($request->input("tgl_lahir")));
        $pelanggan->alamat    = $request->input("alamatlengkap");
        $pelanggan->email     = $request->input("email");
        $pelanggan->no_hp     = $request->input("no_hp");
        $pelanggan->no_wa     = $request->input("no_wa");
        $pelanggan->tgl_register = date("Y-m-d");
        $pelanggan->activate = 0;
        $pelanggan->password  = md5($request->input("password"));

        $pelanggan->save();

        return redirect("admin/pelanggan");
    }

    public function pelangganedit(Request $request, $id)
    {
        $pelanggan = UserModel::find($id);

        $data = array(
            "pelanggan" => $pelanggan
        );

        return view("admin.pelanggan-edit")->with($data);
    }

    public function pelanggandelete(Request $request, $id)
    {

        $pelanggan = UserModel::find($id);

        $pelanggan->delete();

        return redirect("admin/pelanggan")->with("success", "Data has been delete");
    }
}
