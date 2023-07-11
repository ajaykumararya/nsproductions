<div class="row">
    <div class="col-md-4">
        <form action="" method="POST" enctype="multipart/form-data" class="basic-details">
            <input type="hidden" name="type" value="basic">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Details</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control" placeholder="Enter Name" value="{name}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" required class="form-control" placeholder="Enter Name" value="{email}">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" required class="form-control" placeholder="Enter Name" value="{mobile}">
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary save"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-4">
        <form action="" method="POST" enctype="multipart/form-data" class="basic-details">
            <input type="hidden" name="type" value="profile">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Details</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Profile</label>
                        <input type="file" name="img" required class="form-control" >
                    </div>
                    <div class="form-group">
                        <img id="profile-img" src="<?=base_url('upload/')?>{img}">
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary save"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-4">
        <form action="" method="POST" enctype="multipart/form-data" class="basic-details">
            <input type="hidden" name="type" value="password">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Details</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" required class="form-control" placeholder="Enter Password" value="{password}">
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary save"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

    </div>
</div>
<script>
    $(document).on('submit','.basic-details',function(d){
         d.preventDefault();
        var btn = $(this).find('.save')
            btnHtml = $(btn).html(),
          exam_id = $(this).find('.exam_id').val();


      $(btn).html('<i class="fa fa-spin fa-spinner"></i> Loading..').prop('disabled',true);
        // var data = new FormData();
         $.ajax({
            type : 'POST',
            url : '<?=current_url()?>',
            data: new FormData(this),
            processData: false,
            contentType: false,
            dataType :'json',
            success : function(r){
                console.warn(r);
                $(btn).html(btnHtml).prop('disabled',false);
                swal.fire(r.message);
                if('profile' in r){
                    $('#profile-img').attr('src',r.profile);
                    $('.nav-user-photo').attr('src',r.profile);
                }
            },
            error:function(f,c,x){
                console.warn(f.responseText);
                $(btn).html(btnHtml).prop('disabled',false);
            }
         });


    });
</script>