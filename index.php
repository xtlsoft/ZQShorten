<?php
    
    if(isset($_GET['ac']) && $_GET['ac']=="document"){
        echo "<script>alert('Username:bug  Password:bug123');window.location.href='https://project.zqjs.tk/www/doc-view-4.html'</script>";
        die;
    }
    
    $URL=str_replace($_SERVER["CONTEXT_DOCUMENT_ROOT"],"",$_SERVER["REDIRECT_URL"]);
    
    $HTTP="http://";
    if($_SERVER['SERVER_PORT'] == 443) $HTTP="https://";
    
    $URL_Q = $HTTP.$_SERVER['HTTP_HOST']."/";
    
    $ID=str_replace($URL_Q,"",$URL);
    
    if(str_replace("t/","",$ID)!=$ID){
        die(header("location:http://".str_replace("t/","",$ID)));
    }
    
    $URLS = explode("\n",file_get_contents("./.hturls"));
    
    $Tmp="";
    
    foreach($URLS as $US){
        $Tmp = explode(" ",$US);
        if($ID==$Tmp[0]) die(header("location:".$Tmp[1]));
    }
    
    include("dwz.php");