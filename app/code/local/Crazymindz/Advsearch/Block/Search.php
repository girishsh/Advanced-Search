<?php
class Crazymindz_Advsearch_Block_Search extends Mage_Checkout_Block_Cart_Abstract
{
	public function _prepareLayout() {
		return parent::_prepareLayout();
    }
    public function getTwoLevelCategoties() {
        $cats = Mage::getModel('advsearch/search')->getCategoryData(2);
        $result = Zend_Json::encode($cats); 
        return $result;
    }

}