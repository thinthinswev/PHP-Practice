 <?php

function add_digits($num)
{

    if ($num > 0)
    {
        
        return ($num - 1) % 9 + 1;
    }
    else
    {
        
        return 0;
    }
}


print_r(add_digits(48) . "\n");
print_r(add_digits(59) . "\n");
?>