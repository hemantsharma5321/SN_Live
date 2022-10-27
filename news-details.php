<?php
   include("./includes/config.php");
    $postid=$_GET['nid'];
        echo "<h1>$postid</h1>";

    $sql="select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id= $postid ";

    $query=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    echo $row['PostImage'];

   ?>
   <div news-details-container>
    div
        <h2><?php echo $row['posttitle']?></h2>
        <img src="admin/postImages/6dd1c1e47a5053f311ee233403fbdadejpeg " alt="not avilable">
   </div>