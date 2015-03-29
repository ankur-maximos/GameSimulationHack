
var decisionNum = 0;
var variableNum = 0;

$(document).ready(function(){


    $('#create-btn').click(function(event) {
	event.preventDefault();
	$('#admin-welcome').toggleClass('col-md-12 col-md-0');
	$('#create-form').toggleClass('col-md-0 col-md-12');
	$('#admin-welcome').addClass('invisible');
	});
	
	$('.next-btn').click(function(event) {
	event.preventDefault();
	var last = $("fieldset .col-md-12:eq(0)");
	var next = $("fieldset .col-md-0:eq(0)");
    next.toggleClass('col-md-0 col-md-12');
	next.removeClass('invisible');
	last.toggleClass('col-md-12 col-md-00');
	last.addClass('invisible');
	
	});
	
	$('.confirm-btn').click(function(event) {
	event.preventDefault();
	var last = $("fieldset .col-md-12:eq(0)");
	var next = $("fieldset .col-md-0:eq(0)");
    next.toggleClass('col-md-0 col-md-12');
	next.removeClass('invisible');
	last.toggleClass('col-md-12 col-md-00');
	last.addClass('invisible');
	
	$('#name-confirm').text("Simulation Name:  "+$("input[name='name-field']").val());
	$('#people-confirm').text("rivals:  "+$("input[name='people-field']").val());
	$('#start-confirm').text("Start Time:  "+$("input[name='start-field']").val());
	$('#end-confirm').text("End Time:  "+$("input[name='end-field']").val());
	$('#step-confirm').text("Initial Step:  "+$("input[name='step-field']").val());
	
	for(var i=0;i<decisionNum;i++) {
		var decisionNameValue=$("input[name='decision-name-field']")[i];
		var decisionTypeValue=$("select[name='decision-type-field']")[i];
		var txt=$('<tr></tr>');
		txt.append($('<td></td>').text($(decisionNameValue).val()));
		txt.append($('<td></td>').text($(decisionTypeValue).val()));
		$('#decision-confirm').find('tbody').append(txt);
		
	}
	
	for(var i=0;i<variableNum;i++) {
		var variableNameValue=$("input[name='variable-name-field']")[i];
		var variableTypeValue=$("input[name='variable-equation-field']")[i];
		var txt=$('<tr></tr>');
		txt.append($('<td></td>').text($(variableNameValue).val()));
		txt.append($('<td></td>').text($(variableTypeValue).val()));
		$('#variable-confirm').find('tbody').append(txt);
		
	}
	
//	for(var decisionName in $("input[name='decision-name-field']")) {
//	   var decisionType=decisionName.parents('.decision-info').find("select[name='decision-type-field']");
//	   $('#decision-confirm').find('tbody').append($('<tr></tr>').append($('<td></td>').text($(decisionName).val())));
	   
	
//	}
	
	});
	
	$('.add-btn').click(function(event) {
	event.preventDefault();
	if($(this).hasClass('decision-add')) {
			decisionNum = decisionNum + 1;	
	        $(this).parents(".control-group").before($("<label class='control-label decision-label'></label>").text("Decision " + decisionNum));
			$(this).parents(".control-group").before('<div class="control-group decision-info"><div class="controls"><input type="text" placeholder="Decision Name" name="decision-name-field" class="input-xlarge"><select name="decision-type-field" class="input-xlarge"><option>Boolean</option><option>Integer</option></select><div style="height: 10px"></div></div></div>');
            if(decisionNum >= 5) {
			    $(this).attr("disabled", true); 
			}
			//			$(".decision-form .invisible:eq(0)").toggleClass('visible invisible');			
			} else if($(this).hasClass('variable-add')) {
			variableNum = variableNum + 1;	
	        $(this).parents(".control-group").before($("<label class='control-label variable-label'></label>").text("Variable " + variableNum));
			$(this).parents(".control-group").before('<div class="control-group variable-info"><div class="controls"><input type="text" placeholder="variable Name" name="variable-name-field" class="input-xlarge">=<input type="text" placeholder="equation" name="variable-equation-field" class="input-xlarge"><div style="height: 10px"></div></div></div>');
            if(variableNum >= 10) {
			    $(this).attr("disabled", true); 
			}
			}
	    
	});
	
    $('.delete-btn').click(function(event) {
	event.preventDefault();
	if($(this).hasClass('decision-delete')) {
	        if(decisionNum>0) {
				decisionNum = decisionNum - 1;
				if(decisionNum<5) {
				$(this).parents('.control-group').find('.decision-add').attr("disabled",false);
				}
            } 				
	        $("#decision-form .decision-info:last").remove();
	        $("#decision-form .decision-label:last").remove();			
//			$(".decision-form .visible:last").toggleClass('invisible visible');
			
			} else if($(this).hasClass('variable-delete')) {
				if(variableNum>0) {
				variableNum = variableNum - 1;
				if(variableNum<10) {
				$(this).parents('.control-group').find('.variable-add').attr("disabled",false);
				}
            } 				
	        $("#variable-form .variable-info:last").remove();
	        $("#variable-form .variable-label:last").remove();			
			
			}
	    
	});
	

});