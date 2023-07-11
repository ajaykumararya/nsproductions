<li class="nav-item active">
    <a class="nav-link" href="<?=base_url()?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
</li>
 <?php
if($this->session->has_userdata('user_login')){
    ?>
  <li class="nav-item">
        <a class="nav-link" target="_blank" href="<?=base_url('user')?>"><i class="fa fa-tachometer" aria-hidden="true"></i> User Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('user/logout')?>"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
    </li>  
    <?php
    
}
else{
?>
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user')?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user/register')?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
</li>
<?php
}
?>
<li class="nav-item">
    <a class="nav-link" href="<?=base_url()?>"><i class="fa fa-newspaper" aria-hidden="true"></i> Exam Form(s)</a>
</li>
<!--<li class="nav-item">-->
<!--    <a class="nav-link" href="#"></a>-->
<!--</li>-->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('page/about-us')?>"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('page/contact-us')?>"><i class="fa fa-address-book" aria-hidden="true"></i> Contact Us</a>
</li>