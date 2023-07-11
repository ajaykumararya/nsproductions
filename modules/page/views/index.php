<style>
    .tool-link:hover{
        text-decoration:none;
    }
    .tool-box:hover{
        background:rgba(0,0,0,.8);
    }
</style>
    <!--  tool start  -->
    <section class="tool pt-5">
        <div class="container">
            
            <?php
            $tools = $this->db->get('tools');
            if($tools->num_rows()){
            ?>
            <div class="tool-heading text-center">
                <h3>Rankers Result Tools</h3>
            </div>

            <div class="row pt-5">
                <?php
                foreach($tools->result() as $toolRow){
                ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pr-lg-0 mb-2">
                    <a href="<?=$toolRow->link?>" target="_blank" class="tool-link">
                    <div class="tool-box" style="background-color: <?=$toolRow->color?>;color:<?=$toolRow->text_color?>">
                        <h5><?=$toolRow->title?></h5>
                    </div>
                    </a>
                </div>
                <?php
                }
                ?>
                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 px-lg-1 mb-2">-->
                <!--    <div class="tool-box" style="background-color: #0404B4;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 px-lg-0 mb-2">-->
                <!--    <div class="tool-box" style="background-color:#FF00BF;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pl-lg-1 mb-2">-->
                <!--    <div class="tool-box" style="background-color: #8C0101;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pr-lg-0 mb-2">-->
                <!--    <div class="tool-box" style="background-color: #868a08;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 px-lg-1 mb-2">-->
                <!--    <div class="tool-box" style="background-color: #0404B4;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 px-lg-0 mb-2">-->
                <!--    <div class="tool-box" style="background-color:#FF00BF;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pl-lg-1 mb-2">-->
                <!--    <div class="tool-box" style="background-color: #8C0101;">-->
                <!--        <h5>EPFO SSA, Steno Apply Online</h5>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <?php
            }
            ?>
            
        </div>
    </section>
    <!--  tool start  -->


    <!--  grid start  -->
    <section class="grid py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-2">
                    <div class="grid-box">
                        <div class="grid-heading text-center">
                            <h3 class="text-center">Result</h3>
                        </div>
                        <div class="grid-content-link">
                            <ul class="nav flex-column">
                                <?php
                                if($marksheets->num_rows()){
                                    foreach($marksheets->result() as $marksheet){
                                        echo '<li class="nav-item">
                                                <a class="nav-link" href="'.base_url('user/marksheet/'.$marksheet->id).'">'.$marksheet->title.'</a>
                                              </li>';
                                    }
                                }
                                
                                ?>
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">KVS TGT, PGT Result with Cutoff 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">UPSC CDS II 2022 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">UPSC NDA II 2022 Final Result with Marks</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">MPESB Group 2 Sub Group 3 Result 2023</a>-->
                            <!--    </li>-->

                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">KVS Class 1 Admissions Lottery Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">Bihar B.Ed 2 Year Entrance Exam Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">BTEUP Semester Exam Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">SBI PO 2022 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">MP High School TET Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">RSMSSB Forester 2020 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">RPSC School Lecturer PGT Sanskrit Education Result-->
                            <!--            2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">BSF Head Constable RO/RM Final Result 2023-->
                            <!--            India Post GD</a>-->
                            <!--    </li>-->
                            </ul>
                            <!--<h5 class="text-right">View More</h5>-->
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-2">
                    <div class="grid-box">
                        <div class="grid-heading text-center">
                            <h3 class="text-center">Admit Card</h3>
                        </div>
                        <div class="grid-content-link">
                            
                            <ul class="nav flex-column">
                                <?php
                                if($admit_cards->num_rows()){
                                    foreach($admit_cards->result() as $admitRow){
                                        echo '<li class="nav-item">
                                                <a class="nav-link" href="'.base_url('user/admit_card/'.$admitRow->id).'">'.$admitRow->title.'</a>
                                              </li>';
                                    }
                                }
                                
                                ?>
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">KVS TGT, PGT Result with Cutoff 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">UPSC CDS II 2022 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">UPSC NDA II 2022 Final Result with Marks</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">MPESB Group 2 Sub Group 3 Result 2023</a>-->
                            <!--    </li>-->

                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">KVS Class 1 Admissions Lottery Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">Bihar B.Ed 2 Year Entrance Exam Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">BTEUP Semester Exam Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">SBI PO 2022 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">MP High School TET Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">RSMSSB Forester 2020 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">RPSC School Lecturer PGT Sanskrit Education Result-->
                            <!--            2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">BSF Head Constable RO/RM Final Result 2023-->
                            <!--            India Post GD</a>-->
                            <!--    </li>-->
                            </ul>
                            <!--<h5 class="text-right">View More</h5>-->
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-2 exam-box">
                    <div class="grid-box">
                        <div class="grid-heading text-center">
                            <h3 class="text-center">Exam Forms</h3>
                        </div>
                        <div class="grid-content-link">
                            <ul class="nav flex-column">
                            <?php
                            if($latest_forms->num_rows()){
                                foreach($latest_forms->result() as $formRow){
                                    echo '<li class="nav-item" data-form_id="'.$formRow->id.'">
                                            <a class="nav-link" href="javascript:;">'.$formRow->title.'</a>
                                          </li>';
                                }
                            }
                            
                            ?>
                            </ul>
                            <!--<ul class="nav flex-column">-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">KVS TGT, PGT Result with Cutoff 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">UPSC CDS II 2022 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">UPSC NDA II 2022 Final Result with Marks</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">MPESB Group 2 Sub Group 3 Result 2023</a>-->
                            <!--    </li>-->

                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">KVS Class 1 Admissions Lottery Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">Bihar B.Ed 2 Year Entrance Exam Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">BTEUP Semester Exam Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">SBI PO 2022 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">MP High School TET Result 2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">RSMSSB Forester 2020 Final Result</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">RPSC School Lecturer PGT Sanskrit Education Result-->
                            <!--            2023</a>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link" href="#">BSF Head Constable RO/RM Final Result 2023-->
                            <!--            India Post GD</a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                            <!--<h5 class="text-right">View More</h5>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grid end   -->

