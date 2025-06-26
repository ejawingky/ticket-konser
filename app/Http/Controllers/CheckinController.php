<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckinController extends Controller {
    public function index(){return view('checkin.form');}
    public function check(Request $r){
        $r->validate(['kode'=>'required']);
        $t=DB::table('tickets')->where('kode',$r->kode)->first();
        if(!$t) return back()->with('error','Tiket tidak ditemukan');
        if($t->status_checkin==='sudah') return back()->with('error','Sudah check-in');
        DB::table('tickets')->where('kode',$r->kode)->update(['status_checkin'=>'sudah']);
        return view('checkin.success',compact('t'));
    }
}
