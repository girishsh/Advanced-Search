<?php

class Crazymindz_Advsearch_Model_Search extends Mage_Core_Model_Abstract
{
	public function _construct()
	{
		parent::_construct();
		$this->_init('advsearch/search');
	}

	public function getCategoryData($id) {
		$categories = $this->hpCat($id,1);
		return $categories;
	}

	public function hpCat($id,$level=0){
	    if(!empty($id)){
	        $level=empty($level)?0:$level;
	        $category = Mage::getModel('catalog/category')->load($id);
	        $levelOneItems = $category->getChildrenCategories();
	        if (count($levelOneItems) > 0){
	            $array=$this->hpCatDetails($category);
	            if($level>=1):
	                $i=0;
	                foreach($levelOneItems as $levelOneItem){ 
	                    $array['sub'][$i]=$this->hpCatDetails($levelOneItem);    
	                    $leveltwoItems=$levelOneItem->getChildrenCategories();
	                    if (count($leveltwoItems) > 0){
	                        if($level>=2):
	                            $j=0;
	                            foreach($leveltwoItems as $leveltwoItem){     
	                                $array['sub'][$i]['sub'][$j]=$this->hpCatDetails($leveltwoItem);
	                                $levelthreeItems=$leveltwoItem->getChildrenCategories();
	                                if (count($levelthreeItems) > 0){
	                                    if($level>=3):
	                                    $k=0;
	                                    foreach($levelthreeItems as $levelthreeItem){     
	                                        $array['sub'][$i]['sub'][$j]['sub'][$k]=$this->hpCatDetails($levelthreeItem);
	                                        $k++;
	                                    }  
	                                    endif;
	                                }
	                                $j++;
	                            }  
	                        endif;
	                    }
	                    $i++;
	                }
	            endif;
	        }
	        return $array;
	    }
	    return array();
	}

	public function hpCatDetails($cat){
	    return array('catid' => $cat->getId(), 'name'=>$cat->getName(), "caturl"=>$cat->getUrl());
	}
}