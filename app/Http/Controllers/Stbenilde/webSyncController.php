<?php namespace App\Http\Controllers\stbenilde;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Models\Stbenilde\Tblattendance as Tblattendance;
use Auth;
use DB;


class webSyncController extends Controller
{
	public function index(){ 
		include "_con_.php";
	
		$code_i_go = filter_input(INPUT_GET, "method");
		
		$code_i_go = urldecode($code_i_go);
		if ($code_i_go === "executeQuery") {
			$code_i_run = filter_input(INPUT_GET, "query");
			$code_i_run = urldecode($code_i_run);
			$qry = $con->prepare($code_i_run);
			
			$params = filter_input(INPUT_GET, "params");
			$params = urldecode($params);
			$params = explode("&____sep____;", $params);
			array_pop($params);

			$values = filter_input(INPUT_GET, "values");
			
			//print $values;	
			$values = urldecode($values);
			$values = str_replace("Ñ", "R", $values);
			$values = explode("&____sep____;", $values);
			array_pop($values);

			$arr_vals = array("");
			array_pop($arr_vals);
			for ($ctr = 0; $ctr < count($values); $ctr++) {
				array_push($arr_vals, [$params[$ctr] => $values[$ctr]]);
			}
			
			foreach ($arr_vals as $arr => $vals) {
				foreach ($vals as $key => &$val) {
					$qry->bindParam($key, $val);
					//print "> $key --> $val <br/>";
				}
			}

			$qry->execute();
			$rows = $qry->fetchAll(PDO::FETCH_ASSOC);
			if (count($rows)) {
				foreach ($rows as $row) {
					foreach ($row as $field_key => $row) {
						print "$field_key%sep_head_item;";
					}
					break;
				}
				print "%sep_header;";
				foreach ($rows as $row) {
					foreach ($row as $value) {
						print "$value%sep_item;";
					}
					print "%sep_row_item;";
				}
			} else {
				//print "False";
			}
		} else if ($code_i_go === "execute") {
			$code_i_run = filter_input(INPUT_GET, "query");
			$code_i_run = urldecode($code_i_run);
			$qry = $con->prepare($code_i_run);

			$params = filter_input(INPUT_GET, "params");
			$params = urldecode($params);
			$params = explode("&____sep____;", $params);
			array_pop($params);

			$values = filter_input(INPUT_GET, "values");
			$values = urldecode($values);
			$values = str_replace("Ñ", "R", $values);
			$values = explode("&____sep____;", $values);
			array_pop($values);

			$arr_vals = array("");
			array_pop($arr_vals);
			for ($ctr = 0; $ctr < count($values); $ctr++) {
				array_push($arr_vals, [$params[$ctr] => $values[$ctr]]);
			}
			foreach ($arr_vals as $arr => $vals) {
				foreach ($vals as $key => &$val) {
					$qry->bindParam($key, $val, PDO::PARAM_STR);
					//print "> $key --> $val <br/>";
				}
			}
			
			//print $code_i_run;
			
			if ($qry->execute()) {
				print "True";
			} else {
				print "False";
			}
		} else {
			print "ERROR : cannot execute request.";
		}
	}
}
    