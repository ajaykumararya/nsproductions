<div class="row">
    
    <div class="col-md-6 col-offset-3">
        
    <form action="" class="" id="form">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Payment</h3>
                </div>
                <div class="panel-body">

                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                        <input type="hidden" class="exam_id" name="merchant_order_id" id="merchant_order_id" value="{id}"/>
                        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="{txnid}"/>
                        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="{product_info}"/>
                        <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="{back_url}"/>
                        <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="{back_url}"/>
                        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="{holder_name}"/>
                        <input type="hidden" name="merchant_total" id="merchant_total" value="{total}"/>
                        <input type="hidden" name="merchant_amount" id="merchant_amount" value="{amount}"/>
                  
                        <div class="form-group">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Exam</th><td>{product_info}</td>
                                    </tr>
                                    <tr>
                                        <th>Fees</th><td>{amount} <i class="fa fa-rupee"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Holder Name</th><td>{holder_name}</td>
                                    </tr>
                                    <tr>
                                      <th>Select Center</th>
                                      <td>
                                      <div class="form-group {center_class}">
                                        <select class="chosen-select getCenter form-control"  data-placeholder="Choose a Center..."  id="center_id" name="center">
                                          <option value></option>
                                          {center}  
                                            <option value="{id}">{title}</option>
                                          {/center}
                                        </select>
                                        <span class="control-label">Total {countCenter} Center(s) available.</span>
                                        </div>
                                      </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="response"></div>

                        {not_found_message}
                     
                </div>
                
                <div class="panel-footer">
                    {submit_btn}
                </div>
            </div>
        </form>
       
    </div>
</div>
<style>
.error-print{
  border:1px solid red;
}
.chosen-container{
  width:100%!important
}
</style>

<script>
NProgress.configure({parent : '.panel-footer'});
    
    
    <?php
    
    if($img){
        ?>
        
         Swal.fire({
              title: 'Update Your Profile First.',
              input: 'file',
              inputAttributes: {
                accept: 'image/*',
                'aria-label': 'Upload your Profile Photo.'
              },
              showCancelButton: false,
              confirmButtonText: '<i class="fa fa-upload"></i> Upload',
              showLoaderOnConfirm: true,
              allowOutsideClick : false,
              preConfirm: (file) => {
                // return new Promise((resolve, reject) => {
                  if (file) {
                    return (file);
                  } else {
                    Swal.showValidationMessage('No file selected');
                  }
                // });
              }
              //allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
              if (result.isConfirmed) {
                const file = result.value;
                console.log('Selected file:', file);
                Swal.fire({
                  title: 'Loading',
                  html: 'Please wait while we upload the data...',
                  allowOutsideClick: false,
                  showCancelButton: false,
                  showConfirmButton: false
                });
                
                Swal.showLoading();
                
                // Create XHR object and FormData object
                const xhr = new XMLHttpRequest();
                const formData = new FormData();
                
                // Add selected file to FormData object
                formData.append('img', file);
                formData.append('type', 'profile');
                
                // Set up XHR object and send request
                xhr.open('POST', '<?=base_url('user/profile')?>'); // Replace with your server-side script URL
                xhr.onload = () => {
                  if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                      // Show success message to the user
                      Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.msg
                      });
                      
                      $('.nav-user-photo').attr('src',response.profile);
                      
                    } else {
                      // Show error message to the user
                      Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.msg
                      });
                    location.reload();
                    }
                  } else {
                    // Show error message to the user
                    Swal.fire({
                      icon: 'error',
                      title: 'Error',
                      text: 'Server error occurred'
                    });
                    location.reload();
                  }
                  Swal.hideLoading();
                };
                xhr.onerror = () => {
                  console.error('Upload failed:', xhr.statusText);
                  Swal.fire({
                      icon: 'error',
                      title: 'Error',
                      text: xhr.statusText
                    });
                    location.reload();
                };
                xhr.send(formData);
              } else {
                console.log('File selection cancelled');
              }
            });
        <?php
    }
    
    ?>
    
    
    
  $(document).on('submit','#form',function(e){
      e.preventDefault();
      var form = $(this).serialize(),
          centerBox = $(this).find('#center_id_chosen');
      var center_id  = $(this).find('#center_id').val(),
          btn = $(this).find('.save'),
          exam_id = $(this).find('.exam_id').val();


      $(btn).html('<i class="fa fa-spin fa-spinner"></i> Loading..').prop('disabled',true);

      

      if(center_id){
        
        $.ajax({
          type : 'POST',
          url : '<?=base_url('user/submit_form')?>',
          data : {exam_id,center_id},
          dataType : 'json',
          success : function(a){
            Swal.fire({
              title: 'Good!',
              text: 'Check Your Exam List.',
              icon: 'success',
              confirmButtonText: 'OK'
            }).then(function(d){
              // if(d.isConfirmed)
                location.href = '<?=base_url('user/update-payment/')?>'+a.order_id;
            }); 
            
            $(btn).html('Submit').prop('disabled',false);
          },
          error: function(a,v,c){
            console.warn(a.responseText);
            
            $(btn).html('Submit').prop('disabled',false);
          }
        });  
      }
      else{
        Swal.fire({
          title: 'Error!',
          text: 'Please Choose A Center..',
          icon: 'warning',
          confirmButtonText: 'OK'
        }).then(function(s){
          $(btn).html('Submit').prop('disabled',false);
        });        

        $(centerBox).addClass('error-print').click(function(){
          $(this).removeClass('error-print');
        });

      }
  });

  $(document).on('change','.getCenter',function(){
    console.warn(this.value);
    NProgress.start();
    var btn = $('.save'),
        center_id = $(this).val();
    $(btn).prop('disabled',true);
    center_id = center_id ? center_id : 0;
    $.post('<?=base_url('user/getCenterDetails/')?>'+center_id,{},function(data){
      $('.response').html(data);
      NProgress.done();
      
      $(btn).prop('disabled',false);
    })

  });

  

</script>



 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 
 <script>
     
  var razorpay_options = {
    key: "rzp_live_4wjYVeatp25rV9",
    amount: {total},
    name: "Rankers Education Hub",
    description: "{product_info}",
    netbanking: true,
    currency: "INR",
    prefill: {
      name:"{holder_name}",
      email: "{email}",
      contact: "{mobile}"
    },
    notes: {
      soolegal_order_id: "{txnid}",
    },
    handler: function (transaction) {
        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
        document.getElementById('razorpay-form').submit();
    },
    "modal": {
        "ondismiss": function(){
            // location.reload();
            $('body').css({'overflow-x':'scroll'});
        }
    }
  };
  
  
  var razorpay_submit_btn, razorpay_instance;
  $(document).on("click",'.do-payment',function(e){
      e.preventDefault();
      do_payment();
  })
  
  function do_payment(){
  let el = $(".do-payment").find('button'),
                btn_value = $(el).html();
            
            if(typeof Razorpay == 'undefined'){
              setTimeout(do_payment, 200);
              if(!razorpay_submit_btn && el){
                razorpay_submit_btn = el;
                $(el).prop('disabled', true ); 
                $(el).html( 'Please wait...' );  
              }
            } else {
              if(!razorpay_instance){
                razorpay_instance = new Razorpay(razorpay_options);
                if(razorpay_submit_btn){
                  $( razorpay_submit_btn ).prop( 'disabled', false );
                  $(el).html( btn_value );  
                }
              }
              razorpay_instance.open();
            }
  }

 </script>