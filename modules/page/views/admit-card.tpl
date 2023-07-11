<!doctype html>
<html lang="en">
  <head>  
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>{title} Admit Card</title>
    <!--link href="<?=base_url('admit-card.css')?>"-->
    <style>
        .admit-card img{
            width:100%;
            position:relative;
            height:100%;
        }
        .p-a{
            position:absolute;
        }
        .b{
            border:1px solid red;
        }
        .admit-card .inner-details{
            position:absolute;
            z-index:2222;
            top:0;
            left:0;
            height:100%;
        }
        .header-de{
            top:11.4%;
            left:21%;
            width:200px;
        }
        .header-de .right-box{
            top:-20px;
            height:10px;
            width:600px;
            left:110%;
        }
        .header-de .right-box b{
            width:200px;
        }
        .exam-name{
            top:10px;
        }
        .content{
            padding-top:200px;
            padding-left:80px;
            width:100%;
            position:relative;
        }
        .content table{
            width:100%;
        }
        .user-img {
            position:absolute;
            left:120%!important;
            height:100px!important;
            width:100px!important;
        }
        .content .first-box{
           width:400px; 
        }
        .content .last-box{
           width:100px; 
           position:absolute;
           left:90%;
           top:27%;
        }
    </style>
  </head>
  <body>
    
    <section>
    	<div class="container">
    		<div class="admit-card">
    			  {back_img}
    			  
    			  
    			  <div class="inner-details p-a" style="position:absolute;">
    			      <div class="header-de p-a ">
    			          <b class="exam-name p-a">{title}</b>
    			          <div class="right-box p-a">
    			              <!--b>Center : {center_name}, {center_address}</b>
    			              <b>Date : {date}</b>
    			              <b>Time : {time}</b--->
    			          </div>
    			      </div>
    			      <div class="content ">
    			          <div class="first-box">
    			              <table class="table table-bordered table-striped">
    			                  <thead>
    			                      <tr>
    			                          <th colspan="2" width="100">Exam :</th><td colspan="2">{title}</td>
    			                      </tr>
    			                      <tr>
    			                          <th colspan="2" width="100">Registration No. :</th><td colspan="2">{registration_no}</td>
    			                      </tr>
    			                      <tr>
    			                          <th colspan="2"> Roll No. :</th><td colspan="2">{roll_no}</td>
    			                      </tr>
    			                      <tr>
    			                          <th colspan="2">Name :</th><td colspan="2">{name}</td>
    			                          
    			                      </tr>
    			                      <tr>
    			                          <th colspan="2">Father Name :</th><td colspan="2">{father_name}</td>
    			                      </tr>
    			                      <tr>
    			                          <th colspan="2">Date of birth :</th><td colspan="2">{dob}</td>
    			                      </tr>
    			                      
    			                      <!--tr>
    			                          <th colspan="2">Address : </th><td colspan="2">{address}</td>
    			                      </tr-->
    			                      <tr>
    			                          <th colspan="2" width="100">Examination Center :</th><td colspan="2">{center_name}, {center_address}</td>
    			                      </tr>
    			                      <tr>
    			                          <th width="60">Exam Date</th><td  width="60">{date}</td>
    			                          <th >Exam Time</th><td  width="60">{time}</td>
    			                      </tr>
    			                  </thead>
    			              </table>
    			              <!--b>Name : {name}</b><br>
    			              <b>Father Name : {father_name}</b><br>
    			              <b>Date of Birth : {dob}</b><br>
    			              <b>Address : {address}</b><br-->
    			          </div>
    			          <div class="last-box p-a">
    			          {user_img}
    			          </div>
    			      </div>
    			  </div>
    		</div>
    	</div>
    	
    </section>
</body>
</html>