<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="cs16.css">

<body>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="Picass.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="page1.php" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="page2.php" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="page3.php" class="w3-button w3-block w3-black">ORDER</a>
    </div>
    <div class="w3-col s2">
      <a href="login.php" class="w3-button w3-block w3-black">CALLBACK</a>
    </div>
  </div>
</div>


<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
   
    <?php
class Eat{
  
  public $name;
  public $price;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_price($price) {
    $this->price = $price;
  }
  function get_price() {
    return $this->price;
  }
}

$BreadBasket = new Eat();
$BreadBasket->set_name('BreadBasket');
$BreadBasket->set_price('3.50');

$Almond = new Eat();
$Almond->set_name('Honey Almond Granola with Fruits');
$Almond->set_price('4.00');

$Waffle = new Eat();
$Waffle->set_name('Belgian Waffle');
$Waffle->set_price('5.50');

$Eggs = new Eat();
$Eggs->set_name('Scrambled eggs');
$Eggs->set_price('7.50');

$Pancakes = new Eat();
$Pancakes->set_name('Blueberry Pancakes');
$Pancakes->set_price('7.00');

echo "Name: " . $BreadBasket->get_name();
echo "<br>";
echo "Price: " . $BreadBasket->get_price();
echo "<br>";
echo "Name: " .$Almond->get_name();
echo "<br>";
echo "Price: " . $Almond->get_price();
echo "<br>";
print( "Name: " . $Waffle->get_name());
echo "<br>";
print( "Price: " . $Waffle->get_price());
echo "<br>";
print( "Name: " . $Eggs->get_name());
echo "<br>";
print( "Price: " . $Eggs->get_price());
echo "<br>";
print( "Name: " . $Pancakes->get_name());
echo "<br>";
print( "Price: " . $Pancakes->get_price());
echo "<br>";
echo "<br>";

?> 

      <?php
      
$lunch = array (0 => 'Bread Basket,',
1 => 'Honey Almond Granola with Fruits,',
2 => 'Belgian Waffle,', 3 =>'Scrambled eggs,
', 4 =>'Blueberry Pancakes');
$length = count($lunch);
for ($i = 0; $i < $length; $i++) {
  print $lunch[$i];
  
  
  
}

print '<br>';
 while (list ($key, $val) = each ($lunch)) {
echo "$key -> $val 
<br>";}

?>
<?php
  
  $price=10;
if ($price>7 && $price<11 )
{
print 'breakfast<br>';
}
elseif ($price>=11 && $price<16 ) 
{
print 'lunch<br>';
}
else 
{
print 'dinner<br>';
}

$favoritefood = "4";

switch ($favoritefood) {
    case "1":
        echo "Your favorite food is Bread Basket!";
        break;
    case "2":
        echo "Your favorite food is Honey Almond Granola with Fruits!";
        break;
    case "3":
        echo "Your favorite food is Belgian Waffle!";
        break;
        case "4":
            echo "Your favorite food is Scrambled eggs";
            break;
            case "5":
                echo "Your favorite food is Blueberry Pancakes";
                break;
    default:
        echo "You have not favorite food!!!";
}
?>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
    <?php
class Drinks{
  
  public $name;
  public $price;

  function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  function get_name() {
    return $this->name;
  }
  function get_price() {
    return $this->price;
  }
}


$Coffee = new Drinks("Coffee", "5.50");


$Chocolato = new Drinks("Chocolato", "4.50");


$Corretto = new Drinks("Corretto", "5.00");


$Icedtea = new Drinks("Iced tea", "3.00");


$Soda = new Drinks("Soda", "2.50");

printf("Name: %s ",$Coffee->get_name());
echo "<br>";
printf("Price: %s",$Coffee->get_price());
echo "<br>";

printf("Name: %s ",$Chocolato->get_name());
echo "<br>";
printf("Price: %s",$Chocolato->get_price());
echo "<br>";

printf("Name: %s ",$Corretto->get_name());
echo "<br>";
printf("Price: %s",$Corretto->get_price());
echo "<br>";

printf("Name: %s ",$Icedtea->get_name());
echo "<br>";
printf("Price: %s",$Icedtea->get_price());
echo "<br>";

printf("Name: %s ",$Soda->get_name());
echo "<br>";
printf("Price: %s",$Soda->get_price());
echo "<br>";
echo "<br>";

?>
      <?php
      
$lunch = array (0 => 'Coffee,',
1 => 'Chocolato,',
2 => 'Corretto,', 3 =>'Iced tea,
', 4 =>'Soda');
$length = count($lunch);
for ($i = 0; $i < $length; $i++) {
  print $lunch[$i];
  
  
  
}

print '<br>';
 while (list ($key, $val) = each ($lunch)) {
echo "$key -> $val 
<br>";}

?>
<?php
  
  

$favoritedrink = "3";

switch ($favoritedrink) {
    case "1":
        echo "Your favorite drink is Coffee!";
        break;
    case "2":
        echo "Your favorite drink is Chocolato";
        break;
    case "3":
        echo "Your favorite drink is Corretto";
        break;
    case "4":
        echo "Your favorite drink is Iced Tea";
        break;
    case "5":
        echo "Your favorite drink is Soda";
        break;
    default:
        echo "You have not favorite food!!!";
}
?>
    </div>  
    


  

    <img src="https://avatars.mds.yandex.net/get-altay/1660410/2a00000168fb5048272f3a997457be1b5d1d/XXXL" style="width:100%;max-width:1000px;margin-top:32px; margin-bottom: 20px">
    
  </div>
  <body>
  <footer class="w3-center w3-padding-48 w3-large">
  <p>Powered by <a href="yerdossov01@gmail.com" title="AmirYe" target="_blank" class="w3-hover-text-green">AmirYe</a></p>
</footer>

  
 
</div>
<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>