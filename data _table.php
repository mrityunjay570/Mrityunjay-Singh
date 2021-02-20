<html>
       <head>
           <title></title>
		   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
		   <style>
		   .box-body{
			  background-color:silver;
              border:solid 0px;			  
		   }
		   .table{
			   background-color:blue;
			  border:solid 2px blue; 
			   
		   }
		   th{
			   background-color:lightgreen;
			   border:solid 0px;
			   
		   }
		 td{
			 background-color:lightyellow;
			 
		 } 
		   </style>
       </head>
	    <body>
	<center>
       <div class="box-body table-responsive no padding">
	      <table class="table table-hover" border="0px" height="200px" width="500px">
		   <tr>
		      <th>id</th>
			  <th>name</th>
			  <th>father</th>
			  <th>mother</th>
			  <th colspan="2">oprations</th>
		   </tr>		   
      <tbody>
	  <?php
              include "connection.php";
              $sql = "SELECT * FROM `new_create`";
              $result = $con->query($sql);
              if(mysqli_num_rows($result)>0)
              {
	           while($row=mysqli_fetch_array($result))
		
           	{		
          ?>
  <tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["father"];?></td>
	<td><?php echo $row["mother"];?></td>
	<td><a href="file name">edit</a></td>
	<td><a href="file name">delete</a></td>
  </tr>
</tbody>
<?php
}
}
?>	
		  </table>
	   </div>	
	</center>
    </body>
</html>
