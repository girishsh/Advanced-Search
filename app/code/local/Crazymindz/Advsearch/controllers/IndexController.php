<?php

class Crazymindz_Advsearch_IndexController extends Mage_Core_Controller_Front_Action {

	public function indexAction() {
		$result = array('test1' => 'value1', 'test2' => 'value2');
		//return $result;
		print_r(json_encode($result)); exit;
	}

	public function getmodelsAction() {
		$id = $this->getRequest()->getParam('id');
		$result = Mage::getModel('advsearch/search')->getCategoryData($id);
		$this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
		return $result;
	}

	public function gettypesAction() {
		$id = $this->getRequest()->getParam('id');
		$result = Mage::getModel('advsearch/search')->getCategoryData($id);
		$this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
		return $result;
	}
}