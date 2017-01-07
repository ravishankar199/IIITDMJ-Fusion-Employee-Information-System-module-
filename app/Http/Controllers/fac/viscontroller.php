<?php

namespace App\Http\Controllers\fac;

use Illuminate\Http\Request;

use App\Http\Requests;
use Request as Request1;
use DB;
use App\visits;
use App\Http\Controllers\Controller;

use Auth;

class viscontroller extends Controller
{
 
	public function v_store(Request $request)
    {
    	$a = new visits;
		$a->faculty_id= Auth::user()->username;
        $a->fv_country= $request->fv_country;
        $a->fv_purpose=$request->fv_purpose;
        $a->fv_place= $request->fv_place;
		 $a->fv_date= $request->fv_date;
        $a->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$fv_country = $request::input('fv_country');
		$fv_purpose = $request::input('fv_purpose');
		$fv_place = $request::input('fv_place');
		$fv_date = $request::input('fv_date');
		
		
		DB::table('foreign_visits')->where('id', $qid)->update(["fv_country"=>$fv_country, "fv_purpose"=>$fv_purpose,"fv_place"=>$fv_place, "fv_date"=>$fv_date ]);
	
		return redirect('/fac');
	}
	
	
	public function destroy($id)
    {
    	$x = visits::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
