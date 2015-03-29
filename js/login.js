$(document).ready(function(){

    $('input[name=radio]').change(function(){
    if ($('input[name=radio]:checked').val() == 1) {
        $('#simId').show();
        $( "#inputSimId" ).attr( "required", "");
        //$('#append').append('<div id="simId"><label for="inputSimId" class="sr-only">Simulation ID</label><input type="simulationId" id="inputSimId" name="inputSimId" class="form-control" placeholder="Simulation ID" autofocus=""></div>');
    } else if ($('input[name=radio]:checked').val() == 2) {
        $('#simId').hide();
        $( "#inputSimId" ).removeAttr("required");
        //$('#simId').remove();
    }
});
});
