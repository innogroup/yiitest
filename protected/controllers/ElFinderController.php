<?php
class ElFinderController extends Controller
{
    public function actions()
    {
        return array(
            'connector' => array(
                'class' => 'ext.elFinder.ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/uploads/',
                    'URL' => Yii::app()->baseUrl . '/uploads/',
                    'rootAlias' => 'Home',
                    'mimeDetect' => 'none'
                )
            ),
        );
		
    }
	public function actionView(){
		$this->render('view');
	}
	public function actionManage(){
		$this->render('manage');
	}
	// public function actionAttach($id) {
		// Yii::import('ext.elFinder.ElFinderConnectorAction');
		// $act =  new ElFinderConnectorAction();
		// $act->settings = array(
						// 'root' => Yii::getPathOfAlias('webroot') . '/uploads/'.$id,
						// 'URL' => Yii::app()->baseUrl . '/uploads/'.$id,
						// 'rootAlias' => 'Home',
						// 'mimeDetect' => 'none'
					// );
		// $act->run();			
			// // return array(				
					// // 'class' => 'ext.elFinder.ElFinderConnectorAction',
					// // 'settings' => array(
						// // 'root' => Yii::getPathOfAlias('webroot') . '/uploads/'.$id,
						// // 'URL' => Yii::app()->baseUrl . '/uploads/'.$id,
						// // 'rootAlias' => 'Home',
						// // 'mimeDetect' => 'none'
					// // )
				
			// // );
	// }
}
