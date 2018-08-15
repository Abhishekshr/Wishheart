<?php
$a1=@$_GET[first];
$a2=@$_GET[last];
$a3=@$_GET[username];
$a4=@$_GET[password];
$a5=@$_GET[email];
$a6=@$_GET[mobile];
$a7=@$_GET[date];




 mysql_connect("localhost","root");

 mysql_select_db("wishheart");

 $res=mysql_query("select * from data");

 $cnt=mysql_num_rows($res);
 	for($i=0;$i<$cnt;$i++)
	{
	$e1=mysql_result($res,$i,"username");
	}


	if($a1=='' || $a2=='' || $a3=='' || $a4=='' || $a5=='' || $a6=='' || $a7=='')
	{
	 header("location:index.php?y=2");
	}



	else
	{mysql_query("insert into data values('$a1','$a2','$a3','$a4','$a5',$a6,'$a7')");
	 header("location:index.php?y=1");
	}



?>