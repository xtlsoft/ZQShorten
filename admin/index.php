<?php
    /**
     * 
     * Writen by xtl.
     * 
     * Please Require a .htpasswd
     * file. This can protect th-
     * -is panel.
     * 
    **/
    if(isset($_POST['hturl']) && $_POST['hturl']!=""){
        file_put_contents("../.hturls",$_POST['hturl']);
        echo "<script>alert('Changed Success.');window.location.href='/admin'</script>";
    }
?>
<html>
<head>
<title>ZQShorten Administrator's Panel</title>
<meta charset=utf-8>
<style>
.main{
    border:3px solid yellow;
    background:#005522;
    padding:8px;
    width:550px;
    margin:0 auto;
    color:white;
}
</style>
</head>
<body bgcolor="black">
<table width="100%" height="100%"><tr><td valign="middle">
<div class="main">
    <form method="post">
        <b><h2 align="center">ZQShorten Admin</h2></b>
        <textarea name="hturl" style="width:540px;height:100px;"><?php echo file_get_contents("../.hturls"); ?></textarea>
        <br /><br />
        <center><input type="submit" value="Edit" /> &nbsp;<span onclick="window.location.href='/zqjs';">Close</span></center>
    </form>
</div>
</td></tr></table>
<iframe style="position:fixed;bottom:0;right:0;" frameborder="no" border="0" marginwidth="0" marginheight="0" width=298 height=52 src="https://music.163.com/outchain/player?type=2&id=38592976&auto=1&height=32"></iframe>
</body>
</html>