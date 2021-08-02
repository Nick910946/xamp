

<?php
include("header.php");
include("sidebar.php");
?>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
     
  <form action="emp_insert.php" method="post">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" >
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control"> 
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>
              

            

            
            <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
          </div>

            
           <div class="from-group">
            <label>Role:</label> 
            <select class="form-control" name="role">
                  <option value="select">Select</option>
                  <option value="Employee">Employee</option>
                  <option value="Admin">Admin</option>
           </select>
                  
            </div><br>
    

          

      </div>
    
    <div class="col-md-4 bg-light">
      <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control">
          </div>

         <div class="from-group">
          <label>Age :</label>
          <input type="text" name="age" class="form-control">
        </div><br>

        <div class="from-group">
            <label>Department:</label> 
            <select class="form-control" name="department">
                  <option value="select">Select</option>
                  <option value="HR">HR</option>
                  <option value="CS">CS</option>
                  <option value="IT">IT</option>
                 
                    </select>
                  
            </div><br>


         
        <div class="from-group">
          <label >Gender:</label><br>
          <input type="radio" name="gender" value="male" >Male&nbsp;
          <input type="radio" name="gender" value="female" >FeMale&nbsp;
          <input type="radio" name="gender" value="other" >Other
                       
        </div><br>
           

        

      </div>

    </div><!-----row-->

       <button type="submit" class="btn btn-warning text-dark">Submit</button>
  
  </form>
</div><!------container----->




<?php
include("footer.php");
?>  