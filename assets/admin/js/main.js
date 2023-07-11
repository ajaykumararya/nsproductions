$(document).ready(function(){

    $(document).on('submit','#login',function(e){
        e.preventDefault();
        var btn = $(this).find('button'),
            btnHtml  = $(btn).html(),
            that = this;
            $(that).find('.message').html('');
        $(btn).html('<i class="fa fa-spin fa-spinner"></i> Please Wait...').prop('disabled',true); 
        $.ajax({
            type : 'POST',
            url : base_url + 'page/admin_login',
            data : $(that).serialize(),
            dataType : 'json',
            success : function(r){
                console.log(r);
                $(that).find('.message').html(r.message);
                if(r.status){
                    location.reload();
                }
                $(btn).html(btnHtml).prop('disabled',false);
            },
            error:function(a,v,c){
                console.warn(a.responseText);
                $(btn).html(btnHtml).prop('disabled',false);
            }
        });    
    })


});