<?php
include 'dbinfo.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_about = "SELECT * FROM about";
$about_con = mysqli_query($con, $sql_about);
if (!$about_con) {
    die("Query failed: " . mysqli_error($con));
}
?>

<html>
<head>
<title>Presentation</title>

<style>
.banner{
    background:black;
    color:white;
    text-align: center;
    padding:200px 0;
}
    </style>
</head>
<body>



<div class="banner">

<?php  while ($about_data = mysqli_fetch_assoc($about_con)) {  ?>
    <?php echo $about_data['content']; ?>
<?php } ?>

</div>

</body>

</html>
