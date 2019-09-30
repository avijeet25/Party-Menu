<?php
$name= $_POST['cs_name'];
$ty = $_POST['p_name'];
$nop = $_POST['nop'];
$p_date = $_POST['p_date'];


// $sum=0;$sc=$mc=$sd=0;
// $snack1=$_POST['snack1'];
// $snack2=$_POST['snack2'];
// $snack3=$_POST['snack3'];
// $snack4=$_POST['snack4'];
// $snack1=$snack2=$snack3=$snack4="";
 echo "<h3>THE SNACKS SELECTED BY YOU ARE :-</h3>";
// if($snack1!="")
// {
	// echo $snack1;
	// $sc=150+$sc;
// }
/*elseif($snack2!="")
{
	echo $snack2;
	$sc=140+$sc;
}
elseif($snack3!="")
{
	echo $snack3;
	$sc=120+$sc;
}
elseif($snack4!="")
{
	echo $snack4;
	$sc=150+$sc;
}*/  
    
        // Check if any option is selected 
        if(isset($_POST["snacks"]))  
        { 
            // Retrieving each selected option 
            foreach ($_POST['snacks'] as $snacks)  
                print "You selected $snacks<br/>"; 
        } 
		
		/*elseif(isset($_POST["sweet"]))  
        { 
            // Retrieving each selected option 
            foreach ($_POST['sweet'] as $sweet)  
                print "You selected $sweet<br/>"; 
        }*/ 
		//else
			//echo "Select an option first !!"; 
	
		
	
    // else
        // echo "Select an option first !!";
/*
$main1=$_POST['main1'];
$main2=$_POST['main2'];
$main3=$_POST['main3'];
$main4=$_POST['main4'];
$main1=$main2=$main3=$main4="";
*/echo "<h3>THE MAIN COURSE SELECTED BY YOU ARE :-</h3>";

/*if($main1!="")
{
	echo $main1;
	$mc=450+$mc;
}

echo "You selected Paneer And Naan<br>";
echo "You selected Chicken And Naan<br>";
echo "You selected Veg Thali<br>";
 
/*
elseif($main2!="")
{
	echo $main2;
	$mc=540+$mc;
}
elseif($main3!="")
{
	echo $main3;
	$mc=620+$mc;
}
elseif($main4!="")
{
	echo $main4;
	$mc=750+$mc;
}*/



		 if(isset($_POST["main"]))  
         { 
            // Retrieving each selected option 
            foreach ($_POST['main'] as $main)  
                print "You selected $main<br/>"; 
        } 
		
/*
$sweet1=$_POST['sweet1'];
$sweet2=$_POST['sweet2'];
$sweet3=$_POST['sweet3'];
$sweet4=$_POST['sweet4'];
$sweet1=$sweet2=$sweet3=$sweet4="";
*/echo "<h3>THE SWEET DISHES COURSE SELECTED BY YOU ARE :-</h3>";
/*echo "You selected Ice Cream<br>";
echo "You selected Gulab Jamun<br>";
echo "You selected Custurd<br>";
/*if($sweet1!="")
{
	echo $sweet1;
	$sd=450+$sd;
}
elseif($sweet2!="")
{
	echo $sweet2;
	$sd=540+$sd;
}
elseif($sweet3!="")
{
	echo $sweet3;
	$sd=620+$sd;
}
elseif($sweet4!="")
{
	echo $sweet4;
	$sd=750+$sd;
}
echo "<h2>Your Toatl Per Plate Cost For Snacks Is = $sc</h2>";
echo "<h2>Your Toatl Per Plate Cost For Main Course Is = $mc</h2>";
echo "<h2>Your Toatl Per Plate Cost For Sweet Dish Is = $sd</h2>";

$sum = $nop * ($sc+$mc+$sd);

echo "<h1>Your Toatl Cost Is = $sum</h1>";
*/
		if(isset($_POST["sweet"]))  
        { 
            // Retrieving each selected option 
            foreach ($_POST['sweet'] as $sweet)  
                print "You selected $sweet<br/>"; 
        } 


?>
