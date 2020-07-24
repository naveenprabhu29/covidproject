<?php
    $country = $_POST['countryy'];
    $affected=$_POST['affectedd'];
    $women=$_POST['womenn'];
    $men=$_POST['menn'];
    $cured = $_POST['curedd'];
    $deceased=$_POST['deceasedd'];
    $con = mysqli_connect('fdb20.biz.nf','3486858_corona','P0ll@ch!2000');
    if(!$con)
    {
        echo 'Not connected to database server';
    }
    if(!mysqli_select_db($con,'3486858_corona'))
    {
        echo 'databse not connected';
    }



    
     $sql=" UPDATE ctable set affected='$affected',women='$women',men='$men',cured='$cured',deceased='$deceased' WHERE country='$country'  ";
    
    if(!mysqli_query($con,$sql))
    {
        echo 'Not inserted';
    }
    else{
        echo'inserted';
    }
   

?>