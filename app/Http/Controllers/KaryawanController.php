<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\CutiKaryawan;
use Illuminate\Support\Facades\Hash;
use Auth;
Use Alert,Session;


class KaryawanController extends Controller
{
    public function index(){
        return view('karyawan.index');
    }
    public function register(Request $req){
        if($req->isMethod('post')){
            $valid=Validator::make($req->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'tgl_lahir'=>'required',
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
                    'password' => Hash::make($data['password']),
                    'nomor_induk'=>$id,
                    'tgl_lahir' => $data['tgl_lahir'],
                    'alamat'=>$data['alamat'],
                    'role'=>'karyawan',
                    'tgl_bergabung'=>now()
                ]);
                Auth::login($user);
                return redirect('/home');
            }

        }else{
            $user=User::orderBy('id','DESC')->first();
            if($user){
               $raw=\explode("IP",$user->nomor_induk);
               $raw=substr($raw[1], 1, 4);
               
            }else{
                $id="IP06001";
                //echo $id;
            }
            return view('karyawan.register');
        }
    }
    public function pengajuan_cuti(Request $req){
        if($req->isMethod('post')){
            $valid=Validator::make($req->all(), [
                'tgl_cuti' => 'required',
                'lama_cuti' => 'required',
                'keterangan_cuti' => 'required'
            ]);
            if ($valid->fails()) {
                return back()->with('delete', 'Tolong lengkapi data');
            }else{
            $input=$req->all();
            $input['status']=0;
            $input['user_id']=Auth::user()->id;
            CutiKaryawan::create($input);
            Alert::info('Berhasil Melakukan Pengajuan Cuti', 'Info');
            return redirect()->route('karyawan.pengajuan_cuti');
            }
        }else{
            $data=CutiKaryawan::where('user_id',Auth::user()->id)->get();
            return view('karyawan.pengajuan_cuti',compact('data'));
        }
    }
    public function form_pengajuan_cuti(){
        return view('karyawan.form_pengajuan_cuti');
    }
    public function update_pengajuan_cuti(Request $req,$id){
        if($req->isMethod('post')){
            $data=$req->all();
            CutiKaryawan::where('id',$id)->update([
                'tgl_cuti'=>$data['tgl_cuti'],
                'lama_cuti'=>$data['lama_cuti'],
                'keterangan_cuti'=>$data['keterangan_cuti']
            ]);
            Alert::info('Berhasil Mengubah Data', 'Info');
            return redirect()->route('karyawan.pengajuan_cuti');
        }else{
            $data=CutiKaryawan::where('id',$id)->first();
            return view('karyawan.edit_pengajuan_cuti',\compact('data'));
        }
    }
}
