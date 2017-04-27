<?php
       include_once('php/allFunctions.php');
        ob_start();
        session_start();
           
      
     $catresult = getCategory();

     
      

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SWOTTA - A Community News Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />


</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo12.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Subscribe</a></li>
         <?php 
          if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];

                if(isset($_SESSION['admin'])){
                  print('<li><a href="admin.php">Admin</a></li>');
                }
                 
                  print('<li><a href="logout.php">Logout</a></li>');
                 
              }

               else { 
                print('<li><a href="login.php">Login</a></li>');
             }

        ?>
           
          
           
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>

    <!-- Start Menu Area -->
     <div class="main_menu_area">
                <ul id="nav">
    <?php 
             while ($cat=mysqli_fetch_assoc($catresult)) {

                  printf('<li><a href="#">%s</a> 

                    <ul> ',$cat['name']);

                  $scatresult = getSubCategory($cat['id']);

                  while($scat=mysqli_fetch_assoc($scatresult)){
                      
                        printf('<li><a href="newsdetails.php?cname=%s&scname=%s&id=%s&cat=%s">%s</a></li>',$cat['name'],$scat['name'],$scat['id'],$cat['id'], $scat['name']);
                    }
                      print('</ul>
                  </li>');
             }                     
        ?>
      </ul>
    </div>

<!--End of menu area-->


    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="images/1.jpg" alt="" title="Slider caption text" /></li>
          <li><img src="images/2.jpg" alt="" title="Slider caption text" /></li>
          <li><img src="images/3.jpg" alt="" title="Slider caption text" /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">from   around   the   world</h2>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft"> <img src="images/Lal_kach_festival.png" alt="" />
              <h3>Lal Kach festival in Bangladesh</h3>
              <p>During the Hindu Lal Kach festival in Dhaka, men and boys cover themselves in body paint and take part in processions through their local neighbourhoods wielding swords to ward off evil and welcome the Bengali new year 1424.</p>
              <a class="readmore" href="#">read more</a> </div>
            <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
              <h3>Bangladesh reproached over inquiry into torture and murder of activist</h3>
              <p>A scathing report has accused the Bangladeshi authorities of “washing their hands” of any responsibility to find the people who tortured and murdered a prominent union activist..</p>
              <a class="readmore" href="#">read more</a> </div>
            <div class="single_left_coloum floatleft"> <img src="images/Global_devolopment.png" alt="" />
              <h3>Global Development</h3>
              <p>Bangladesh is already one of the most climate vulnerable nations in the world, and global warming will bring more floods, stronger cyclones. At the dry fish yards, close to the airport at the coastal town of Cox’s Bazar, women are busy sorting fish to dry in the sun. They say the process, which begins in October, can continue through to February or March if the weather is good.</p>
              <a class="readmore" href="#">read more</a> </div>
          </div>
          <div class="single_left_coloum_wrapper">
            <h2 class="title">latest  articles</h2>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft"> <img src="images/Bangladesi_london.png" alt="" />
              <h3>Bangladeshi London</h3>
              <p>The Bangladeshi community is thriving in the capital with third generation Bangladeshis on their way to establishing themselves in the mainstream of London commerce and politics.</p>
              <a class="readmore" href="#">read more</a> </div>
            <div class="single_left_coloum floatleft"> <img src="images/Bangladesh_war.png" alt="" />
              <h3>Bangladesh War</h3>
              <p>On 13 June 1971, an article in the UK's Sunday Times exposed the brutality of Pakistan's suppression of the Bangladeshi uprising. It forced the reporter's family into hiding and changed history.</p>
              <a class="readmore" href="#">read more</a> </div>
            <div class="single_left_coloum floatleft"> <img src="images/bangladesh_map.png" alt="" />
              <h3>Bangladesh country profile</h3>
              <p>Bangladesh is one of the world's most densely populated countries, with its people crammed into a delta of rivers that empties into the Bay of Bengal.</p>
              <a class="readmore" href="#">read more</a> </div>
          </div>
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            <a class="more" href="#">more</a> <img src="images/cricket.png" alt="" /> <img src="images/Rampal.png" alt="" /> <img src="images/bangladesh_newspaper.png" alt="" /> <img src="images/image1.png" alt="" /> <img src="images/image_2.png" alt="" /> <img src="images/bangladesh2.png" alt="" /> </div>
          <div class="single_left_coloum_wrapper single_cat_left">
            <h2 class="title">tech news</h2>
            <a class="more" href="#">more</a>
            <div class="single_cat_left_content floatleft">
              <h3>Facebook's purge disables hundreds of authentic Bangladeshi users profile </h3>
              <p>Facebook has waged an uphill war against fake news for the last couple of months now. And couple days back, it announced it’s newest crusade: Fake accounts. In an announcement made by Facebook this Friday, the social media giant informed that it has launched a massive operation against a substantial number of accounts that it believes to be fake.</p>
              <p class="single_cat_left_content_meta">by <span>Shahriar Rahman</span> |  TECH SPOTLIGHT</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>Samsung announces pre-order of Galaxy S8 and S8+ in Bangladesh </h3>
              <p>Samsung unboxed the Galaxy S8 and S8+ in the Bangladesh Market. Preorders began on April 12 with exclusive bundle offer from Grameenphone. Customers can pre-book by visiting www.preorders8.com or www.grameenphone.com or  from any Samsung store or Grameenphone center. In Bangladesh, the Galaxy S8 will be available in Midnight Black and Maple Gold. </p>
              <p class="single_cat_left_content_meta">by <span>Grameenphone and Rob</span> |  TECH HAPPENING</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>Dhaka 2nd among top cities with active Facebook users </h3>
              <p>Dhaka has been ranked second among the top cities across the world having active Facebook users, according to a recent study.

Social media research organisations -- We Are Social and Hootsuite jointly conducted the study and revealed the information where Bangkok is the top city.</p>
              <p class="single_cat_left_content_meta">by <span>Star Online Report</span> |  Bangkok top city, US top country</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>The iPhone of cars? Apple enters self-driving car race</h3>
              <p>Ending years of speculation, Apple’s late entry into a crowded field was made official Friday with the disclosure that the California Department of Motor Vehicles had awarded a permit for the company to start testing its self-driving car technology on public roads in the state.
The permit covers three vehicles — all 2015 Lexus RX 450h hybrid SUVs — and six individual drivers. California law requires people to be in a self-driving car who can take control if something goes wrong.</p>
              <p class="single_cat_left_content_meta">by <span>AP, San Francisco</span> |  29 comments</p>
            </div>
          </div>
        </div>
        <div class="right_coloum floatright">
          <div class="single_right_coloum">
            <h2 class="title">from the desk</h2>
            <ul>
              <li>
                <div class="single_cat_right_content">
                  <h3>President: Abdul Hamid</h3>
                  <p>Abdul Hamid, formerly the Speaker of parliament, was elected unopposed to the ceremonial post in 2013.</p>
                  <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                </div>
              </li>
              <li>
                <div class="single_cat_right_content">
                  <h3>Prime minister: Sheikh Hasina</h3>
                  <p>Sheikh Hasina started a third term as prime minister in January 2014 after her Awami League won elections boycotted by the opposition amid an ongoing political crisis. Politics has long been dominated by bitter rivalry between two women: Sheikh Hasina and Khaleda Zia of the Bangladesh Nationalist Party.</p>
                  <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                </div>
              </li>
              <li>
                <div class="single_cat_right_content">
                  <h3>Dhaka celebrates Bengali new year</h3>
                  <p>Bangladesh's capital enjoyed its colourful end-of-year festival amid high security.</p>
                  <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                </div>
              </li>
            </ul>
            <a class="popular_more" href="#">more</a> </div>
          <div class="single_right_coloum">
            <h2 class="title">editorial</h2>
            <div class="single_cat_right_content editorial"> <img src="images/Bengali new year.png" alt="" />
              <h3>Dhaka celebrates Bengali new year</h3>
            </div>
            <div class="single_cat_right_content editorial"> <img src="images/envoy_attack.png" alt="" />
              <h3>Bangladesh executes Islamist for 2004 British envoy attack</h3>
            </div>
            <div class="single_cat_right_content editorial"> <img src="images/militans.png" alt="" />
              <h3>Is Bangladesh winning the war against militants?</h3>
            </div>
            <div class="single_cat_right_content editorial"> <img src="images/_95397241_migrantworkers.png" alt="" />
              <h3>Greece farm shooting: Migrants win damages from state</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
        <div class="single_sidebar">
          <div class="news-letter">
            <h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="#" method="post">
              <input type="text" value="Name" id="name" />
              <input type="text" value="Email Address" id="email" />
              <input type="submit" value="SUBMIT" id="form-submit" />
            </form>
            <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
          </div>
        </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Popular</h2>
            <ul>
              <li>
                <div class="single_popular">
                  <p>1st April 2017</p>
                  <h3>Greece farm shooting: Migrants win damages from state <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>6th April 2017</p>
                  <h3>Sylhet blasts kill six amid Bangladesh militant raid <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>11 April 2017</p>
                  <h3>The medics using drainpipes to help amputees <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>13th April 2017</p>
                  <h3>Males in rural Bangladeshi communities are more susceptible to chronic arsenic poisoning than females: analyses based on urinary arsenic. <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>16th April 2017</p>
                  <h3>Bangladeshi Immigrants in New York City: A Community Based Health Needs Assessment of a Hard to Reach Population <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
            </ul>
            <a class="popular_more">more</a> </div>
        </div>
        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
        <div class="single_sidebar">
          <h2 class="title">ADD</h2>
          <img src="images/add2.png" alt="" /> </div>
      </div>
    </div>
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add3.png" alt="" /> </div>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="#">world news</a></li>
          <li><a href="#">Blogs</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Technology</a></li>
          <li><a href="#">Political</a></li>
          <li><a href="#">Study</a></li>
          <li><a href="#">Entertainment</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Life&style</a></li>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2017. All rights reserved </p>
        <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>