
var decisionNum = 0;

$(document).ready(function(){

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
	        $(".decision-form .decision-info:last").remove();
	        $(".decision-form .decision-label:last").remove();			
			decisionNum = decisionNum - 1;	
//			$(".decision-form .visible:last").toggleClass('invisible visible');
			
			}
	    
	});
	

});