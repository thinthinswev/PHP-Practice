 <?php
function missing_number($num_list)
{
    
    $new_arr = range($num_list[0], max($num_list));                                                    
  
    return array_diff($new_arr, $num_list);
}

print_r(missing_number(array(1,2,3,6,7,8)));
print_r(missing_number(array(10,11,12,14,15,16,17)));
?>