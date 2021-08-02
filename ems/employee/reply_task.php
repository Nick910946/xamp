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
<style>

.reply{

    margin-left: 500px;
    
}
.reply1{

        margin-left: 50px;

}

</style>

<?php 

                include "../dbe.php";

                $a = "select * from reply_task";
                $b = mysqli_query($sop,$a);
               while($c = mysqli_fetch_array($b)){

                ?>
                <h3 class="reply1 text-primary">Employee msg:- </h3>
                <p class="text-dark reply1"> <?php echo $c['reply']?></p>
  

  
            <p class="text-dark reply1"><p class="text-warning">Task:-</p>&nbsp; <?php echo $c['task']?></p>


                <h3 class="reply text-success">Admin msg:- </h3>
                <p class="text-dark reply"><?php echo $c['adminmessage']?></p>

          <?php
      }

          ?>
             
                

<?php 
include "footer.php";
?>