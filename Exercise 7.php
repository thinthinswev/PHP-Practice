 <?php
function three_Sum($arr, $target)
{
    $count = count($arr) - 2;
    $result=[];
    for ($x = 0; $x < $count; $x++) {
        if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
            array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
        }
    }
    return $result;
}

$my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);

print_r(three_Sum($my_array, 16));
print_r(three_Sum($my_array, 11));
print_r(three_Sum($my_array, 12));
?>