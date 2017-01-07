<?php

namespace App\Http\Controllers\fac;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Request as Request1;

use App\Http\Requests;
use DB;
use App\patents;
use Auth;
class patcontroller extends Controller
{
 
	public function p_store(Request $request)
    {
    	$p = new patents;
		$p->faculty_id= Auth::user()->username;
        $p->p_no= $request->p_no;
        $p->pt_title=$request->pt_title;
        $p->earnings= $request->earnings;
		$p->pt_status=$request->pt_status;
		$p->pt_year=$request->pt_year;
        $p->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$p_no = $request::input('p_no');
		$pt_title = $request::input('pt_title');
		$earnings = $request::input('earnings');
		$pt_status = $request::input('pt_status');
		$pt_year = $request::input('pt_year');
		
		
		DB::table('patents')->where('id', $qid)->update(["p_no"=>$p_no, "earnings"=>$earnings, "pt_title"=>$pt_title, "pt_status"=>$pt_status, "pt_year"=>$pt_year]);
	
		return redirect('/fac');
	}
	
	public function destroy($id)
    {
    	$x = patents::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
