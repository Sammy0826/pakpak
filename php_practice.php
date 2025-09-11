<!-- Hello!
<h1>Hello!</h1>
<style>
    h1{
        color: yellow;
    }
</style>
<script>
    alert("Hello!")
</script> -->
<?php
    /*
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello this is Me!</h1> -->
    <?php
        // ECHo "Hello";

        // $color = "Red";
        // $Color = "Blue";
        // echo $Color;
        // echo $color;
        
        // $_ = 5;
        // echo $_;
        
        // var_dump($color);
        // var_dump($_);
        // var_dump(3.1);
        // var_dump(false);
        // var_dump([1,2]);

        //Variable
        // $x = 5; //global

        // function test(){
        //     // $x = 10; //local
        //     static $x = 10;
        //     echo $x;
        //     $x++;
        //     echo "<br>";
        // }
        // test();
        // test();
        // test();
        // test();
        // test();
        // test();
        // echo $x;

        //echo & print

        // echo ("Hello"), ("Hello");
        // echo "World!", "World!";
        // print ("Hello");
        // print "World!";

        // $x = print("Hello");
        // echo $x;

        // $a = "Sammy";
        // $b = 21;
        // $c = 5.5;
        // $d = true;
        // $e = [1,2,3];
        // $f = new stdClass();
        // $g = null;
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        // // echo strlen($a);

        // $x = "Juan Cruz";
        // echo str_replace("Cruz", "Lancelotte", $x);

        // echo trim("Hello World!            ");

        // var_dump (explode("u", $x));

        // echo "Hello World!";

        // $x = "Hello";
        // $y = "Love";
        // $z = "Goodbye";

        // echo $x . " " . $y . " ".  $z . "<br>";
        // echo "$x sanaol $y beybeh $z <br";
        // echo "Samantha \$Beybeh\" Capunpun";

        // //casting
        //   $a = (object) "Sammy";
        //   $b = (object) 21;
        //   $c = (object) 5.5;
        //   $d = (object) true;
        //   $e = (object) [1,2,3];
        //   $g = (object) null;
        //   $h = (object) fopen("php_practice.php", "r");

        // //   unset($a); 
        // //   echo

        //   var_dump($a);
        //   echo "<br>";
        //   var_dump($b);
        //   echo "<br>";
        //   var_dump($c);
        //   echo "<br>";
        //   var_dump($d);
        //   echo "<br>";
        //   var_dump($e);
        //   echo "<br>";
        //   var_dump($g);
        //   echo "<br>";
        //   var_dump($h);
        //   echo "<br>";

        // echo pi();

        // echo abs(-5);

        // echo sqrt(6);

        // echo round(5.5);

        // echo rand(5, 20);

        //constant

        // $_sam = 5;
        // define("GREETING", "HELLO");
        // //echo GREETING;

        // function test(){
        //     echo GREETING;
        // }

        // test();

        //  $x = 5;

        // +=
        // $x = $x + 10;
        // $x += 10;

        // echo $x;

        // $x %= 5;
        // echo $x;

        //comparison

        // var_dump(5 == "5"); //true
        // var_dump(5 === 5); //true
        // var_dump(5 <> 7); //true
        // var_dump(5 !== "5"); //true

        // echo 1 <=> 2;

        //increment

        //++
        //pre-increment/decrement

        // $x = 5;
        // echo ++$x;

        //post-increment/decrement

        // $y = 5;
        // echo $y++;
        // echo $y;

        //logical 

        // and &&
        // var_dump(true and true); //true
        // var_dump(true && false); //false
        // var_dump(false and false); //false

        // var_dump(5 == "5" && 5 == 5); //both true

        //or ||

        // var_dump(true or true); //t
        // var_dump(true or false);//t
        // var_dump(false or false);//f

        //xor
        // var_dump(true xor true); //only one true

        //! reverse

        // var_dump(!true); //f
        // var_dump(!false); //t

        //. concat
        // $x = "Hello" . "World";
        // $x = "Hello";

        // .= append
        // $x .= "world!";
        // echo $x;

        //Array operations

        //union

        // $x = [1,2,3];
        // $y = [3=>4,5,6,7];

        // $z = $x + $y;

        // // print_r($x);
        // // print_r($y);
        // print_r($z);

        //Equal to
        // $x = [1,2,3];
        // $y = [2=>3, 1=>2, 0=>1];
        // echo $x == $y; //true

        //identical

        // $x = [1,2,3];
        // $y = [2=>3, 1=>2, 0=>1];
        // echo $x === $y; //false

        //decision making statements

        //if statement

        // if(4 == "4"){
        //     echo "same";
        // } elseif(6 > 5){
        //     echo "6 is grater than 5";
        // }
        // else{
        //     echo "no";
        // }

        // $gender = "female";
        // if($gender == "female"){
        //     echo "woman";
        // }else{
        //     echo "mens";
        // }
        //condition ? if true : if false
        //echo $gender == "female" ? "woman" : "mens";
        // $x =  $gender = "female" ? "woman" : "mens";
        // echo $x;

        // $x = $gender ?? "Male";
        // echo $x;

        //switch

        // $color = "B";

        // switch($color){
        //     case "R":
        //         echo "Red";
        //         break;

        //     case "G":
        //         echo "Green";
        //         break;

        //     case "B":
        //         echo "Blue";
        //         break;

        //     default:
        //         echo "Invalid";
        // }

        //t & t
        // if(4 == "4" && 4 == 4)={}

        // //atleast 1 true
        // if(4 == "4" || 4 == 4)={}

        // //only 1 true cannot be both
        // if(4 == "4" xor 4 == 4)={}

        // //reverse
        // echo !4 == "4";

        //php loops statement
        // while 
        // $x = 0;
        // while($x < 5){
        //     echo "Hello";
        //     continue;
        //     $x++;
        // }

        // do while
        // do{
        //     if($x == 3){
        //         continue;
        //     }
        //     echo $x;
        //     $x++;
        // }while($x < 5)
        
        //for
        // for($x = 0; $x < 5; $x++){
        //     echo $x;
        // }


        //foreach
        // $x = array(1,2,3,4);

        // foreach($x as $key => $value){
        //     echo $key . "->" . $value, "<br>";
        // }
        
        

        // ?>
        // <ol>
        //     <!-- <?php for($x = 1; $x <= 10; $x++){ ?>
        //          <li>Item <?php echo $x;></li>
        //     <?php } ?> -->

        //     <?php 
        //     $x = array("Maria", "Teresa", "Juana");
        //         foreach($x as $value){
        //             echo "<li> $value </li>";
        //         }
        //     ?>
            
        // </ol>
      
</body>
</html>

