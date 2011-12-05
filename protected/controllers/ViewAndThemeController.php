<?php

class ViewAndThemeController extends Controller
{
  public $layout = '//layouts/column1';
  public $navData = '';
  
  
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionNewPage(){
	    $this->layout = '//layouts/columnNewPage';
	    
	    
	    //fake data
	    $newsData = array();
	    $newsData[1] = array('title'=>'Yii Go Video No.4_1_2', 'content'=>'how to operate views.');
	    $newsData[2] = array('title'=>'Yii Go Video No.4_2', 'content'=>'upload files in Yii.');
	    
	    $tmpNavData = array();
	    $tmpNavData['YiiBlog'] = 'http://YiiBlog.info'; 
	    $tmpNavData['YiiBook'] = 'http://YiiBook.com'; 
	    $tmpNavData['YiiChina'] = 'http://YiiChina.org'; 
	    $tmpNavData['YiiFramework'] = 'http://www.YiiFramework.com';
	    $this->navData = $tmpNavData; //push data 
	    
	    $this->render('newPage', array(
	            'newsData' => $newsData,
	            ));
	}

}