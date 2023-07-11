<div class="row">

    <?php
    $list = $this->exam_model->listCategory($id);
    
    
    if($list->num_rows()){
        foreach($list->result() as $row){
            ?>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?=$row->title?></h3>
                    </div>
                    <div class="panel-body exam-box">
                        <?php
                        $gets = $this->db->where('category',$row->id)->get('exam');
                        if($gets->num_rows()){
                            echo '<ul class="list-group">';
                            foreach($gets->result() as $exam){
                            ?>
                                <li class="list-group-item"><b class="inline"><?=$exam->title?></b>
                                    <div class="pull-right" data-form_id="<?=$exam->id?>" style="margin-top: -5px;"><a href="javascript:;" class="nav-link btn btn-primary btn-xs">Apply</a></div>
                                </li>
                            <?php
                            }
                            echo '</ul>';
                        }
                        else{
                            echo '<div class="alert alert-danger">Exam(s) not Found..</div>';
                        }
                        ?>
                    </div>
                </div>
            
            </div>
            
            <?php
        }
    }
    
    else{
    
    
    }
    
    ?>


</div>