<!DOCTYPE html>
<html lang="en">
<head>
    <title>abu</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script>
        function juhu() {
            var govno = $("#combe").val();
           
            var kreteni = $(".abukreten");
            $(kreteni).html(govno);
        }
    </script>

</head>

<body>
    <p><strong><span class="abukreten">blue</span></strong> cow by adsadad </p>
    <p><strong><span class="abukreten">BLUE</span></strong> dasdsadsadadasd</p>
    <label> Change color</label>
    <input type="text"  id="combe" title="juhu"/>
    <input type="button" value="change" title="juhu" id="combe1" onclick="juhu();"/>

    <?php
        $abu = "oba";
        echo str_replace("oba", "juhu", $abu);
        echo strstr($abu, "abu");
        echo "<br>";
        echo substr($abu, 0,2);
        echo strpos($abu, "abu");
echo "<br>";
        $var = 0;
        $var2 = "0";
        $var3 = NULL;
echo "<br>";

        echo empty($var);echo "<br>";
        echo empty($var);echo "<br>";
        echo empty($var);
        echo "<br>";
        $abu = "oba";
        $oba = $abu + 3;
        echo $oba;
        echo gettype($oba);

        $num1 = 100;
        $num2 = 20;
        $num3 = 22;

        if($num1 > $num2 && $num1 > $num3){
            echo $num1;
        } elseif ($num2 > $num1 && $num2 > $num3){
            echo $num2;
        }elseif( $num3 > $num1 && $num3 > $num2){
            echo $num3;
        }
echo "<br>";
        if(!isset($num5)){
            $num1 = 100;
        }

        echo $num1;


        echo "juhu";echo "<br>";
        
        $ages = array(1,2,4,5);
        while($age = current($ages)){
        if(current($ages) == 5)
        break;
        //echo current($ages);
        //echo "<br>";    
          
        if(current($ages)+1 != next($ages)){
            echo current($ages)+1;
            echo "<br>";
            break;
        }
        }

        echo "<br>";
        $juhu = array(1,2,4,5);
        echo "abu".count($juhu);
        echo "<br>";
        for($i= 1; $i<=5; $i++){
            if(in_array($i, $juhu)){
                echo "true";
                echo $i;
                echo "<br>";
            }else {
                echo "<script>console.log('false');</script>";
                echo $i;
                echo "<br>";
            }
        }

    ?>
    

    

</body>
</html>