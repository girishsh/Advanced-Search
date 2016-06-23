var BASE_URL="<?php echo Mage::getBaseUrl();?>";
//jQuery.noConflict();
function getmodeldata() {
	jQuery.ajax( {
		    url : "advsearch/index/getdata",
		    dataType : 'json',
		    data: jQuery(this).serialize(),
		    success : function(data) {
		    	alert("success");
		    	console.log(data.test1);
		    	jQuery('#selectmodels').find('option').remove().end().append('<option value="">Select the model</option>');
		    	//jQuery('#selectmodels').append(jQuery('<option>', { value : key }).text(value));
		    	jQuery.each(data, function(key, value) {
				    jQuery('#selectmodels').append(jQuery('<option>', { value : key }).text(value));
				});

		    	//$('select').append("<option val="+data+">"+data+"</option>");
			    datamodels = data;//jQuery.parseJSON(result);
			    
		    }
	});
}