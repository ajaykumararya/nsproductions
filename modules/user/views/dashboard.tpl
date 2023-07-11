
<div class="alert alert-success">
    Welcome, {name}
</div>
<link href="https://115.160.244.10:8084/hitesh/typo3-projects/akf-bank/html/assets/css/akf-style.css">
<link href="https://115.160.244.10:8084/hitesh/typo3-projects/akf-bank/html/assets/css/akf-icons.css">
<div class="hero--row">
  <div class="hero--wrapper row">
    <h1>Select Type</h1>
      <p>subheader paragraph</p>
         <div id="hero--buttons">
            {main_category}
                <a href="<?=base_url()?>user/category/{key}" class="akf-button akf-button--primary akf-js-response large-button">
                	<i class="icon icon-right_small"></i>
                	<span class="button-lefticon">{title}</span>
                </a>
            {/main_category}
           
         </div>
  </div>
</div>



<style>
    
.hero--wrapper { 
  margin: 0 auto;
}

h1 {
  font-weight: 100;
  font-size: 48px;
  text-align: center;
  margin: 25px 0 0 0;
}

p {
  text-align: center;
}

#hero--buttons {
  margin: 0px auto; 
  text-align: center;
}



.akf-button {
	cursor: pointer;
	overflow: hidden;
	display: inline-block;
	position: relative;
	padding: .8666666667em 0 .8em;
	outline: 0;
	margin:10px;
	/*font-family: 'UniversNextPro-Medium';*/
	font-size: .9375rem;
	line-height: 1.5rem;
	text-align: center;
	text-decoration: none;
	white-space: normal;
	vertical-align: middle;
	transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	border-radius: .125rem;
	-webkit-border-radius: .125rem;
	-moz-border-radius: .125rem;
	-ms-border-radius: .125rem;
	-o-border-radius: .125rem;
}
.akf-button,
.akf-button.is-disabled,
.akf-button:disabled {
	color: #4a4a4a;
	stroke: #4a4a4a;
	fill: #4a4a4a;
	border: 1px solid transparent;
	background: 0 0
}
.akf-button--secondary,
.akf-button--secondary.is-disabled,
.akf-button--secondary:disabled {
	border-color: #4a4a4a;
}
.akf-button--secondary.hover,
.akf-button--secondary:hover { border-color: #878787; color: #878787; }
.akf-button--primary,
.akf-button--primary.is-disabled,
.akf-button--primary:disabled {
    border: none;
    background-color: #00245d;
}
.akf-button--primary:after {
	background: #2b6b95; left: 0; top: 0; width: 0px; height: 100%; position: absolute; content: '';
	transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
}
.akf-button--primary:hover:after { width: 100%; }
.akf-button--primary,
.akf-button--primary.is-active,
.akf-button--primary:active,
.akf-button--primary:hover,
.akf-button--primary:visited {
    color: #fff;
    stroke: #fff;
    fill: #fff;
    text-decoration:none;
}
.akf-button .button-lefticon { z-index: 1; position: relative; }
.akf-button.large-button { font-size: 22px; line-height: 28px; padding: 17px 50px 11px 50px; min-width: 220px; }
.akf-button.large-button .icon { font-size: 42px; width: 50px; position: absolute; left: 0; top: 4px; line-height: 52px; z-index: 1; height: 52px;}
.akf-button.akf-button--primary .ripple { background: rgba(255, 255, 255, 0.3); }
.ripple { width: 0; height: 0; border-radius: 50%; background: rgba(0, 0, 0, 0.1);
	transform: scale(0); position: absolute; opacity: 1; z-index: 1;
}
.rippleEffect {
    -webkit-animation: rippleDrop .6s linear; animation: rippleDrop .6s linear;
}
@keyframes rippleDrop {
	100% {
	  transform: scale(1);
	  opacity: 0;
	}
}

</style>

<script>
    $(".akf-button").click(function (e) {
  
  // Remove any old one
  $(".ripple").remove();

  // Setup
  var posX = $(this).offset().left,
      posY = $(this).offset().top,
      buttonWidth = $(this).width(),
      buttonHeight =  $(this).height();
  
  // Add the element
  $(this).prepend("<span class='ripple'></span>");

  
 // Make it round!
  if(buttonWidth >= buttonHeight) {
    buttonHeight = buttonWidth;
  } else {
    buttonWidth = buttonHeight; 
  }
  
  // Get the center of the element
  var x = e.pageX - posX - buttonWidth / 2;
  var y = e.pageY - posY - buttonHeight / 2;
  
 
  // Add the ripples CSS and start the animation
  $(".ripple").css({
    width: buttonWidth,
    height: buttonHeight,
    top: y + 'px',
    left: x + 'px'
  }).addClass("rippleEffect");
});

</script>