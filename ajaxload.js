$(document).ready(function(){
    $('#services-show-more, #news-show-more, #promos-show-more, #events-show-more, #kids-show-more').click(function(){
        var self = $(this);
        var page = self.data('page');
        var perPage = self.data('per-page');
        $.ajax({
            url: document.location.href,
            data:{
                page:page,
                'per-page':perPage
            },
            dataType:'JSON'
        }).done(function(data){
            if(data.success){
                $('#ajax-container').append(data.view);
                if(data.count < perPage || data.totalCount <= perPage*page){
                    self.hide();
                }else{
                    self.data('page',page+1);
                }
            }
        })
    });
    
    $('form').submit(function(){
        var self = $(this);
        var data = {};
        self.find('input, textarea').each(function(i,el){
            data[el.name] = el.value
        });
        $.ajax({
            url:self.prop('action'),
            method:'post',
            dataType:'JSON',
            data:data
        }).done(function(data){
            if(data.success){
                $('#show-success').click();
                self.find('input:not([type=submit])').val('');
            }else{
                alert('ПРоизошла ошибка, попробуйте позже')
            }
        }).fail(function(){
            alert('ПРоизошла ошибка, попробуйте позже')
        })

        return false;
    })
})