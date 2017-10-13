

<h3></>

</form>

<div    style=color:#FF0000>



<form    action="post22222222.php"   method="post">
 

请选择后区号码最少选2个++：<br><hr>



<table border="2">
<tr>
<td>

<h3   style=color:#FF0000>
<input type="checkbox" name="0['0']" value="0">0<br />
<td>


<td>


<h3   style=color:#FF0000>
<input type="checkbox" name="O['O']" value="O">O<br />
<td>
<td>



<h3   style=color:#FF0000>

<input type="checkbox" name="1['1']" value="1">1<br />

<td>


<h3   style=color:#FF0000>

<input type="checkbox" name="2['2']"
value="2">2<br>

<td>
<td>


<h3   style=color:#FF0000>

<input type="checkbox" name="3['3']" value="3">3<br />

<td>
<td>

<h3   style=color:#FF0000>

<input type="checkbox" name="4['4']" value="4">4<br />

<td>
<td>

<h3   style=color:#FF0000>

<input type="checkbox" name="5['5']" value="5">5<br />

<td>
<td>


<h3   style=color:#FF0000>

<input type="checkbox" name="6['6']" value="6">6<br />

<td>
<td>
<tr>

<td>

<h3   style=color:#FF0000>

<input type="checkbox" name="7['7']" value="7">7<br />

<td/>
<td>



<h3   style=color:#FF0000>


<input type="checkbox" name="8['8']" value="8">8<br />

<td>
<td>
<td>

<h3   style=color:#FF0000>

<input type="checkbox" name="9['9']" value="9">9<br />
<td>


<td>
<td>


<h3   style=color:#FF0000>

<input type="checkbox" name="10['10']" value="10">10<br />

<td>
<td>


<h3   style=color:#FF0000>

<input type="checkbox" name="11['11']" value="11">11<br />

<td>
<td>


<h3   style=color:#FF0000>

<input type="checkbox" name="12['12']" value="12">12<br />
<td>
<td>


</div>


<br/>


<table border="2">
<tr>
<td>


<h3   style=color:#FF0000>




<input     style="font-size:40px"    type="submit"   value="开始选号" >



<br/>


</form>

<h4>两行三列后区：</h4>
<table border="1">
<tr>
  <td>


<?php

echo "<pre>";


echo "<center>";


echo "<h2  style=color:#FF0000  >大乐透POST勾选随机版后区</>";


echo "<h2  style=color:#FF0000 >您勾选的号码是</><td>";



print_r($_POST);   //打印出勾选号码

echo "<h2 style=color:#FF0000 >您勾选后随机的号码是</><br/>";


print_r(array_rand($_POST,2));  //在勾选号码中随机


echo "<br/>";

print_r(array_rand($_POST,2));  //在勾选号码中随机 



?>


<td/>

</tr>
</table>


































