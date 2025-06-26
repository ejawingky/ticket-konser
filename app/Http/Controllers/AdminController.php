<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    public function index(){
        $tickets=DB::table('tickets')->orderBy('created_at','desc')->get();
        return view('admin.dashboard',compact('tickets'));
    }
    public function edit($id){
        $t=DB::table('tickets')->find($id);
        return view('admin.edit',compact('t'));
    }
    public function update(Request $r,$id){
        DB::table('tickets')->where('id',$id)->update($r->only(['nama','email','no_hp','alamat']));
        return redirect('/admin/dashboard')->with('success','Data diperbarui');
    }
    public function destroy($id){
        DB::table('tickets')->delete($id);
        return back()->with('success','Data dihapus');
    }
}
