<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
$n=$_SERVER['argv'][1];
$out=STDOUT;
if($_SERVER['argc']>=3){
    $out=fopen($_SERVER['argv'][2],'w');
}fprintf($out,"    |");
for($i=2;$i<=$n;$i++){
    fprintf($out,"%8d",$i);
}fprintf($out,"\n----+");
for($i=2;$i<=$n;$i++){
    fprintf($out,"--------");
}fprintf($out,"\n");
for($j=1;$j<=12;$j++){
    fprintf($out,"%4d|",$j);
    for($i=2;$i<=$n;$i++){
        fprintf($out,"%8d",$i*$j);
    }fprintf($out,"\n");
}fclose($out);
?>