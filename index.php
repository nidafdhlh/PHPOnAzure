<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/gloryyyy.png">
<title>Event Organizer</title>
<meta name="keywords" content="free templates, website templates, CSS, HTML" />
<meta name="description" content="free website template provided by New York Lasik Surgery" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style>
a.one:link {color:#9c6421;}
a.one:visited {color:#9c6421;}
a.one:hover {color:#9c6421;}
</style>
<style type="text/css">
<!--
.style1 {color: #9c6421}
-->
</style>
</head>
<body>
<?php
    // DB connection info
    //TODO: Update the values for $host, $user, $pwd, and $db
    //using the values you retrieved earlier from the portal.
    $host = "ap-cdbr-azure-east-c.cloudapp.net";
    $user = "ba1f62141039cf";
    $pwd = "031ddad5";
    $db = "acsm_f00c678dd9b2056";

    // Connect to database.
    try {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(var_dump($e));
    } 
?>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
        <div id="site_title">
            <a href="#"><img src="images/gloryyyy.png" alt="logo" /></a>
        </div> <!-- end of site_title -->
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php" target="_parent">HOME</a></li>
                <li><a href="index.php?page=portofolio" target="_parent" >PORTOFOLIO</a></li>
              	<li><a href="index.php?page=services">SERVICE</a></li>
                <li><a href="index.php?page=about">ABOUT</a></li>
                <li class="last"><a href="index.php?page=contact">CONTACT US</a></li>
            </ul>    	
	    </div> <!-- end of templatemo_menu -->
    
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	
        <div id="templatemo_content">
        <?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'portofolio' : include "portofolio.php"; break;
	case 'services' : include "services.php"; break;
	case 'about' : include "about.php"; break;
	case 'contact' : include "contact.php"; break;
	case 'birthday' : include "bp.php"; break;
	case 'campaign' : include "ce.php"; break;
	case 'anniversary' : include "ea.php"; break;
	case 'launching' : include "epl.php"; break;
	case 'gathering' : include "ge.php"; break;
	case 'music' : include "me.php"; break;
	case 'regular' : include "re.php"; break;
	case 'wedding' : include "wo.php"; break;
	case 'equipment' : include "equipment.php"; break;
	case 'furniture' : include "furniture.php"; break;
	case 'catering' : include "catering.php"; break;
	case 'audio' : include "audio.php"; break;
	case 'konfirmasi' : include "form.php"; break;
	case 'save' : include "save.php"; break;
	case 'klien' : include "formklien.php"; break;
	case 'jenis' : include "jenis.php"; break;
	case 'saveklien' : include "saveklien.php"; break;
	case 'barabati' : include "portofolio/birthday party/barabati.php"; break;
	case 'nasya' : include "portofolio/birthday party/nasya.php"; break;
	case 'kayleigh' : include "portofolio/birthday party/kayleigh.php"; break;
	case 'bandung' : include "portofolio/campaign event/bandung.php"; break;
	case 'tangsel' : include "portofolio/campaign event/tangsel.php"; break;
	case 'geo' : include "portofolio/event anniversary/geo.php"; break;
	case 'gizi' : include "portofolio/event anniversary/gizi.php"; break;
	case 'toys' : include "portofolio/event product launching/toys.php"; break;
	case 'premium' : include "portofolio/event product launching/premium.php"; break;
	case 'chocolate' : include "portofolio/event product launching/chocolate.php"; break;
	case 'bri' : include "portofolio/gathering event/bri.php"; break;
	case 'jfx' : include "portofolio/gathering event/jfx.php"; break;
	case 'samsung' : include "portofolio/gathering event/samsung.php"; break;
	case 'zotac' : include "portofolio/gathering event/zotac.php"; break;
	case 'zone' : include "portofolio/music event/zone.php"; break;
	case 'indie' : include "portofolio/music event/indie.php"; break;
	case 'ui' : include "portofolio/regular event/ui.php"; break;
	case 'pensi' : include "portofolio/regular event/pensi.php"; break;
	case 'dicky' : include "portofolio/wedding organizer/dicky.php"; break;
	case 'irvan' : include "portofolio/wedding organizer/irvan.php"; break;
	case 'sean' : include "portofolio/wedding organizer/sean.php"; break;
	case 'main' :
	default : include 'home.php';
}
?>
        </div> <!-- end of content -->
        
        <div id="templatemo_sidebar">
        	<div class="sidebar_box_woframe">
                 <!--<div align="right" id="google_translate_element"></div><script>
					function googleTranslateElementInit() {
					new google.translate.TranslateElement({
					pageLanguage: 'en'
					}, 'google_translate_element');
					}
					</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
            </div>
            
        	<div class="sidebar_box_woframe">
        	    <a href="http://mail.google.com/" class="icon_link"><img src="images/Mail-icon.png" alt="contact" title="Email"></a>
                <a href="http://www.facebook.com/nida.fadhilah2" class="icon_link"><img src="images/facebook-icon.png" alt="contact" title="Facebook" /></a>
                <a href="http://twitter.com/nidafdhlh" class="icon_link"><img src="images/twitter-icon.png" alt="contact" title="Twitter" /></a>
                <div class="cleaner"></div>
			</div>
            
			<div class="sidebar_box"><div class="sidebar_box_top"></div>
            	<div class="sidebar_box_content">
                   
                 <p><ul id="cool_link_list">  
                 	<li><a href="index.php?page=equipment">Event Equipment</a></li>
                   	<li><a href="index.php?page=furniture">Event Furniture</a></li>
                   	<li><a href="index.php?page=catering">Catering Equipment</a></li>
                   	<li><a href="index.php?page=audio">Audio Visual</a></li>
                 </ul></p>
                   
                    <div class="cleaner"></div>
                </div>
            	<div class="sidebar_box_bottom"></div>                    
            </div>            
            <div class="cleaner"></div>
            
            <div class="sidebar_box"><div class="sidebar_box_top"></div>
            	
                <div class="sidebar_box_content">
                    <h3>FORM</h3>
                    <ul id="popular_post_box">
                        <li>
                            <span class="title"><a href="index.php?page=konfirmasi">CONFIRMATION FORM </a></span>
                      	</li>
                        <li>
                            <span class="title"><a href="index.php?page=jenis">REGISTRATION FORM </a></span>
                      	</li>
                    </ul>
                </div>
                
                <div class="cleaner"></div>
			<div class="sidebar_box_bottom"></div>                    
            </div>
            
        </div> <!-- end of sidebar -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    
     <div id="templatemo_footer">
     	<div class="aboutus">
        	<h5>About US</h5>
        	<p>
            	Glory Organizer is a professional team the moves in the field of service Event Organizer in Bogor and Indonesia. We assist in planning an event that's amazing</p>
            <a href="index.php?page=about" class="simplebtn">Continue Reading ....</a>
          </p>
          <p>Copyright by Nida Fadhilah</p>
        </div>
        
        <div class="sponsor">
       	  <h5>Sponsor</h5>
        		<div id="cool_link_list">
                	<a href="http://www.bri.co.id"><img class="img4" src="images/Event Organizer/Sponsor/bri.jpg" id="cool_link_list" title="BRI" /></a>
                    <a href="http://www.olympicfurniture.id"><img class="img4" src="images/Event Organizer/Sponsor/olympic.jpg" id="cool_link_list" title="Olympic" /></a>
                	<a href="http://www.premiercatering.com"><img class="img4" src="images/Event Organizer/Sponsor/catering.jpg" id="cool_link_list" title="Premier Catering" /></a>
                	<a href="http://www.indosat.com"><img class="img4" src="images/Event Organizer/Sponsor/indosat.jpg" id="cool_link_list" title="Indosat" /></a>
               		<a href="http://www.infocus.com"><img class="img4" src="images/Event Organizer/Sponsor/infocus.jpg" id="cool_link_list" title="Infocus" /></a>
                    <a href="http://www.wardahbeauty.com"><img class="img4" src="images/Event Organizer/Sponsor/wardah.jpg" id="cool_link_list"  title="Wardah Beauty" /></a>
                	<a href="http://www.anneavantie.net"><img class="img4" src="images/Event Organizer/Sponsor/anne avantie.jpg" id="cool_link_list" title="Anne Avantie" /></a>
                    <a href="http://www.yamaha-motor.co.id"><img class="img4" src="images/Event Organizer/Sponsor/yamaha.jpg" id="cool_link_list" title="Yamaha" /></a>
                    <a href="http://www.polytron.co.id"><img class="img4" src="images/Event Organizer/Sponsor/polytron.jpg" id="cool_link_list"  title="Polytron" /></a>
            </div>

       </div>

        <p>&nbsp;</p>
  </div> 
	<!-- end of templatemo_footer -->
    
</div> <!-- end of warpper -->

</body>
</html>
