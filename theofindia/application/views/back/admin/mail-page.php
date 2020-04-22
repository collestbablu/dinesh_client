<table>

<tr >

<h4 style="color:#fff; text-align:center;"> Face Of India </h4>

</tr>

</table>

<table border="1" cellpadding="5">

<tr>

<td>News Posted Waiting For Approval</td>

<td>&nbsp;</td>

</tr>

<?php

$userQuery=$this->db->query("select *from news_reporter where news_reporter_id='$news_reporter_id'");

$getUser=$userQuery->row();

?>

<tr>

<td>Name</td>

<td><?=$getUser->name;?></td>

</tr>

<tr>

<td>News Title</td>

<td><?=$title;?></td>

</tr>

<tr>

<td>Content</td>

<td><?=$description;?></td>

</tr>

<?php

$dQuery=$this->db->query("select *from news_category where news_category_id='$news_category_id'");

$getd=$dQuery->row();



$QueryCity=$this->db->query("select *from news_sub_category where news_sub_category_id='$news_sub_category_id'");

$getCity=$QueryCity->row();

?>

<tr>

<td>State</td>

<td><?=$getd->name;?></td>

</tr>

<tr>

<td>city</td>

<td><?=$getCity->name?>

</td>

</tr>

</table>

<table>

<tr>



<h5> Thank You For Posting News In Face Of India. </h5>

</tr>

</table>







<style type="text/css">

table {

  border-collapse: collapse;

  width: 100%;

  font-size:14px;

}



td, th {

  border: 1px solid #dddddd;

  text-align: left;

  padding: 8px;

}



tr:nth-child(even) {

  background-color: #dddddd;

}

</style>





