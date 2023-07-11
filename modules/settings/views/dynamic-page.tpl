<script src='https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js'></script>
<style>
    .mce-notification-warning{
        display:none!important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <form action="" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="{id}">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-file"></i> Page Edit</h3>
                </div>
                
                <div class="panel-body">
                    <div class="form-group">
                        <label>Page Name</label>
                        <input type="text" readonly value="{title}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Page Content</label>
                        <textarea class="editor" name="content">{content}</textarea>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
            
        </form>
    </div>

</div>
<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

  </script>