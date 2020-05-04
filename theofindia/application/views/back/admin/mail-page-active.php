<?php
$newsQuery=$this->db->query("select *from news where news_id='$id'");
$getnews=$newsQuery->row();
?>
<table>
<tr>
Face Of India
</tr>
</table>
<table border="1" cellpadding="5">
<tr>
<td>News Posted  Approved</td>
<td>&nbsp;</td>
</tr>
<?php
$userQuery=$this->db->query("select *from admin where admin_id='$getnews->news_uploader_id'");
$getUser=$userQuery->row();
?>
<tr>
<td>Name</td>
<td><?=$getUser->name;?></td>
</tr>
<tr>
<td>News Title</td>
<td><?=$getnews->title;?></td>
</tr>
<tr>
<td>Content</td>
<td><?=$getnews->description;?></td>
</tr>
<?php
$dQuery=$this->db->query("select *from news_category where news_category_id='$getnews->news_category_id'");
$getd=$dQuery->row();

$QueryCity=$this->db->query("select *from news_sub_category where news_sub_category_id='$getnews->news_sub_category_id'");
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
<tr>

<td>Published Date</td>

<td><?php echo date("F j, Y", $getnews->publish_timestamp);?>
</td>

</tr>
<tr>
<td>View News</td>
<td><a href="https://thefaceofindia.in/home/news_description/<?=$id?>">Click</a>
</td>
</tr>
</table>
<table>
<tr>
Thank You For Posting News In Face Of India.
</tr>
</table>


