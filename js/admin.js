
var decisionNum = 0;

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
	$('.add-btn').click(function(event) {
	event.preventDefault();
	if($(this).hasClass('decision-add')) {
			decisionNum = decisionNum + 1;	
	        $(this).parents(".control-group").before($("<label class='control-label decision-label'></label>").text("Decision " + decisionNum));
			$(this).parents(".control-group").before('<div class="control-group decision-info"><div class="controls"><input type="text" placeholder="Decision Name" class="input-xlarge"><select class="input-xlarge"><option>Boolean</option><option>Integer</option></select><div style="height: 10px"></div></div></div>');
//			$(".decision-form .invisible:eq(0)").toggleClass('visible invisible');			
			}
	    
	});
	
    $('.delete-btn').click(function(event) {
	event.preventDefault();
	if($(this).hasClass('decision-delete')) {
	        $("#decision-form .decision-info:last").remove();
	        $("#decision-form .decision-label:last").remove();			
			decisionNum = decisionNum - 1;	
//			$(".decision-form .visible:last").toggleClass('invisible visible');
			
			}
	    
	});
	

});