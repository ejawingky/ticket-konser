<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller {
    public function index(){
        $sudah=DB::table('tickets')->where('status_checkin','sudah')->get();
        $belum=DB::table('tickets')->where('status_checkin','belum')->get();
        return view('report.index',compact('sudah','belum'));
    }
}
