<style>
    <?php include './css/mainNews.css' ?>
</style>
<?php
if (isset($_GET['$pageno'])) {
    $pageno = $_GET['$pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
$result = mysqli_query($conn, $total_pages_sql);

$total_rows = mysqli_fetch_array($result)[0];

$total_pages = ceil($total_rows / $no_of_records_per_page);

$query = mysqli_query($conn, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 
order by tblposts.id desc 
 LIMIT $offset, $no_of_records_per_page");
?>

<div class="main-news">

    <div class="post">

        <?php while ($row = mysqli_fetch_array($query)) { ?>
           
            <div class="card" onclick="navigateToDetails('<?php echo $row['pid']?>')">
                <img class="card-img" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['pid']); ?>">

                <p><?php echo ($row['posttitle']) ?></p>
                <p>Sat, 15 Oct 2022 10:21 AM</p>


            </div>
        <?php } ?>


    </div>
    <br>
    <script>
        const navigateToDetails = (pid) => {
            
            window.location.href = `./news-details.php?nid=${pid}`;
        }
    </script>

</div>