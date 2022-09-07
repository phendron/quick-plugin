jQuery(document).ready(function($){
	
	
	
	var version = parseFloat(ajax_object.wordpress_version);
	
	while(version > 1.0){
		var opt = $("<option></option>");
		var ver = version.toString().split(".");
		var txt_ver = ver[0];
		if(ver.length > 1){
			txt_ver += "."+ver[1][0] 
		}
		opt.text(txt_ver);
		opt.attr("value", txt_ver);
		$("select.plugin-wordpress-version").append(opt);
		version-=0.1;
	}
	
	
	
	$(".onclick-show").on("click", function(e){
		e.preventDefault();
	    var showClass = $(this).attr("show-class");
		var hideClass = $(this).attr("hide-class");
		var validation = validateStep(showClass);
		if(validation['valid']){
		$("."+showClass).show();
		$("."+hideClass).hide();
		} else {
			for(var i = 0; i < validation['fields'].length; i++){
		        $(validation['fields'][i]).css("border", "1px solid #ff0000");
	        }
		}
	});
	
	
	$("form.plugin-create").on("submit", function(e){
		e.preventDefault();
		
		alert("form submitted");
	});
	
	
	function validateStep(step){
	if(step=="step2"){
		return step1();
	} else {
		var valid = [];
		valid['valid']=true;
		return valid;
	}
	}
	
	function step1(){
		var valid = [];
		valid['valid']=true;
		valid['fields'] = [];
		var name = $("input[name='plugin-name']").val();
		if(name == undefined || name === undefined || name == ''){
			valid['valid'] = false;
			valid['fields'].push("input[name='plugin-name']");
		}
		
		return valid;
	}
	
});