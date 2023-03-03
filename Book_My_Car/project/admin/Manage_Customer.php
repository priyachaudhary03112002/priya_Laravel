<?php
ob_start();
function fetch_data()
{
$output= '';
$connect= mysqli_connect("localhost","root","","bookmycar");
$sel= "select * from customer";
$exe= mysqli_query($connect, $sel); 
while($fetch= mysqli_fetch_array($exe))
{
	$output .= '
<tr>
	<td>'.$fetch['Customer_ID'].'</td>
    <td>'.$fetch['Name'].'</td>
	<td>'.$fetch['Username'].'</td>
	<td>'.$fetch['Email'].'</td>
</tr>
			';
}
return $output;
}
?>

<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Customer</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <form action="" method="post">
<input type="submit" name="gen_pdf" value="Generate Pdf File Of Data">

</form>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Customer
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow-x:auto;">
                           
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Customer_ID</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Id_Proof_No</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                            <th>SELECT</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($customer_arr))
									{
										foreach($customer_arr as $data)
										{
									?>
                                        <tr class="odd gradeX">
                                            <th><?php echo $data->Customer_ID?></th>
                                            <th><?php echo $data->Name?></th>
											<th><?php echo $data->Username?></th>
											<th><?php echo $data->Password?></th>
											<th><?php echo $data->Email?></th>
											<th><?php echo $data->Mobile?></th>
											<th><?php echo $data->Address?></th>
											<th><?php echo $data->Id_Proof_No?></th>
											<th><?php echo $data->Status?></th>
                                            <th><img src="../website/img/upload/customer/<?php echo $data->Image;?>" width="50px" height="25px" ></th>
                                            <td><a href="delete?btn_cust_id=<?php echo $data->Customer_ID;?>" class="btn btn-danger">Delete</a></td>
                                            <td><a href="Status?btn_cust_id=<?php echo $data->Customer_ID;?>" class="btn btn-primary"><?php echo $data->Status?></a></td>
                                            
                                        </tr>
                                    <?php
										}
									}
									?>  
                                    </tbody>
                                </table>
                                    
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
               
    </div>
    </div>
   
 <?php
  include_once('footer.php');
  
  /* THis is sir created button of edit and delete which is not highlighted on frontend screen when fetching data
   in brwoser so i kept it in this comment for future reference
  <th><a href="#" class="btn btn-danger">Delete</a></th>
  <th><a href="#" class="btn btn-primary">Edit</a></th>*/
  ?>
  <?php
if(isset($_REQUEST['gen_pdf']))
{
    ob_start();
    require_once('tcpdf1/tcpdf.php');
	//require __DIR__ . '/vendor/autoload.php';
	// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('Generate PDF file of data');
// set default header data
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// set default monospaced font
$pdf->SetDefaultMonospacedFont('helvetica');
// set margins
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->SetFont('helvetica', '', 12);
$content = '';
$content .= ' 
			<h1 align="center"><img src="download.png" align="center" height="100px" width="100px"></h1>
			<h1 align="center"> Export Html table to PDF</h1>
			
			<h3 align="center"> </h3>
			<table border="1" callspacing="0" callpadding="5" style="color:red">
			
				<tr>
					<th width="5%">Id</th>
					<th width="20%">Name</th>
					<th width="30%">username</th>
					<th width="30%">email</th>
				</tr>
';	
$content .= fetch_data();
$content .= '</table>';	
$pdf->writeHTML($content);
ob_flush();
$pdf->Output('sample.pdf', 'I');
ob_end_flush();
}
?>
