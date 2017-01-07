<?php

namespace App\Http\Controllers\fac;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Request as Request1;
use App\thesis;
use Auth;

class thecontroller extends Controller
{
    //
    public function t_store(Request $request)
    {
    	$a = new thesis ;
		$a->faculty_id= Auth::user()->username;
        $a->t_title= $request->t_title;
        $a->stu1_name=$request->stu1_name;
        $a->t_supervisors=$request->t_supervisors;
        $a->t_year= $request->t_year;
        $a->save();
        return redirect('/fac');
    }
	
	public function update(Request1 $request){
		$qid = $request::input('qid');
		$t_title = $request::input('t_title');
		$stu1_name = $request::input('stu1_name');
		$t_supervisors = $request::input('t_supervisors');
		$t_year = $request::input('t_year');
		
		
		DB::table('thesis')->where('id', $qid)->update(["t_title"=>$t_title, "t_supervisors"=>$t_supervisors, "stu1_name"=>$stu1_name, "t_year"=>$t_year]);
	
		return redirect('/fac');
	}
	
	public function destroy($id)
    {
    	$x = thesis::find($id);    
		$x->delete();
        return redirect('/fac');
    }
}
