<div class="col-md-12">
    
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">List Of Admit Card(s)</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                    <?php
                    $list = $this->exam_model->user_admit_card($id);
                    if($list->num_rows()){
                        ?>
                        <table class="table table-striped table-bordered  table-hover" id="myTable">

                            <thead>
                                <tr>
                                    <th>#.</th>
                                    <th>Registration No.</th>
                                    <th>Exam</th>
                                    <th>Admit Card</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach($list->result() as $exam){
                                    echo '<tr>
                                            <td>'.$i++.'.</td>      
                                            <td>'.$exam->registration_no.'</td>
                                            <td><a href="javascript:;" class="exam-details" data-id="'.$exam->exam_id.'">'.$exam->title.'</a></td>      
                                               
                                            <td>';
                                            if($exam->admit_card_time <= CURRENT_DATE_WITH_TIME){
                                                echo '<a href="'.base_url('admit-card/'.$exam->registration_no).'" target="_black" class="btn btn-xs btn-bold btn-primary btn-white"><i class="fa fa-id-card"></i> Admit Card</a>';
                                            }
                                            else
                                                echo '<label class="text-danger">Comming Soon</label>';
                                            
                                            
                                            echo '</td>      
                                            
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>

                        <?php
                    }
                    else{
                        echo alert('Admit not Available..','danger');
                    }

                    ?>
                </div>
            
        </div>
    </div>
    
    
</div>
