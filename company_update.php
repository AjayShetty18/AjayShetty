<?php
$company_id=$_POST['company_id'];
$company_name=$_POST['company_name'];
$company_address=$_POST['company_address'];
$company_email=$_POST['company_email'];
$company_contact_no=$_POST['company_contact_no'];
$company_type=$_POST['company_type'];

include('dbconnect.php');

$sql="update company set company_name='$company_name',company_address='$company_address',company_email='$company_email',company_contact_no='$company_contact_no',company_type='$company_type' where company_id='$company_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("updated.....");
document.location="company_view.php";
</script>

