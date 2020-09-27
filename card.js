$(document).ready(function(){
    $(document).on('click','#request-card-from-view',function(){
        $('#input-card').val($(this).data('card'));
    })
})