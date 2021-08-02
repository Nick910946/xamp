

<?php
include("header.php");
include("sidebar.php");
?>

					<?php

					include "../dbe.php";
					 $id = $_GET['edit'];
					 $a = "select * from assingned_task where id = $id";

					 $b = mysqli_query($sop,$a);
					 $c = mysqli_fetch_array($b);
					 // echo "<pre>";

					 // print_r($c);


					?>



           
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Task</h1>
                    </div>
                </div>
                <form method="post" action="task_update.php">
                <!-- /.container-fluid -->
                <div class="container-fluid">
                	<div class="container">
                		<div class="row mb-3">
                			<div class="col-md-4 shadow-lg">
                				<h2 class="mt-3">Employees</h2>
                				<hr class="sidebar-divider">
                				<?php
                				include "../dbe.php";
                				$q = "select * from employee where role In('employee')";
                				$p = mysqli_query($sop,$q);
                				while($f = mysqli_fetch_array($p))
                				{ 
                				?>
                                 
                				<div class="row mb-3">
                					<div class="col-md-1">
                						<input type="checkbox" name="id" value="<?php echo $f['id']?>"
                                    <?php
                                        if('$id'){

                                            echo "checked";
                                        }


                                        ?>
                                        >
                					</div>
                					<div class="col-md-11">
                				        <h5 class="text-capitalize"><input type="text" name="first_name" value="<?php echo $f['first_name'] ?>">&nbsp;

                				       <input type="text" name="last_name" value="<?php echo $f['last_name'] ?>">
                				       
                			            </h5>
                			        </div>
                			    </div>
                				<?php
                				} 
                				?>
                			</div>
                			<div class="col-md-1">
                			</div>
                			<div class="col-md-7 shadow-lg">
                				<textarea class="form-control" rows="5" cols="6"  placeholder="Type the Task here..." name="task"><?php echo $c['task']?></textarea>

                                <!-- admin ki id le rhe h start -->
                                
                                <input type="text" name="assined_by" value="<?php echo $_SESSION['id'] ?>">
                                <!-- admin ki id le rhe h end -->
                				<div class="d-grid gap-2">
                					<button class="btn shadow m-3" type="submit" style="background: #030618; color: white;">update</button>

                				</div>
                			</div>
                			



                		</div>
                	</div>
                </form>
               
            <!-- End of Main Content -->




</div>




<?php
include("footer.php");
?>  