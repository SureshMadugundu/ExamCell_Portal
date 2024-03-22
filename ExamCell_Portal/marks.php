<?php
$array1=array('B','B','Ex','A','A','Ex','B','Ex');
$credits=array(4,3,4,3,3,1.5,1.5,1.5);
foreach($credits as $credit)
{
    $sum+=$credit;
}
echo $sum;
$total=0;
for($i=0;$i<count($array1);$i++)
{
    
        if($array1[$i]=='Ex')
        {
            $res=10*;
            $total=$total+$res;
        }
        elseif($array1[$i]=='A')
        {
            $res=9*$credits[$j];
            $total=$total+$res;
        }
        elseif($array1[$i]=='B')
        {
            $res=8*$credites[$j];
            $total=$total+$res;
        }
        elseif($array1[$i]=='C')
        {
            $res=7*$credits[$j];
            $total=$total+$res;
        }
        elseif($array1[$i]=='D')
        {
            $res=6*$credits[$j];
            $total=$total+$res;
        }
        elseif($array1[$i]=='E')
        {
            $res=6*$credits[$j];
            $total=$total+$res;
        }
    }
echo $total;
}
?>