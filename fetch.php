<html>
<head>
<style>
body{
}
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
 tr:nth-child(even) {
  background-color: #eee;
}
 tr:nth-child(odd) {
 background-color: #fff;
}
 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body style=" background-color: bisque;">

<div class="row">
<center>
<table style="border:2px solid white;background:white;padding:10px;" >
<thead>
<tr>

  <th>Country Name</th>
  <th>Affected</th>
  <th>Women</th>
  <th>Men</th>
  <th>Cured</th>
  <th>Deceased</th>
<tr>
<thead>

<tbody>
<?php
 $con = mysqli_connect('fdb20.biz.nf','3486858_corona','P0ll@ch!2000');
    if(!$con)
    {
        echo 'Not connected to database server';
    }
    if(!mysqli_select_db($con,'3486858_corona'))
    {
        echo 'databse not connected';
    }

if(isset($_POST['submit']))
{
    $country=$_POST['country'];
   
if( $country !="" )
{
    $query=" SELECT * FROM ctable WHERE country='$country'";
    
    $data=mysqli_query($con,$query) or die('error');

    
    if(mysqli_num_rows($data)>0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
           
            $country=$row['country'];
            $affected=$row['affected'];
            $women=$row['women'];
            $men=$row['men'];
            $cured=$row['cured'];
            $deceased=$row['deceased'];

            ?>
            <tr>
            
            <td><?php echo $country;?></td>
            <td><?php echo $affected;?></td>
            <td><?php echo $women;?></td>
            <td><?php echo $men;?></td>
            <td><?php echo $cured;?></td>
            <td><?php echo $deceased;?></td>
            
            </tr>
            <?php
        }
       
    }
    else
    {
     ?>
     <tr>
        <td>Records NOt found</td>
     </tr>   
     <?php
    }

}

}

?>

</tbody>

</table>
</center>
</div>

</body>
</html>