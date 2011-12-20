<?php

class UploadController extends Controller
{
	public function actionIndex()
	{
	  $model=new Item();
// 	  echo '<pre>';
// 	  print_r($_POST);
// 	  print_r($_FILES);
// 	  exit;
    if(isset($_POST['Item']))
    {
        $model->attributes=$_POST['Item'];
        $model->image=CUploadedFile::getInstanceByName('Item[image]');
//         $model->image=CUploadedFile::getInstance($model,'image');
//         print_r($model->image);exit;
        $imageName = 'ImageName.jpg'; //random method
        if ($model->validate(array('image'))){
            $model->image->saveAs(Yii::app()->basePath.'/../tmp/'.$imageName);
        }else {
            print_r($model->errors);exit; //error output.
        }
        
        $model->image = $imageName;  
        if($model->save())
        {
            //redirect to success page
            echo 'success';
        }
    }
    $this->render('index', array('model'=>$model));
	}
	
	/**
	 * ajax upload demo
	 */
	public function actionAjaxUpload(){
	    
	    //render
	    $this->renderPartial('ajaxUpload');
	}
	
	/**
	 * get ajax uploaded files.
	 */
	public function actionGetAjax(){
// 	    echo '<pre>';
	    print_r($_POST);
	    print_r($_FILES);
	    $tmpImage = CUploadedFile::getInstanceByName('image');
	    print_r($tmpImage);
	}
}