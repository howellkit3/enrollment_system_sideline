<?php 

$this->group(['middleware' => ['web','auth','validateBackHistory'],'namespace' => 'stbenilde','middleware' => ['web','validateBackHistory']],function(){
	
	$this->group(['prefix' => 'dashboard'],function(){
		$this->get('/',['as' => 'stbenilde.dashboard.index','uses' => 'attendanceController@index']);
		$this->get('/changestudnum',['as' => 'stbenilde.dashboard.changestudnum','uses' => 'dashboardController@changestudnum']);
		$this->post('/changestudnum',['as' => 'stbenilde.dashboard.updatestudnum','uses' => 'dashboardController@updatestudnum']);
		$this->get('/attn_subj/{id}',['as' => 'stbenilde.dashboard.attn_subj','uses' => 'dashboardController@attn_subj']);
		$this->get('/attn_date/{id}',['as' => 'stbenilde.dashboard.attn_date','uses' => 'dashboardController@attn_date']);
		$this->get('/test',['as' => 'stbenilde.dashboard.test','uses' => 'dashboardController@test']);
		$this->get('/admin',['as' => 'stbenilde.dashboard.admin','uses' => 'dashboardController@admin']);
		$this->get('/status/{id}',['as' => 'stbenilde.dashboard.status','uses' => 'dashboardController@status']);
	});

	$this->group(['prefix' => 'attendance'],function(){
		$this->get('/',['as' => 'stbenilde.attendance.index','uses' => 'attendanceController@index']);
		$this->get('/show/{id}',['as' => 'stbenilde.attendance.show','uses' => 'attendanceController@show']);
	});

	$this->group(['prefix' => 'grade'],function(){
		$this->get('/',['as' => 'stbenilde.grade.index','uses' => 'gradeController@index']);
	});

	$this->group(['prefix' => 'quiz'],function(){
		$this->get('/',['as' => 'stbenilde.quiz.index','uses' => 'quizController@index']);
		$this->get('/test',['as' => 'stbenilde.quiz.test','uses' => 'quizController@test']);
	});

	$this->group(['prefix' => 'exam'],function(){
		$this->get('/',['as' => 'stbenilde.exam.index','uses' => 'examController@index']);
	});

	$this->group(['prefix' => 'datapresentation'],function(){
		$this->get('/',['as' => 'stbenilde.datapresentation.index','uses' => 'datapresentationController@index']);
	});

	$this->group(['prefix' => 'billing'],function(){
		$this->get('/',['as' => 'stbenilde.billing.index','uses' => 'billingController@index']);
	});
	
	$this->group(['prefix' => 'websync'],function(){
		$this->get('/',['as' => 'stbenilde.websync.index','uses' => 'webSyncController@index']);
	});

}); 
