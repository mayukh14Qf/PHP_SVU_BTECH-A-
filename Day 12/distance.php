<?php

 /*

    N
    |
W---|----E
    |
    S

 */

 $north=20;
 $south=3;
 $east=5;
 $west=0;


 $x_axis=$east-$west;
 $y_axis=$north-$south;

 $final_distance=sqrt(($x_axis*$x_axis)+($y_axis*$y_axis));



 echo $final_distance;











?>