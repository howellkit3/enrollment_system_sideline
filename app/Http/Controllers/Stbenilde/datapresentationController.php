<?php namespace stbenilde\Http\Controllers\stbenilde;

use Illuminate\Http\Request;
use stbenilde\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use stbenilde\Http\Controllers\Controller;
use Carbon\Carbon;http://dominicandal.esy.es/dashboard
use stbenilde\Http\Models\Stbenilde\Tblattendance as Tblattendance;
use Auth;
use DB;


class datapresentationController extends Controller
{

	public function index(){ 

		$presentctr = 0;
		$absentctr = 0;
		$excusectr = 0;

		$auth = Auth::user();

		$attendance_array = DB::table('tblattendance')
	 		->whereIn('studID', [$auth->active_stud_num])->get();

	 	$grade = DB::table('tblgrades')
	 		->whereIn('studID', [$auth->active_stud_num])->get();
	 		
	 	$subject_polish = array();
		$date_polish = array();

		$studname = DB::table('tblstudname')->whereIn('studID', [$auth->active_stud_num])->get();

	 	if(empty($studname)){

		 	$studfullname = 'Unknown Student';
		 	$studid = '00-0000-00';

		}else{

		 	$studfullname = ucfirst($studname[0]->FirstName) . " " . ucfirst($studname[0]->MiddleName) . " " . ucfirst($studname[0]->LastName);
		 	
		 	$studid = $studname[0]->studID;
		}


		foreach($attendance_array as $attendance_list){


	 		$subject_raw = array_push($subject_polish,ucfirst($attendance_list->Subject));

	 		if($attendance_list->Status == 'Present'){

	 			$presentctr ++;
	 		}

	 		if($attendance_list->Status == 'Excuse'){

	 			$excusectr ++; 
	 		}

	 		if($attendance_list->Status == 'Absent'){

	 			$absentctr ++;
	 		}

	 	}



	 	$subject = array_unique($subject_polish); 
		
	 	$arr = "['Day', 'Attendance'],";


	 //	print_r($arr); exit;

	 	// print_r($arr); exit;

	 	// $arr = json_encode($arr2);

	 //	 print_r($arr); exit;

		return view('stbenilde.data_presentation.index',compact('subject','auth','studid','studfullname','absentctr','presentctr','excusectr','grade'));
	 		
	}  

	public function show(){ 

		

	}
}
    