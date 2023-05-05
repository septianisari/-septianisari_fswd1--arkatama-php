<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 PHP Septiani Sari</title>
</head>
<body>
    <?php 
    function triangle_upside_left($sym, $n){
        
        for($a = 1; $a <= $n; $a++){
            for($b = $n; $b > $n-$a; $b--){
            echo $sym;
            
            }
            echo "<br>";
        }
        
    }

    function triangle_downside_left($sym, $n){
       
        for($a = 1; $a <= $n; $a++){
            for($b = 0 ; $b <= $n-$a; $b++){
            echo $sym;
            
            }
            echo "<br>";
        }
        
    }

    function triangle_upside_right($sym, $n){
        
        for($a = 1; $a <= $n; $a++){
            for($b = 0; $b < $n-$a; $b++){
                echo "&nbsp;&nbsp;";
                
            }
            for($c = 1; $c <= $a; $c++){
                echo $sym;
                    
            }
            echo "<br>";
        }
        
    }

    function triangle_downside_right($sym, $n){
        
        for($a = 1; $a <= $n; $a++){
            
            for($c = 1; $c < $a; $c++){
                echo "&nbsp;&nbsp";
                    
            }
            for($b = 0; $b <= $n-$a; $b++){
                echo $sym;
                
            }
            echo "<br>";
        }
        
    }

    function condition_pattern($sym, $n, $pil){
        if($pil == 1 ){
            triangle_upside_left($sym, $n);
        }else if($pil == 2){
            triangle_downside_left($sym, $n);
        }else if($pil == 3){
            triangle_upside_right($sym, $n);
        }else if ($pil == 4){
            triangle_downside_right($sym, $n);
        }
    }

    echo "triangle_upside_left <br>";
    triangle_upside_left("*", 5);
    echo "<br>";
    echo "triangle_downside_left <br>";
    triangle_downside_left("*",5);
    echo "<br>";
    echo "triangle_upside_right <br>";
    triangle_upside_right("*",5);
    echo "<br>";
    echo "triangle_downside_right <br>";
    triangle_downside_right("*",5);
    echo "<br>";
    echo "condition_pattern";
    echo "<br>";
    echo "triangle_upside_left $ <br>";
    condition_pattern("$",6, 1);
    echo "<br>";
    echo "triangle_downside_left @ <br>";
    condition_pattern("@",10, 2);
    echo "<br>";
    echo "triangle_upside_right # <br>";
    condition_pattern("#",9, 3);
    echo "<br>";
    echo "triangle_downside_right * <br>";
    condition_pattern("*",6, 4);
    ?>
</body>
</html>