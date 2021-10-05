<?php 

include ("header.php");
include ("sidebar.php");
?>

<div class="container-fliud">
    
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

           
        <!-- Begin Page Content -->
        <div class="container-fluid">


                    <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Task</h1>
                </div>
                
                <!-- /.container-fluid -->
                <div class="container-fluid">
                    <div class="container">


                        <form method="post" action="reply_insert.php">
                                <?php
                                    include ("../dbe.php");
                                    $t_id = $_GET['t_id'];
                                    $a = "select * from assingned_task where t_id = '$t_id'";
                                    $b = mysqli_query($sop,$a);
                                    $c = mysqli_fetch_array($b);
                                            
                                ?>

                               
                                   <input type="text" name="task" class="mt-3 text-dark col-md-6 " value="<?php echo $c['task']?>">


                                    <input type="hidden" name="t_id" value="<?php echo $c['t_id']?>"> 

                                    <input type="text" name="reply_by" value="<?php echo $c['id']?>">
                                        
                                        <div class="col-md-8 shadow-lg  my-5 ">
                                            <textarea class="form-control" rows="5" cols="1"  placeholder="Type the response about task here..." name="reply"></textarea>

                                            
                                            <div class="d-grid gap-2">
                                            <button class="btn shadow m-3" type="submit" style="background: #030618; color: white;">Submit</button><br><br>

                                            </div>
                                        
                    </div>
                            
                </form>

                </div>
            </div>
           

    </div>
            <!-- End of Main Content -->

</div>

<div class="container">

<?php 

                include "../dbe.php";
               
                $a1 = "select * from  reply_task where t_id = $t_id";
                $b1 = mysqli_query($sop,$a1);
               while($c1 = mysqli_fetch_array($b1)){

                ?>
           
            <div class="row">
                <div class="col-md-6">
                   
                   <h3 class=" text-primary">Employee msg:- </h3>
                    <p class="text-dark "> <?php echo $c1['reply']?></p>
                </div>
                    <div class="col-md-6"><br><br><br>
                        <h3 class="text-success">Admin msg:- </h3>
                    
                        <p class="text-dark "><?php echo $c1['adminmessage']?></p>
                    </div>

               </div>

          <?php
          
            }

          ?>
             
</div>               

<?php 
include "footer.php";
?>
