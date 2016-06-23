<?php

class Crazymindz_Advsearch_IndexController extends Mage_Core_Controller_Front_Action {

	public function indexAction() {
		$result = array('test1' => 'value1', 'test2' => 'value2');
		//return $result;
		print_r(json_encode($result)); exit;
	}

	public function getdataAction() {
		
		$result = array ('test1' => 'value1', 'test2' => 'value2');
		//$json_result = Zend_Json::encode($result);
		$this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
		Mage::log($result,null,"test.log");
		//$result["json"] = json_encode($result);
		return $result;
	}

	public function gettypesAction() {
		$result = array('test1' => 'value1', 'test2' => 'value2');
		return $result;
	}
}