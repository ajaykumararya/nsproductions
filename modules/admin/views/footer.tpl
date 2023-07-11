</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
			<script src="<?=base_url('assets/admin')?>/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?=base_url('assets/admin')?>/js/ace-elements.min.js"></script>
		<script src="<?=base_url('assets/admin')?>/js/ace.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
		
		<script>
	
$(document).on('click','.exam-details',function(){
    var exam = $(this).data('id');
    $.dialog({
        title : 'Exam Detail(S)',
        icon : 'fa fa-info',
        content : 'url:'+base_url+'frontend/get_exam_table/'+exam
    });
    
    
});

$(document).on('change','.change-payment-status',function(){
    var registration_no= $(this).data('id'),
        status = $(this).val(),
        tr = $(this).closest('tr'),
        td = $(tr).find('td')[4];
        console.log({registration_no,status});
   Swal.fire({
      title: 'Are you sure?',
      text: 'Change Payment Status',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Change it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: '<?=base_url('admin/change-user-exam-status')?>',
          type: 'POST',
          data: {registration_no,status},
          success: function(data) {
            Swal.fire(
              'Updated!',
              'Your Record has been updated.',
              'success'
            );
            $(td).html(data);
          },
          error: function(xhr, status, error) {
            Swal.fire(
              'Error!',
              'An error occurred while updating the Record.',
              'error'
            );
          }
        });
      }
    });
     
});


$(document).on('click','.upload-marksheet',function(){
    var registration_no= $(this).data('id'),
        td = $(this).closest('td'),
        showBtn = $(td).find('.show-marksheet'),
        currentBtn = this;
     Swal.fire({
      title: 'Select a Result File',
      input: 'file',
      inputAttributes: {
        accept: 'application/pdf,image/*',
        'aria-label': 'Upload your PDF or image file'
      },
      showCancelButton: true,
      confirmButtonText: '<i class="fa fa-upload"></i> Upload',
      showLoaderOnConfirm: true,
      preConfirm: (file) => {
        // return new Promise((resolve, reject) => {
          if (file) {
            return (file);
          } else {
            Swal.showValidationMessage('No file selected');
          }
        // });
      },
      allowOutsideClick: () => !Swal.isLoading()
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
        formData.append('file', file);
        formData.append('registration_no',registration_no);
        
        // Set up XHR object and send request
        xhr.open('POST', '<?=base_url('admin/upload-marksheet')?>'); // Replace with your server-side script URL
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
              if(showBtn.length){
                //   alert(2);
                //   $(showBtn).data('href',response.file_path);
                  $(currentBtn).siblings('.show-marksheet').attr('data-href',response.file_path);
                  console.log($(currentBtn).siblings('.show-marksheet'));
              }
              else{
                  var $button = $('<button>');
                    
                    // Set button attributes
                    $button.attr('class', 'btn btn-white btn-sm btn-primary show-marksheet btn-bold');
                    $button.attr('type', 'button');
                    $button.attr('data-href',response.file_path);
                    // Set button text
                    $button.html('<i class="fa fa-eye"></i>');
                  $(td).append($button);
              }
              
              
            } else {
              // Show error message to the user
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: response.msg
              });
            }
          } else {
            // Show error message to the user
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Server error occurred'
            });
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
        };
        xhr.send(formData);
      } else {
        console.log('File selection cancelled');
      }
    });
});
// $(document).on('click','.get-admit-card',function(){
//   var rid = $(this).data('rid'),
//     url = '<?=base_url('admit-card/')?>'+rid;
//   var x = $.dialog({
//                 title : `${rid} Admit Card`,
//                 content : 'url:'+url+'?via=super',
//                 columnClass : 'col-md-12',
//                 theme : 'bootstrap',
//                 type : 'green',
//                 buttons :{
//                     full_view : {
//                         text : 'Full Page',
//                         btnClass :'btn-primary',
//                         action : function(){
//                             // var url = $(this).attr("href"); // get the URL of the clicked link
                          
//                             window.open(url, "_blank");
//                         }
//                     }
//                 }
//             });
//               x.hide();
// });
$(document).on('click','.show-marksheet',function(){
    var reg = $(this).siblings('.upload-marksheet').data('id');
    var url = $(this).data('href'),
        ext = url.split('.').pop(),
        html = (ext == 'pdf' || ext == 'PDF') ? `<iframe src="${url}" width="100%" height="500px" style="border:0"></iframe>` : `<img src="${url}" width="100%">`;
        $.dialog({
            title : `${reg} Result`,
            content : html,
            columnClass : 'col-md-12',
            theme : 'bootstrap',
            type : 'green'
        })
});

		</script>
		<!-- inline scripts related to this page -->
	</body>
</html>