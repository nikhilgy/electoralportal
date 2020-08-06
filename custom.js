$(function(){
var countryOptions;
var stateOptions;
var districtOptions;
	$.getJSON('assets/indianStates.json',function(result){
		$.each(result, function(i,state) {
			//<option value='countrycode'>contryname</option>
			stateOptions+="<option value='"
			+state.code+
			"'>"
			+state.name+
			"</option>";
			 });
			 $('#state').html(stateOptions);
	});

	$("#state").change(function(){
	if($(this).val()=="MH"){
			$.getJSON('assets/MHDistricts.json',function(result){
			$.each(result, function(i,district) {
				//<option value='districtName'>districtName</option>
				districtOptions+="<option value='"
				+district.name+
				"'>"
				+district.name+
				"</option>";
				 });
				 $('#district').html(districtOptions);
			});
		}
	});
	
});

/**************************FORM VALIDATION *********************************/


/**************************FORM VALIDATION *********************************/
