<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\CutiKaryawan;
use Auth;
Use Alert,Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function data_karyawan(){
        $data=User::where('role','karyawan')->get();
        return view('admin.data_karyawan',\compact('data'));
    }
    public function add_data_karyawan(Request $req){
        if($req->isMethod('post')){
            $valid=Validator::make($req->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'tgl_lahir'=>'required',
                'tgl_bergabung'=>'required',
                'alamat'=>['required', 'max:255']
            ]);
            if ($valid->fails()) {

                return back()->with('delete', 'Tolong lengkapi data');
            }else{
                $data=$req->all();
                $user=User::orderBy('id','DESC')->first();
                if($user){
                    $raw=\explode("IP",$user->nomor_induk);
                    $raw=substr($raw[1], 1, 4);
                    $id="IP0".((int)$raw+1);
                }else{
                    $id="IP06001";
                   
                }
               $user=User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['email']),
                    'nomor_induk'=>$id,
                    'tgl_lahir' => $data['tgl_lahir'],
                    'alamat'=>$data['alamat'],
                    'role'=>'karyawan',
                    'tgl_bergabung'=>$data['tgl_bergabung']
                ]);
                Alert::info('Berhasil Menambahkan Data', 'Info');
                return redirect()->route('admins.data_karyawan');
            }
        }else{
            return view('admin.add_data_karyawan');
        }
    }
    public function view_data_karyawan($id){
        $data=User::where('id',$id)->first();
        return view('admin.view_data_karyawan',\compact('data'));
    }
    public function update_data_karyawan(Request $req,$id){
        if($req->isMethod('post')){
            $data=$req->all();
            User::where('id',$id)->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'alamat'=>$data['alamat'],
                'tgl_lahir'=>$data['tgl_lahir'],
                'tgl_bergabung'=>$data['tgl_bergabung']
            ]);
            Alert::info('Berhasil Mengubah Data', 'Info');
            return redirect()->route('admins.data_karyawan');
        }else{
            $data=User::where('id',$id)->first();
            return view('admin.edit_data_karyawan',\compact('data'));
        }
    }
    public function delete_data_karyawan($id){
        try {
            $data = User::find($id);
            if (isset($data)) {
                $data->delete();
                Alert::info('Berhasil Menghapus Data', 'Info');
                return back();
            } else {
                Alert::info('Data Tidak ditemukan', 'Info');
                return back();
            }
        } catch (\Exception $e) {
            Alert::info('Gagal Menghapus Data', 'Info');
            return back();
        }
    }
    public function data_karyawan_cuti(){
        $data=CutiKaryawan::all();
        return view('admin.data_karyawan_cuti',\compact('data'));
    }


    public function data_tiga_karyawan_pertama(){
        $data=User::where('role','karyawan')->orderBy('tgl_bergabung','ASC')->take(3)->get();
        $soal="Menampilkan 3 karyawan yang pertama kali bergabung";
       return view('admin.soal.data_karyawan',\compact('data','soal'));
    }
    public function data_karyawan_pernah_cuti(){
        $soal="Menampilkan daftar karyawan yang saat ini pernah mengambil cuti. Daftar berisikan (nomor_induk, nama, tanggal_cuti dan keterangan)";
        $data=CutiKaryawan::groupBy('user_id')->get();
        return view('admin.soal.data_karyawan_cuti',\compact('data','soal'));
    }
    public function data_karyawan_pernah_cuti_lebih(){
        $soal="Menampilkan daftar karyawan yang saat ini pernah mengambil cuti lebih dari satu kali. Daftar berisikan (nomor_induk, nama, tanggal_cuti dan keterangan)";
        $data=CutiKaryawan::selectRaw("cuti_karyawan.*, count('id') as jumlah,GROUP_CONCAT(keterangan_cuti SEPARATOR ',') as keterangan,GROUP_CONCAT(tgl_cuti SEPARATOR ',') as tgl")->groupBy('user_id')->get();
        return view('admin.soal.data_karyawan_cuti_lebih',\compact('data','soal'));
    }
    public function sisa_cuti(){
        $soal="Menampilkan sisa cuti tiap karyawan adalah 12 hari. Daftar berisikan (nomor_induk, nama, sisa_cuti)";
        $data=User::where('role','karyawan')->get();
        return view('admin.soal.sisa_cuti',\compact('data','soal'));
    }
}