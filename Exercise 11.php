 <?php

function single_number($arr)
{
   
    $result = 0;

    
    for ($i = 0; $i < sizeof($arr); $i++)
    {
      
        $result = $result ^ $arr[$i];
    }

 
    return $result;
}


$num = array(5, 3, 0, 3, 0, 5, 7, 7, 9);


print_r(single_number($num) . "\n");
?>