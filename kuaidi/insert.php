
<html>
<head>
<meta charset="utf-8">
<title>增</title>
</head>

<body>
	
<table width="100%" height="100%" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">
		  <form id="form2" name="form2" method="post" action="insert2.php" >		 
			寄件人姓名:<input type="text" name="staname"><br>
		    寄件人电话:<input type="text" name="statel"><br>
		    寄件人地点:<input type="text" name="staadress"><br>
		    收件人姓名:<input type="text" name="endname"><br>
		    收件人电话:<input type="text" name="endtel"><br>
		    收件人地点:<input type="text" name="endadress"><br>
			快递单号:<input type="text" name="number"><br> 
		    <input type="submit"  value="提交" onclick="return check()">
		  </form>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
	<script >
		var x=document.getElementsByTagName("input");
		function check() {	
		for(var i=0 ; i<x.length-1; i++){
			switch(i){
				case 1:	if(!/^\d+$/.test(x[i].value)||x[i].value.length!=11){
				alert("必须为11位正整数！！！");
				x[i].focus();	
				return false;
			}break;
				case 4:	if(!/^\d+$/.test(x[i].value)||x[i].value.length!=11){
				alert("必须为11位正整数！！！");
				x[i].focus();
					return false;
			}break;
				case 6:	if(!/^\d+$/.test(x[i].value)||x[i].value.length!=10){
				alert("必须为10为正整数！！！");
				x[i].focus();	
					return false;
			}break;
			}
				if (x[i].value == ""){
		        alert("请输入完整！！！");
			    x[i].focus();	 
				return false;
		    }
		}}
   </script>
</body>
</html>