<div class="row">

    <div class="col-md-12">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file"></i> List Exam(s)</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $list = $this->exam_model->getUserExams($this->session->user_id);
                    if($list->num_rows()){
                        ?>
                        <table class="table table-striped table-bordered  table-hover" id="myTable">

                            <thead>
                                <tr>
                                    <th>#.</th>
                                    <th>Registration No.</th>
                                    <th>Exam</th>
                                    <th>Center</th>
                                    <th>Admit Card</th>
                                    <th>Result</th> 
                                    <th>Payment Status</th>
                                    <th>Payment Details</th>
                                    <th>Update Payment</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach($list->result() as $exam){
                                    echo '<tr>
                                            <td>'.$i++.'.</td>      
                                            <td>'.$exam->registration_no.'</td>
                                            <td><a href="javascript:;" class="exam-details" data-id="'.$exam->exam_id.'">'.$exam->exam.'</a></td>      
                                            <td>'.$exam->center.'</td>      
                                            <td>';
                                            if($exam->admit_card_time <= CURRENT_DATE_WITH_TIME){
                                                echo '<a href="'.base_url('admit-card/'.$exam->registration_no).'" target="_black" class="btn btn-xs btn-bold btn-primary btn-white"><i class="fa fa-id-card"></i> Admit Card</a>';
                                            }
                                            else
                                                echo '<label class="text-danger">Comming Soon</label>';
                                            
                                            
                                            echo '</td>      
                                            <td><label class="text-danger">Comming Soon</label></td>   
                                            <td>'.( $exam->payment_status ? label('Success') : label('Failed','danger') ).'</td>
                                            <td>';
                                                if($exam->utr)
                                                    echo label('UTR : '.$exam->utr,'success arrowed-in-right arrowed');
                                                if($exam->transaction)
                                                    echo label('Transaction: '.$exam->transaction,'success arrowed-in-right arrowed');
                                                    
                                                if(!$exam->utr AND !$exam->transaction)
                                                    echo label('Detail not found..','inverse label-white middle');
                                            echo '</td>
                                            <td>';
                                            
                                                if(!$exam->payment_status){
                                                    echo '<a  class="btn btn-white btn-info btn-bold btn-sm" href="'.base_url('user/update-payment/'.$exam->registration_no).'"><i class="fa fa-credit-card"></i> Payment</a>';
                                                }
                                                else
                                                    echo label('Updated.','success label-white');
                                            
                                            echo '</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>

                        <?php
                    }
                    else{
                        echo alert('Exam not Available..','danger');
                    }

                    ?>
                </div>
            </div>
            
        </div>

    </div>


</div>

<script>
    	
let table = new DataTable('#myTable');
</script>