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





    </body>
</html>
