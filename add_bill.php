 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>

        <!--/. NAV TOP  -->
  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                      Bill Form
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Bill </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<script>

function call()
{
pid=document.form1.purchase_id.value;
document.location="bill.php?pid="+pid;
}
</script>
        <form  id="formID" name="form1" method="post" action="bill.php">
          <table width="375" height="160" border="0" align="center">
            <tr>
              <td width="186">Purchase Farmer Name</td>
              <td width="179"><select name="purchase_id" id="purchase_id" class="validate[required] form-control" >
                <option value="">Select</option>
                <?php
  include('dbconnect.php');
   $sn=1;
   $pid=$_REQUEST['pid'];
  $sql="select * from purchase p,farmer f where p.farmer_id=f.farmer_id ";
  $res=mysqli_query($conn,$sql);
 
  while($row=mysqli_fetch_array($res))
  {
  ?>
                <option value="<?php echo $row['purchase_id'];?>" <?php if($row['purchase_id']==$pid) {?> selected <?php }?>><?php echo $row['farmer_name'];?></option>
                <?php
  }
  ?>
              </select></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Submit">
                  </div></td>
              </tr>
          </table>
        </form>
   </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
			
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   <?php include('val.php');?>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
