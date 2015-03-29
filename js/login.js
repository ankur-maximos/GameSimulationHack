$(document).ready(function(){

    $('input[name=radio]').change(function(){
    if ($('input[name=radio]:checked').val() == 1) {
        $('#simId').show();
    } else if ($('input[name=radio]:checked').val() == 2) {
        $('#simId').hide();
    }
});
});
