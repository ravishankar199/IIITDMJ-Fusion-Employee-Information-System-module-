<?php

namespace App\Http\Controllers\fac;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use Request as Request1;
use DB;
use App\research_proj;

class reprojcontroller extends Controller
{
 
	public function rp_store(Request $request)
    {
    	$rp = new research_proj;
		$rp->faculty_id= Auth::user()->username;
        $rp->p_id= $request->p_id;
		$rp->p_title= $request->p_title;
		$rp->f_agency= $request->f_agency;
        $rp->p_details=$request->p_details;
        $rp->status= $request->status;
        $rp->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$p_id = $request::input('p_id');
		$p_title = $request::input('p_title');
		$p_details = $request::input('p_details');
		$f_agency = $request::input('f_agency');
		$status = $request::input('status');
		
		
		DB::table('research_proj')->where('id', $qid)->update(["p_details"=>$p_details, "p_id"=>$p_id, "p_title"=>$p_title, "f_agency"=>$f_agency, "status"=>$status]);
	
		return redirect('/fac');
	}
	
	
	public function destroy($id)
    {
    	$x = research_proj::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
