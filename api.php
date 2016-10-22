<?php
    /**
     * 
     * The api.
     * By xtl.
     * All rights served.
     * 
     */
    if(isset($_GET) && $_GET!=false){
        if(isset($_GET['long']) && isset($_GET["short"]) && isset($_GET['refer'])){
            file_put_contents("./.hturls",file_get_contents("./.hturls")."\n".$_GET["short"]." ".$_GET['long']);
            header("location:".$_GET['refer']);
            echo "<script>window.location.href='".$_GET['refer']."'</script>";
        }else{
            die('Wrong Request! Please read the <a href="/?ac=document">document</a>!');
        }
    }else{
        header("location:/?ac=document");
    }
?>