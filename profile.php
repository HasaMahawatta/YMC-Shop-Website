<!DOCTYPE html>
<html lang="en">
<head>
<title>YCM Computer Shop</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
</head>
<body id="page1">
<div class="body3"></div>
<div class="body1">
  <div class="main">
    <header>
      <div id="logo_box">
        <h1><a href="#" id="logo">YCM Computer Shop</a></h1>
      </div>
      <nav>
        <ul id="menu">
          <li id="menu_active"><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="projects.html">Accessories</a></li>
          <li><a href="loginpage.php">
		  
		   <?php 
		session_start();
		
		if(isset($_SESSION['username'])){
		
		echo $_SESSION['username'] ;
		
		}
	if (isset($_GET['logout'])) {
		
		$_SESSION['username']="";
		unset ($_SESSION['username']);
		header("location: index.php");
	
	}
	
	if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
		
		echo "Login";
		
		}
	
			
?>
		  
		  </a></li>
          <li class="bg_none"><a href="index.php?logout='1'">Logout</a></li>
		  
        </ul>
      </nav>
      <div class="wrapper">
        <div class="text1">Your Business Needs Fresh Ideas?</div>
        <div class="text2">We work for your Profit</div>
        <ul id="icons">
          <li><span>Follow Us!</span></li>
          <li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>
        </ul>
      </div>
    </header>
  </div>
</div>
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="marg_top wrapper">
        <article class="col1">
          <div class="box1_out">
            <div class="box1">
              <h2>Computer Systems</h2>
              <p class="pad_bot1"><br>Desktop Computer</br>
<br>Laptops/Notebook</br>
<br>All-in-Computer</br>
<br>Gaming Laptops</br>
<br>Gaming Desktops</br>
<br>2-in- 1 Laptops</br>
<br>Chromebooks</br>
 </p>
              <a href="#" class="button"><span><span>Read More</span></span></a> <img class="myimg" src="images/hp5.JPG" class="img" alt=""> </div>
          </div>
          <div class="box1_bot">
            <div class="box1_bot_left">
              <div class="box1_bot_right"></div>
            </div>
          </div>
        </article>
        <article class="col1 pad_left1">
          <div class="box1_out">
            <div class="box1">
              <h2>Components</h2>
              <p class="pad_bot1"> <br>CPU/Processors</br>
                <br>Memory</br>
                <br>Motherboards</br>
                <br>VIDEO cards&VIDEO devices</br>
                <br>Computer Cases</br>
                <br>Powers Supplies</br>
                <br>Hard Drives</br></p>
              <a href="#" class="button"><span><span>Read More</span></span></a> <img src="images/img2.png" class="img" alt=""> </div>
          </div>
          <div class="box1_bot">
            <div class="box1_bot_left">
              <div class="box1_bot_right"></div>
            </div>
          </div>
        </article>
        <article class="col1 pad_left1">
          <div class="box1_out">
            <div class="box1">
              <h2>Software&Services</h2>
              <p class="pad_bot1"> <br>Operating System</br>
              <br>Office & Accounting</br>
              <br>Antivirus & Internet Security</br>
              <br>Audio & Video</br>
              <br>Licenses</br>
              <br>Games</br>
              <br>Downloadable Software</br>
           </p>
              <a href="#" class="button"><span><span>Read More</span></span></a> <img src="images/img3.png" class="img" alt=""> </div>
          </div>
          <div class="box1_bot">
            <div class="box1_bot_left">
              <div class="box1_bot_right"></div>
            </div>
          </div>
        </article>
      </div>
      <div class="wrapper marg_top2">
        <article class="col1">
          <div class="box2">
            <div class="pad">
              <h2>Derect Contact</h2>
              <div class="wrapper pad_bot1">
                <figure><img src="images/images2222.png" alt="" class="left marg_right1"></figure>
                <span class="color1"><b><u>Sell Manager</u></b></span><br>
               Mr.Devin.<a href="#">Call</a> </div>
              <div class="wrapper pad_bot1">
                <figure><img src="images/download (1).jpg" alt="" class="left marg_right1"></figure>
                <span class="color1"><u><b>Branch Manager</u></b></span><br>
               Mr.Chathura<a href="#">Call</a> </div>
              <div class="wrapper pad_bot1">
                <figure><img src="images/download.jpg" alt="" class="left marg_right1"></figure>
                <span class="color1"><u><b>Delevery Section</b></u></span><br>
               Mr.Romesh <a href="#">Call</a> </div>
            </div>
          </div>
        </article>
        <article class="col2 pad_left1">
          <div class="pad">
            <h2>
            දැන් විශේෂ අවස්ථාවක්</h2>
            <p><strong>Eusus consequam</strong> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
            <p class="under">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros maurien ulla facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem.</p>
            <div class="wrapper">
              <ul class="list1 cols">
                <li><a href="#">At vero eos etaccusamus iusto</a></li>
                <li><a href="#">Odio dignissmos ducimus blanditiis</a></li>
                <li><a href="#">Praesentum voluptum deleniti</a></li>
              </ul>
              <ul class="list1 cols pad_left1">
                <li><a href="#">Molestias exceutpturi sint occaecati</a></li>
                <li><a href="#">Cupiditate nogn proghvident, similique</a></li>
                <li><a href="#">Sunt in culpa qui offiutrucia deserunt</a></li>
              </ul>
            </div>
          </div>
        </article>
      </div>
    </section>
  </div>
</div>
<div class="main">
  <footer>
    <div class="wrapper">
      <article class="col1">
        <div class="pad">
          <u><br>
           <img class="myimg" src="images/leno2.PNG" class="img" alt="">  </br>
          </ul>
        </div>
      </article>
      <article class="col2 pad_left1">
        <div class="pad">
          <div class="wrapper">
            <article class="cols">
              <h2>Newsletter</h2>
              <form id="form_1" action="#" method="post">
                <div>
                  <div class="bg">
                    <input class="input" type="text" value="Enter email here" onBlur="if(this.value=='') this.value='Enter email here'" onFocus="if(this.value =='Enter email here' ) this.value=''" />
                  </div>
                  <a href="#" class="submit"><span><span>Submit</span></span></a> <a href="#">Unsubscribe</a> </div>
              </form>
            </article>
            <article class="cols pad_left1">
              <h2>Customer Log In</h2>
              <form id="form_2" action="#" method="post">
                <div>
                  <div class="bg left">
                    <input class="input input1" type="text" value="Enter user ID here"	onblur="if(this.value=='') this.value='Enter user ID here'" onFocus="if(this.value =='Enter user ID here' ) this.value=''" />
                  </div>
                  <div class="bg right">
                    <input class="input input2" type="password" value="••••••••••" onBlur="if(this.value=='') this.value='••••••••••'" onFocus="if(this.value =='••••••••••' ) this.value=''"	 />
                  </div>
                  <a href="#" class="submit"><span><span>login</span></span></a> <a href="#">Forgot password?</a> &nbsp; <a href="#">Sign up</a> </div>
              </form>
            </article>
          </div>
        </div>
      </article>
    </div>
    <div class="under2"></div>
    <div class="footerlink">
      <p class="lf">Copyright; 2014 <a href="#">YCM Computer Shop</a> - All Rights Reserved</p>
      <div style="clear:both;"></div>
    </div>
  </footer>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>