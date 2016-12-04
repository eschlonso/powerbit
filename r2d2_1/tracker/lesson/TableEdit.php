<html>
<head>
<style >
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.editbox
{
display:none
}
td
{
padding:5px;
}
.editbox
{
font-size:14px;
width:270px;
background-color:#ffffcc;
border:solid 1px #000;
padding:4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
cursor:pointer;
}
.head
{
background-color:#333;
color:#FFFFFF

}
</style>



<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&fecha='+first+'&op='+last;
$("#first_"+ID).html('<img src="load.gif" />'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>


</head>

<body>



<table width="100%">
<tr class="head">
<th>First Name</th><th>Last Name</th>
</tr>
<?php
include('db.php');
$sql=mysql_query("select * from fullnames");
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
?>
<tr id="<?php echo $id; ?>" class="edit_tr">

<td class="edit_td" width="50%">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $firstname; ?></span>
<input type="text" value="<?php echo $firstname; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td" width="50%">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $lastname; ?></span>
<input type="text" value="<?php echo $lastname; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

</tr>
<?php
}
?>
</table>


</body>
</html>