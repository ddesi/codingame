<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/


// game loop
while (TRUE)
{
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $mountainH // represents the height of one mountain, from 9 to 0.
        );
        
        $mountains[] = $mountainH;
    }

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    
    $target = max($mountains);
    
    $highestM = array_search($target,$mountains);
    
    echo("$highestM\n"); // The number of the mountain to fire on.    
    
    unset($mountains);
}
?>