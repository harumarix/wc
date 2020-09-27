$(document).ready(function(){
    $(document).on('click','#show-team-member',function(){
        var form = $('#instructor-pop-up');
        var parent = $(this).parent();
        form.find('#popup-member-name').html(parent.find('.member-name').html());
        form.find('#popup-member-post').html(parent.find('.member-post').html());

        var education = parent.find('.member-education').html();
        if(education){
            form.find('#popup-member-education').html(education);
            $('.js-education').show();
        }else{
            form.find('#popup-member-education').html('');
            $('.js-education').hide();
        }

        var achievments = parent.find('.member-achievments').html();
        if(education){
            form.find('#popup-member-achievments').html(achievments);
            $('.js-achievments').show();
        }else{
            form.find('#popup-member-achievments').html('');
            $('.js-achievments').hide();
        }
        
        var specialization = parent.find('.member-specialization').html();
        if(education){
            form.find('#popup-member-specialization').html(specialization);
            $('.js-specialization').show();
        }else{
            form.find('#popup-member-specialization').html('');
            $('.js-specialization').hide();
        }

        var text = parent.find('.member-text').html();
        if(text){
            form.find('#popup-member-text').html(text);
            $('.js-text').show();
        }else{
            form.find('#popup-member-text').html('');
            $('.js-text').hide();
        }
        form.find('#popup-member-image').prop('src',(parent.find('.member-image').html()));
        $('#input-instructor').val(parent.find('.member-name').text());
    });
})