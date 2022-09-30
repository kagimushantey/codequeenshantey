<!DOCTYPE html>
<html lang="en">

<head>
<title>Payment</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">My Payments</li>
          </ol>

          <!-- Page Content -->
          <h1>My Payments</h1>
          <hr>
<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
</div>
<?php } ?>

<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
<?php } ?>
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                     
                      <th>Amount</th>
                      <th>Bank</th>
                      <th>Payee</th>
                      <th>Room</th>
                      <th>Date</th>
                    </tr>
  
  <?php
  // foreach($data as $row){
    ?>
  <tr>
                        <td><?php echo $data->amount?></td>
                         <td><?php echo $data->bank?></td>
                          <td><?php echo $data->payee?></td>
                           <td><?php echo $data->room?></td>
                             <td><?php echo $data->date?></td>
                       
                       
                    </tr>
                    <?php
                     // }   
                    
                    ?>
                  </table>
      
              </div>
            </div>

          </div>


        </div>



                

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>

  </body>

</html>
