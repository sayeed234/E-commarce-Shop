
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type=text/css href="home.css">

 </head>
 <body>
<ul>
 <li>
 <div>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="sign.php">Sign up</a>
  <a href="login.php">Log in</a>
  <a href="#">Delevery</a>
   <a href="#">Admin</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;FOOD.COM</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

 </li>


  <li class="dropdown">
    <a href="javascript:void(0)" style="font-size:15px;" class="dropbtn">Breakfast</a>
    <div class="dropdown-content">
      <a href="bacon.php">Bacon</a>
      <a href="#">Egg and cheese sandwich</a>
      <a href="#">Bagel and cream cheese</a>
	   <a href="#">Baked beans</a>
	    <a href="#">Banana pancakes</a>
		 <a href="#">Breakfast cereal</a>
		 <a href="#">Breakfast sandwich</a>
	    <a href="#">Brown Bobby</a>
		 <a href="#">Chocolate sandwich</a> 
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)"style="font-size:15px;" class="dropbtn">Lunch</a>
    <div class="dropdown-content">
      <a href="#">Leftover Roast Beef Salad with Shiitake Mushrooms</a>
      <a href="#">Stuffed Bell Pepper</a>
      <a href="#">Skinny Calzones</a>
	  <a href="#">Thanksgiving Monte Cristo Sandwich</a>
      <a href="#">Sweet Potato Chickpea Burgers </a>
      <a href="#">Around the World Black Bean Burgers</a>
	  <a href="#">Veggie White Pizzas</a>
      <a href="#">Greek Veggie Wraps </a>
      <a href="#">Chinese Chop Salad</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" style="font-size:15px;" class="dropbtn">Dinner</a>
    <div class="dropdown-content">
      <a href="#">Fried vegetables</a>
      <a href="#">Biryani</a>
      <a href="#">Chhenagaja</a>
	  <a href="#">Dal</a>
      <a href="#">Ilish or Chingri Bhapa</a>
      <a href="#">Doi Fuchka</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" style="font-size:15px;" class="dropbtn">Chinese Famous Food</a>
    <div class="dropdown-content">
      <a href="#">Chinese Green Bean Stir-Fry</a>
      <a href="#">Kung Pao Chicken</a>
      <a href="#">Pan-Fried Chinese Pancakes</a>
	 <a href="#">Pork Dumplings</a>
      <a href="#">Chinese Spareribs</a>
      <a href="#">Sweet and Sour Chicken</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" style="font-size:15px;"  class="dropbtn"> Italian Food</a>
    <div class="dropdown-content">
      <a href="#">Caprese Salad with Pesto Sauce</a>
      <a href="#">Panzenella</a>
      <a href="#">Bruschetta</a>
	  <a href="#">Focaccia Bread</a>
      <a href="#">Pasta Carbonara</a>
      <a href="#">Margherita Pizza</a>
	  <a href="#">Mushroom Risotto</a>
      <a href="#"> Pasta Con Pomodoro E Basilico</a>
      <a href="#">Panna Cotta With Raspberry Coulis</a>
    </div>
  </li>
 
  <li class="dropdown">
    <a href="javascript:void(0)" style="font-size:15px;" class="dropbtn">Cake and Sweets</a>
    <div class="dropdown-content">
      <a href="#">Bonde</a>
      <a href="#">Chhena gaja</a>
      <a href="#">Chhena payesh</a>
	  <a href="#">Chhena poda</a>
      <a href="#">Cham cham</a>
      <a href="#">Kalojam</a>
	  <a href="#">Rasabali</a>
      <a href="#">Shor bhaja</a>
      <a href="#">Sitabhog</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" style="font-size:15px;" class="dropbtn">Food packaging</a>
    <div class="dropdown-content">
      <a href="#">Aseptic packaging of soy milk</a>
      <a href="#">Bagged cake mix</a>
      <a href="#">Biscuit components</a>
	  <a href="#">Container for bulk vegetable oil</a>
      <a href="#">Frozen processed food freezer in supermarket</a>
      <a href="#">Bag in box; box wine</a>
	  <a href="#">Glass milk bottle and paperboard milk carton</a>
      <a href="#">Silk tea bag</a>
 </div>
  <br><br> 
  <li><img src="logo.png" alt="avatar" style="width:55px;"></li>
  <br><br> 
 </li>
   <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Find Your Food " name="search">
      <button type="submit">Search</button>
    </form>
      </div>


</ul>

   
</div>

<div class="kaka">
<div class="content">

<h2 style="text-align:center">Most Popular Recipes</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="hd.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="hd1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="hd2.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="hd3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="hd4.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="hd6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="hd.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd3.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd4.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="hd5.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</div>
</div>
</body>
</html>
   