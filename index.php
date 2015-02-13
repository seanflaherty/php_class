<!DOCTYPE html>
<html>
    <head>
        <title>PHP Page</title>
    </head>
    <body>
        <h1>
            <?php
                $siteName = "PHP Page";
                echo $siteName;
            ?>
        </h1>
        <p><?php echo "Hello World!"?></p>

        <h2>Quotes</h2>
        <?php
        echo '"I can\'t find it" he said.  "Here it is" she said.';
        ?>
        <br >
        <?php
            echo "I can't do it.  ";
            echo "Yes you can!";

        ?>

        <h2>Store</h2>
        <?php
        $product1 = 11;
        echo "Price Product 1: $$product1<br />";
        $product2 = 12;
        echo "Price Product 2: $$product2<br />";
        $product3 = 13;
        echo "Price Product 3: $$product3<br />";
        echo "<br >";
        echo "<br >";
        $product1 +=5;
        echo "Price Product 1: $$product1<br />";
        $product2 -=3;
        echo "Price Product 2: $$product2<br />";
        $product3 *=2;
        echo "Price Product 3: $$product3<br />";



        $average = ($product1 + $product2 + $product3)/3;



      echo "<p>
          Average:  $average</p>"
      ?>
       <h2>Loops</h2>
       <?php
       $apples = 25;

       while($apples > 0) {
           echo "The number of apples is: $apples <br />";
           if ($apples % 2) {
           $apples--;
       } else {
           $apples -=3;
       }
       }
        echo "<p>All apples eaten</p>"
        ?>

        <h2>Homework Goes Here</h2>

        <!--
        This is the homework that was listed on the last slide:

        Create three variables to hold the three numbers 3, 7 and 15.
        Use if statements to determine which number is the largest and which is the smallest.
        Subtract the smallest number from the largest number and assign that value to a variable.
        Display a statement saying that you like the number $result.

        Challenge: Use a loop to calculate the Least Common Denominator (LCD) for 1/3 and 1/7.
        (LCD = the smallest number that is evenly divisible by both of the denominators, 3 and 7).


        -->

        <?php
            $three = 3;
            $seven = 7;
            $five = 5;

            $largest = max($three, $seven, $five);
            $smallest = min($three, $seven, $five);
            $result = ($largest - $smallest);
            echo "I like $result <br />";

            $array = array($largest, $smallest);

            function lcd($array,$x) {

                $mod_sum = 0;

                for ($int=1; $int < count($array); $int++) {
                    $modulus[$int] = ($array[0]*$x) % ($array[$int]);
                    $mod_sum = $mod_sum + $modulus[$int];
                }

                if (!$mod_sum) {
                    echo "LCD: ".($array[0]*$x)."\n";
                }

                else {
                    lcd($array,$x+1);
                }

            }

        lcd($array,1);
    ?>

        <h2>Exercise 1</h2>

    <?php
        $carMakers = array('Ford', 'Mazda', 'Ferrari');

        print_r($carMakers);

    ?>
    <br />
    <br />
    <?php
        //Associative array
        $car = array('make' => 'Ferrari', 'model' => '458', 'color' => 'Red');
        var_dump($car);



    ?>

    <h2>Exercise 2</h2>
    <!--
    Create a variable containing the string "Learning PHP at Betamore is Awesome!"
    Display the string in alternating capital/lowercase letters

    -->

    <?php

    $str = "Learning PHP at Betamore is Awesome!";
    $i = 0;
    $newStr = '';

    while ($i < strlen($str)) {
        if ($i % 2) {
            $newStr .= strtoupper($str[$i]);
        } else {
            $newStr .= strtolower($str[$i]);
        }
        $i++;
    }
    echo $newStr;

    ?>

    <br />
    <br />
    <h2>Exercise 3</h2

    <!--
    Create an array of books for a store with the key being the book title
    and the value being price

    Create a second array with country names

    Sort each array using ksort() and asort()

    Force asort() to sort items numerically and alphabetically

    -->
    <?php
        $books = array(
            'Limbo' => 5.99,
            'Dune' => 7.99,
            'Radix' => 9.99 );

        $countries = array('USA', 'Canada', 'Mexico');

        ksort($books, SORT_NATURAL);

        print_r($books);

        echo '<br />';

        asort($countries, SORT_NUMERIC);

        print_r($countries);




    ?>


    </body>
</html>
