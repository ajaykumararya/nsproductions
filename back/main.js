$(document).on('click','.exam-box .nav-link',function(){
    // alert('yes');
    var id = $(this).parent().data('form_id');
    // alert(id);
    $.dialog({
        title : 'Exam From Details',
        icon : 'fa fa-file',
        theme : 'bootstrap',
        type : 'red',
        content : 'url:'+base_url+'frontend/exam-details/'+id,
        contentLoaded: function(cdata, status, xhr){
            // data is already set in content
            // this.setContentAppend('<br>Status: ' + status);
            var data = JSON.parse(cdata);
            this.setTitle(data.title);
            this.setContent(data.content);
            if(data.status){
                this.setColumnClass('col-md-12');
                // console.log(this.$content.find('.apply-now').html());
                // $(document).on('click','.apply-now',function(){
                //     $.confirm('Well Done.'+data.price);
                // })
                
                
            }
            else{
                this.setIcon('fa fa-exclamation-triangle');
            }
            
            
            
        }
        
    });
});
