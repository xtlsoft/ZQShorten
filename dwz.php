<?php
    if(isset($_GET['domain']) && $_GET['domain']!=""){
        file_put_contents("./.hturls",file_get_contents("./.hturls")."\n".$_GET['shorten']." ".$_GET['domain']);
        echo "<script>alert('Success added domain!');window.location.href='/';</script>";
    }
?>
<html>
<head>
<title>ZQShorten Service</title>
<meta charset=utf-8>
<style>
.main{
    border:3px solid yellow;
    background:#005522;
    padding:8px;
    width:350px;
    margin:0 auto;
    color:white;
}
</style>
</head>
<body bgcolor="black">
<table width="100%" height="100%"><tr><td valign="middle">
<div class="main">
    <form>
        <b><h2 align="center">ZQShorten</h2></b>
        Long domain: &nbsp; &nbsp; <input type="text" name="domain" placeholder="Domain..." /><br />
        https://go.zqjs.tk/<input type="text" name="shorten" placeholder="ShortenDomain..." />
        <br /><br />
        <center><input type="submit" value="Shorten!" /> &nbsp;<span onclick="window.location.href='/zqjs';">Close</span></center>
    </form>
</div>
</td></tr></table>
<iframe style="position:fixed;bottom:0;right:0;" frameborder="no" border="0" marginwidth="0" marginheight="0" width=298 height=52 src="https://music.163.com/outchain/player?type=2&id=38592976&auto=1&height=32"></iframe>
</body>
</html>