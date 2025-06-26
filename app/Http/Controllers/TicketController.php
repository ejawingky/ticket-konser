<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller {
    public function create(){ return view('ticket.form'); }
    public function store(Request $r){
        $r->validate([
            'nama'=>'required','email'=>'required|email',
            'no_hp'=>'required','alamat'=>'required']);
        $kode=strtoupper(uniqid('TKT-'));
        DB::table('tickets')->insert([
            'kode'=>$kode,'nama'=>$r->nama,'email'=>$r->email,
            'no_hp'=>$r->no_hp,'alamat'=>$r->alamat,
            'status_checkin'=>'belum','created_at'=>now()
        ]);
        return redirect('/ticket/'.$kode);
    }
    public function show($kode){
        $t=DB::table('tickets')->where('kode',$kode)->first();
        return view('ticket.view', ['ticket'=>$t]);
    }
}
