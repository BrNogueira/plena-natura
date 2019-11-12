$('input:radio[name="mainButton"]').on('change', function(){
    var main = $('input:radio[name="mainButton"]:checked').val();
    $.post('/address/setmain/' + main);
});