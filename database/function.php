<?php
function getCats(){
    global $con;
    $getCatQuery="select * from categories";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult)) {
        $title = $row['cat_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
function getBrands(){
    global $con;
    $getCatQuery="select * from brands";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult)) {
        $title = $row['brand_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
function getCats1(){
    global $con;
    $getCatQuery="select * from categories";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult)) {
        $title = $row['cat_title'];
        echo "<option>$title</option>";
    }
}
function getBrands1(){
    global $con;
    $getCatQuery="select * from brands";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult)) {
        $title = $row['brand_title'];
        echo "<option>$title</option>";
    }
}