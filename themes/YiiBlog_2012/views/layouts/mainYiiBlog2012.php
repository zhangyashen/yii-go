<?php 
//variables test
// var_dump(Yii::app()->theme->baseUrl);
// echo '<hr/>';
// var_dump(Yii::app()->baseUrl);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free CSS Templates | by CssTemplatesMarket.com</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
});
</script>
<!-- Cufon START  -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/cufon-yui.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/GeosansLight_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.logo', { fontFamily: 'GeosansLight' });
Cufon.replace('h1', { fontFamily: 'GeosansLight' });
Cufon.replace('h2', { fontFamily: 'GeosansLight' });
</script>    
<!-- Cufon END  -->
</head>
<body>
<div id="main_container">

        
	<div class="header">

            <div class="logo"><a href="index.html">adaria</a></div>
            <div class="slogan">| free css template</div> 
        
			<div class="header_socials">
            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/rss.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/facebook.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/linkedin.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/twitter.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/flickr.png" alt="" title="" border="0" /></a>
            </div>

    </div> <!--end of header--> 
    
    <div class="menu">
        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="about.html" title="">Out Team</a></li>
            <li><a href="about.html" title="">Departments</a></li>
            <li><a href="about.html" title="">Locations</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="#">Services<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="" title="">Webdesign</a></li>
            <li><a href="" title="">Programming</a></li>
            <li><a href="" title="">Development</a></li>
            <li><a href="" title="">Coding</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Testimonials</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
         
         
<div id="slider1" class="sliderwrapper">
	<div class="slider_content">
		<div id="featured">
        <div id="fragment-1" class="ui-tabs-panel" style="">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/slider_pic1.jpg" alt="" title="" border="0" />
            <div class="info" >
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <div id="fragment-2" class="ui-tabs-panel" style="">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/slider_pic2.jpg" alt="" title="" border="0" />
            <div class="info" >
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <div id="fragment-3" class="ui-tabs-panel" style="">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/slider_pic3.jpg" alt="" title="" border="0" />
            <div class="info" >
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <div id="fragment-4" class="ui-tabs-panel" style="">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/slider_pic1.jpg" alt="" title="" border="0" />
            <div class="info" >
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <div id="fragment-5" class="ui-tabs-panel" style="">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/slider_pic3.jpg" alt="" title="" border="0" />
            <div class="info" >
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
		  <ul class="ui-tabs-nav">                    
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1">Web Design and  Web Development</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-2"><a href="#fragment-2">Keep development time and costs to a minimum</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-3"><a href="#fragment-3">Identity for online and print publishing</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-4"><a href="#fragment-4">Internet marketing and promotion</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-5"><a href="#fragment-5">Complete corporate identity packages</a></li>
	      </ul>
  
	   </div>

	</div>

</div>  <!--end of slider --> 

		<div class="center_content">
        	<div class="leftbox">
              <h2>Web Development</h2>
              <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/pic1.jpg" alt="" title="" border="0" />
              <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              </p>
              <a href="#" class="more">learn more</a>
        	</div>
            
        	<div class="leftbox">
              <h2>Corporate identity</h2>
              <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/pic2.jpg" alt="" title="" border="0" />
              <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              </p>
              <a href="#" class="more">learn more</a>
        	</div>
            
        	<div class="leftbox_right">
              <h2>Internet marketing</h2>
              <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/pic3.jpg" alt="" title="" border="0" />
              <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              </p>
              <a href="#" class="more">learn more</a>
        	</div>

        </div>
         
         
		<div class="center_content">
        
        	<div class="leftbox">
              <h2>From the Blog</h2>
				<div class="news_box">
                	<div class="date">12.05.2011</div>
                    <h3><a href="#">Lore ipsum doloer ametis</a></h3>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                </div>       
                      
        	</div>
        
        
        
        	<div class="leftbox">
              <h2>Testimonials</h2>
              <div class="testimonial">
                    <div class="testimonial_quotes">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">John doe - company name</a>
                    </div>
              </div>
        	</div>
            

            
        	<div class="leftbox_right">
              <h2>Get in touch</h2>
              
              <p>
              Lorem ipsum dolor sit amet, <a href="#">consectetur adipisicing</a> elit, <strong>sed do</strong> eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              
        	</div> 

        </div>  
         
        
        <div class="clear"></div>
        
<div class="footer">
    <div class="copyrights">
    Free CSS Template by <a href="http://csstemplatesmarket.com" target="_blank">Css templates market</a>
    </div>
    <div class="footer_right">
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Contact Us</a>
    </div>
    <div class="clear"></div>
</div>

</div> <!--end of main container-->
    
</body>
</html>