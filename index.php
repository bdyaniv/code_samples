<html>
<head>
<title>OOP Practice</title>

<style type="text/css"> 
h3
{
color:#BB0001;
text-align:center;
background-color:#F0F0F0;
text-shadow: 1px 1px 1px #000000;
}
div
{
width:70px;
height:20px;
background-color:red;
border:1px solid black;
box-shadow: -2px -2px 10px #888888;
}
div#car
{
background-color:#99FF66;
text-align:center;
transform:rotate(30deg);
-ms-transform:rotate(30deg); /* IE 9 */
-moz-transform:rotate(30deg); /* Firefox */
-webkit-transform:rotate(5deg); /* Safari and Chrome */
-o-transform:rotate(30deg); /* Opera */
}
div#truck
{
background-color:#FFCC00;
text-align:center;
transform:rotate(30deg);
-ms-transform:rotate(30deg); /* IE 9 */
-moz-transform:rotate(30deg); /* Firefox */
-webkit-transform:rotate(5deg); /* Safari and Chrome */
-o-transform:rotate(30deg); /* Opera */
}
table
{
width:100%;
}
td
{
vertical-align:top;
}
tr:odd		{ background-color:#eee; }
tr:even		{ background-color:#fff; }
</style>

</head>
<body bgcolor="#99CCFF">
<?php
class Viacle {
    
    // class atributes (variables)
    protected $_type; //car, truck, bike
	protected $_make;
    protected $_model;
    protected $_year;
    protected $_color;
	protected $_wheels;
    
    function __construct($type="car", $make="undef", $model="undef", $year=1990, $color="undef", $wheels=4) {
			$this->_type = $type;
			$this->_make = $make;
			$this->_model = $model;
			$this->_year = $year;
			$this->_color = $color;
			$this->_wheels = $wheels;
    }
	
	function show() {
		echo "Make: " . $this->_make . "<br />";
		echo "Model: " . $this->_model . "<br />";
		echo "Year: " . $this->_year . "<br />";
		echo "Color: " . $this->_color . "<br />";
		echo "Wheels: " . $this->_wheels . "<br />";
	}
	
	function header($type) {
		echo "<br />";
		echo "<div id=$type>$type</div>";
	}
	
	function getType() {
		return $this->_type;
	}
}

class Car extends Viacle {
	
	function __construct($type="car", $make="undef", $model="undef", $year=1990, $color="undef", $wheels=4) {
		parent::__construct($type, $make, $model, $year, $color, $wheels);

	}
}

class Truck extends Viacle {  
    
	private $_length;
	private $_height;
	
    function __construct($type="car", $wheels=6, $length="3 meters", $height="2 meters",$make="undef", $model="undef", $year="undef", $color="undef") {  
          
        // call the super-class contructor  
        parent::__construct($type, $make, $model, $year, $color);  
        $this->_type = $type;
		$this->_make = $make;
		$this->_model = $model;
		$this->_year = $year;
		$this->_color = $color;
		
		$this->_wheels = $wheels;
		$this->_length = $length;
		$this->_height = $height;
    }
	
	function show () {
		parent::show();
		echo "Length: " . $this->_length . "<br />";
		echo "Height: " . $this->_height . "<br />";
	}
}

echo "<h3>Cars and Trucks - OOP PHP</h3>";
echo "<table>";

$viacles = array();
$viacles[0] = new Truck("truck",8,"12 meters", "3.5 meters","Ford","Station",2006,"Red");
$viacles[1] = new Car("car","Jaguar", "XSL 1000", 2002, "Green");
$viacles[2] = new Truck("truck",6,"11 meters", "3.3 meters","Mercedes","MVP",2005,"Black");
$viacles[3] = new Car("car","VW", "Mini Cooper", 2012, "Yellow");
$viacles[4] = new Car("car","VW", "Mini Cooper", 2012, "Yellow");
$viacles[5] = new Car("car","VW", "Beetle", 2001, "Metalic Blue");
$viacles[6] = new Car("car","Honda", "Civic", 2010, "White");
$viacles[7] = new Truck("truck",6,"8 meters", "3.1 meters","Ford","DFG 50",2003,"White");
$viacles[8] = new Car("car","Subaru", "GLX", 2008, "Gray");
$viacles[9] = new Truck("truck",8,"12 meters", "3.5 meters","Ford","Station",2006,"Red");
$x=0;

foreach ($viacles as &$i) {

	if ( ($x%4)==0) {
		echo "<tr>";
	}
	echo "<td>";
	echo $i->header($i->getType());
	$i->show();
	echo "</td>";
$x++;
	if ( ($x%4)==0) {
		echo "</tr>";
	}
}
//echo "</tr>";
echo "</table>";
?>
</body>
</html>
<?php
/*
$mycar = new Car("VW", "Beetle", 2001, "Metalic Blue");
$mycar->header("car");
$mycar->show();

$truck = new Truck(8,"12 meters", "3.5 meters","Ford","Station",2006,"Red");
$truck->header("truck");
$truck->show();
*/
/*
$cars = array();
$cars[0] = new Car("car","Honda", "Civic", 2010, "White");
$cars[1] = new Car("car","Jaguar", "XSL 1000", 2002, "Green");
$cars[2] = new Car("car","Subaru", "GLX", 2008, "Gray");
$cars[3] = new Car("car","VW", "Mini Cooper", 2012, "Yellow");
echo "<tr>";
foreach ($cars as &$i) {
	echo "<td>";
	$i->header("car");
	$i->show();
	echo "</td>";
}
echo "</tr>";
*/
?>