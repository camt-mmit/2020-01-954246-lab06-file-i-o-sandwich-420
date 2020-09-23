<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
$out=STDOUT;
if($_SERVER['argc']>=3){
    if(file_exists($_SERVER['argv'][1])){
    copy($_SERVER['argv'][1],$_SERVER['argv'][2]);
    exit;
    }else{
        echo"Cannot open ",$_SERVER['argv'][1],"!!!";
        exit;
    }
}elseif($_SERVER['argc']<3&&$_SERVER['argc']>1){
    $out=fopen($_SERVER['argv'][1],'w');
}else{
    echo"invalid arguments\nuse ass03 [input_file] output_file";
    exit;
}for($i=0;;$i++){
    $n=fgets(STDIN,4064);
    if(feof($out)){
        break;
    }else{
        fprintf($out,"%s",$n);
    }    
}fclose($out);
?>