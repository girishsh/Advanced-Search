<?php
class Crazymindz_Advsearch_Block_Search extends Mage_Checkout_Block_Cart_Abstract
{
	public function _prepareLayout() {
		return parent::_prepareLayout();
    }
    
    public function getBrands() { 
        
    }
    
	public function getSendUrl() {
        return $this->getUrl('*/*/send');
    }
    
    public function getModels() {
    	return Mage::getSingleton('customer/session')->getCustomer()->getName();
    }

    public function getTypes() { 
        
    }

}