<html>
<head>
<title> Caluculator </title>

</style>
</head>
<body>
<center>
<h3><em> CALCULATOR </em> </h3>
<form name="cal">
<table align="center">
<tr>
<td colspan="4"> <input type="text" name="display"> </td>
</tr>

<tr>
<td> <input type="button" onClick="cal.display.value +='1'" value="1">  </td>
<td> <input type="button" onClick="cal.display.value +='2'" value="2">  </td>
<td> <input type="button" onClick="cal.display.value +='3'" value="3">  </td>
<td> <input type="button" onClick="cal.display.value +='+'" value="+">  </td>
</tr>

<tr>
<td> <input type="button" onClick="cal.display.value +='4'" value="4">  </td>
<td> <input type="button" onClick="cal.display.value +='5'" value="5">  </td>
<td> <input type="button" onClick="cal.display.value +='6'" value="6">  </td>
<td> <input type="button" onClick="cal.display.value +='-'" value="-">  </td>
</tr>

<tr>
<td> <input type="button" onClick="cal.display.value +='7'" value="7">  </td>
<td> <input type="button" onClick="cal.display.value +='8'" value="8">  </td>
<td> <input type="button" onClick="cal.display.value +='9'" value="9">  </td>
<td> <input type="button" onClick="cal.display.value +='*'" value="*">  </td>
</tr>

<tr>
<td> <input type="button" onClick="cal.display.value +='0'" value="0">  </td>
<td> <input type="reset"  onClick="cal.display.value +='c'" value="c">  </td>
<td> <input type="button" onClick="cal.display.value +='/'" value="/">  </td>
<td> <input type="button" onClick="cal.display.value =eval(cal.display.value)" value="=">  </td>
</tr>

</table>
</form>
</center>
</body>
</html>
