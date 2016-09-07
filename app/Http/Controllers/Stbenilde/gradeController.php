<?php namespace stbenilde\Http\Controllers\stbenilde;

use Illuminate\Http\Request;
use stbenilde\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use stbenilde\Http\Controllers\Controller;
use Carbon\Carbon;
use stbenilde\Http\Models\Stbenilde\Tblattendance as Tblattendance;
use Auth;
use DB;


class gradeController extends Controller
{

	public function index(){ 

	 	$auth = Auth::user();

	 	//print_r($auth); exit;

	 	$grades = DB::table('tblgrades')->whereIn('studID', [$auth->active_stud_num])->get(); 

	 	$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])->get();


	 	$subject_polish = array();

	 	foreach($attendance_array as $attendance_list){

	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));
	 		 
	 	}

	 	$studenrolled = DB::table('tblstudenrolled')->get();

	 	$studname = DB::table('tblstudname')->whereIn('studID', [$auth->active_stud_num])->get();

	 	if(empty($studname)){

		 	$msg = "Student Number you entered doesnt match our records.";
		 	flash()->error($msg);

		 	$studfullname = 'Unknown Student';
		 	$studid = '00-0000-00';

		}else{

			$msg = "Welcome!";
		 	flash()->success($msg);

		 	$studfullname = ucfirst($studname[0]->FirstName) . " " . ucfirst($studname[0]->MiddleName) . " " . ucfirst($studname[0]->LastName);
		 	
		 	$studid = $studname[0]->studID;

		}

	 	$subject_polish = array();

	 	$subject = array_unique($subject_polish); 

	 	return view('stbenilde.grade.index',compact('grades','auth','studfullname','studid','subject'));		

	}  
}
    