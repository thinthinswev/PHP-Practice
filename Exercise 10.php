 <?php

function single_number($arr)
{
  
    $ones = 0;
    $twos = 0;
    $common_one_two = 0;

 
    for ($i = 0; $i < sizeof($arr); $i++)
    {
        
        $twos  = $twos | ($ones & $arr[$i]);

     
        $ones  = $ones ^ $arr[$i];

       
        $common_one_two = ~($ones & $twos);

        $ones &= $common_one_two;
        $twos &= $common_one_two;
    }

    
    return $ones;
}


$arr1 = array(5, 3, 4, 3, 5, 5, 3);
$arr2 = array(-1, 1, 1, -1, -1, 1, 0);


print_r($arr1);

print_r('Single Number: ' . single_number($arr1) . "\n");


print_r($arr2);
print_r('Single Number: ' . single_number($arr2) . "\n");
?>