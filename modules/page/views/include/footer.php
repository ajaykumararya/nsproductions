
    <!--  footer start  -->
    <section class="footer">
        <div class="container footer-css">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="footer-box">
                        <div class="footer-text">
                            <h4>Important Links</h4>
                        </div>
                        <div class="footer-text-link">
                            <ul class="nav flex-column">
                                <?php
                                include 'important_links.php';
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="footer-box">
                        <div class="footer-text">
                            <h4>Policies</h4>
                        </div>

                        <div class="footer-text-link">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?=base_url('page/terms-condition')?>"><i class="fa fa-gavel"></i> Terms & Condition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('page/privacy-policy')?>"> <i class="fa fa-shield"></i> Privacy Policy</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('page/refund-and-cancelation')?>"> <i class="fa fa-undo"></i> Refund & Cancelation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="footer-box">
                        <div class="footer-text">
                            <h4>Contact</h4>
                        </div>

                        <div class="footer-text-link">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Near Ladnu Puliya, Kuchaman Bypass Road, Didwana ( Pincode-341303)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mailto:rankerstesthub@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> rankerstesthub@gmail.com</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tel:9983391818"><i class="fa fa-phone" aria-hidden="true"></i> 9983391818</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tel:7665391818"><i class="fa fa-phone" aria-hidden="true"></i> 7665391818</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-line container"></div>
    </section>
    <!--footer end-->

<a target="_blank" href="https://wa.me/8619391818" id="whatsapp-icon"></a>
<style>
    #whatsapp-icon {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-image: url('back/whatsapplogo.png');
      width: 50px;
      height: 50px;
      background-size:100%;
      cursor: pointer;
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- bootstrap 4 cdn javascript -->
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"-->
    <!--    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"-->
    <!--    crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        
        <script src="<?=base_url('back/main.js')?>"></script>
</body>

</html>