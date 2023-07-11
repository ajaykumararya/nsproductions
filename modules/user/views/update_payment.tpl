<div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Exam Details
                </h3>
            </div>
            <div class="panel-body">
                <h3 class="">Registration NO. : <?=$this->uri->segment(3,0)?></h3>
            </div>
        </div>
                    
    </div>
    <div class="col-md-4">
    <form action="" method="POST" class="update-payment">
        <input type="hidden" name="registration_no" value="<?=$this->uri->segment(3,0)?>">
        
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Do Payment
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <img src="<?=base_url('assets/paymentQR.jpg')?>" style="width: 100%;">
                    </div>
                </div>
                <div class="panel-heading" style="border-radius:0">                
                    <h4 class="panel-title" align="center">Update Entity</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>UTR</label>
                        <input type="text" name="utr" autofocus class="form-control utr" placeholder="Enter UTR Number">
                    </div>
                    <div class="social-or-login center">
                        <span class="bigger-110">Or </span>
                    </div>
                    <div class="form-group">
                        <label>Transaction ID</label>
                        <input type="text" name="transaction" class="form-control transaction" placeholder="Enter UTR Number">
                    </div>
                </div>
                
                <div class="panel-footer">
                    <button class="btn btn-primary btn-xs"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        
    </form>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Note
                </h3>
            </div>
            <div class="panel-body">
                <h3 class="">Calling No : <a href="tel:9983391818"><i class="fa fa-phone"></i> 9983391818</a></h3>
                <h3 class="">Whatsapp No : <a href="https://wa.me/8619391818"><i class="fa fa-whatsapp"></i> 8619391818</a></h3>
                <hr>
                <h4>In English :-</h4>
                <p class="text-success" style="padding-left:10px">
                    1. You can share your payment screenshot after payment.
                </p>
                <p class="text-success" style="padding-left:10px">
                    2. If you have any problem then you can call on the given number.
                 </p>
                <h4>हिंदी में:-</h4>
                <p class="text-success" style="padding-left:10px">
                    1. भुगतान के बाद आप अपने भुगतान का स्क्रीनशॉट साझा कर सकते हैं।
                </p>
                <p class="text-success" style="padding-left:10px">
                    2. अगर आपको कोई समस्या है तो आप दिए गए नंबर पर कॉल कर सकते हैं।
                 </p>
            </div>
        </div>
                    
    </div>
</div>

<script>
    $(document).on('submit','.update-payment',function(r){
        r.preventDefault();
        var data = $(this).serialize(),
            utr = $(this).find('.utr').val(),
            transaction = $(this).find('.transaction').val(),
            btn  = $(this).find('button'),
            btnHtml = $(btn).html();

            

        if(utr || transaction){
            $(btn).html('<i class="fa fa-spin fa-spinner"></i> Loading...').prop('disabled',true);
            $.ajax({
                type : 'POST',
                url : '<?=current_url()?>',
                data : data,
                dataType : 'json',
                success : function(res){
                    console.log(res);
                    $(btn).html(btnHtml).prop('disabled',false);
                    swal.fire('Your request Complete Successfully...');
                },
                error:function(a,v,c){
                    console.warn(a.responseText);                 
                    $(btn).html(btnHtml).prop('disabled',false);

                }
            });
        }
        else{
            swal.fire('Please Fill UTR or Transaction.');
        }
    })
</script>