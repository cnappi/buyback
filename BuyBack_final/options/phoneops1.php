<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
		<title>Sell iPhone</title>
        <link href="../images/Buyback-Boss-Logo.jpg" rel="shortcut icon" type="image/x-icon" />
		<link href="../content/BBB_phoneops1.css" rel="stylesheet"/>
        <link href="../content/BBB_header.css" rel="stylesheet"/>

        <script src="../scripts/jquery-2.1.3.js" type="text/javascript"></script>
		<script src="../scripts/bootstrap.js" type="text/javascript"></script>
		<script src="../scripts/main.js" type="text/javascript"></script>
	</head>
   
   <body>
   <header>
            <div class="content-wrapper">
                <div>
                    <nav class="navbar-fixed-top">
                            <a class="logo-desktop" href="#"><img src="../images/Buyback-Boss-Logo.png" alt="Sell and Buy Used iPhone" /></a> 
                        <ul class="nav nav-tabs" role="tablist" id="menu">
                            <li><a href="../how/">HOW IT WORKS</a></li>
                            <li><a href="../reviews/">PRESS &amp; REVIEWS</a></li>
                            <li><a href="../support/">SUPPORT</a></li>
                            <li><a href="../blog/">BLOG</a></li>
                            </ul>
                        <button type="button" class="cart" onclick="">
                            CART
                         </button>
                    </nav>
                </div>
            </div>
        </header>
	
	<body>
    <div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar"
			aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
			50% complete!
	</div>
	</div>
        <div id="phoneCheckout">
            <img src="../images/iPhone-6-wireframe.jpg" id="img_iPhone_checkout"/>
		
		<div id="contentContainer">
        <div class = "network">
            What network are you on?
            <span class="help">
                <button id="help" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Help with network.">
               ?
            </button></span>
            <div class="btn-group" data-toggle="buttons">
                 <label class="btn btn-primary active">
                 <input type="radio" name="carrier" id="att" autocomplete="off"><img src="../images/at-t.png" alt="ATT" />
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="carrier" id="tmobile" autocomplete="off"><img src="../images/t-mobile.png" alt="TMOBILE" />
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="carrier" id="verizon" autocomplete="off"><img src="../images/verizon.png" alt="Verizon" />
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="carrier" id="sprint" autocomplete="off"><img src="../images/sprint.png" alt="Sprint" />
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="carrier" id="unlocked" autocomplete="off"><img src="../images/unlocked.png" alt="Unlocked" />
                 </label>
                   </div></div>
      
    
       
             <div class = "storage">
                What is the storage capacity?
                 <span class="help">
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Capacity can be found in Settings > General > About.">
               ?
            </button></span>
             
            <div class="btn-group" data-toggle="buttons">
                 <label class="btn btn-primary active">
                 <input type="radio" name="size" id="8gb" autocomplete="off">8GB
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="size" id="16gb" autocomplete="off">16GB
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="size" id="32gb" autocomplete="off">32GB
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="size" id="64gb" autocomplete="off">64GB
                 </label>
                 <label class="btn btn-primary">
                 <input type="radio" name="size" id="128gb" autocomplete="off">128GB
                 </label>
                   </div>
                 </div>
        </div>
		
		 <span class="checkoutButton">
               <button class="btn btn-primary" type="submit" value="checkout" onclick="location.href = 'phoneops2.php' ">Next</button>
         </span>
		
        </div> 
    </body>

<!--        <footer>
            <div class="content-wrapper">
                <div class="float-left">
                    <p>&copy; 2015 - Buyback Boss</p>
                </div>
            </div>
        </footer>-->

        
        
   
    </body>
</html>
