
<?php
include ("header.php");

include ("sidebar.php");
?>

<div class="main-wrapper">
    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">

		
	
	<?php
                    include('dbcon.php');
                    $id=$_GET['id'];
                    $sql="select * from bloglist where id=$id";
                    $res=mysqli_query($con,$sql);
                    $data=mysqli_fetch_array($res);
                    ?>


                    <h2 class="title mb-2"><?php echo $data['tittle'] ?></h2>
				    <div class="meta mb-3"><span class="time">last update</span><span class="date"><?php echo $data['datetime'] ?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			    </header>

			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="#"><img class="img-fluid" src="admin/<?php echo $data['image'] ?>" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure>
				    <p><?php echo $data['description'] ?></p>
				    
				</div>

				</div>
    </article>
</div>


<?php
include ("footer.php")?>

?>

