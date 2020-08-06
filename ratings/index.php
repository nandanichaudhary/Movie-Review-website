<!DOCTYPE html>
<html>
<head>
	<title>Rating system</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

  	<link rel="stylesheet" href="js/ratingstar.css">  	
</head>


<body class="container">
<div class="row">
<div class="col-md-12">
	<div class="form-group">
		<div class="form-group has-success has-feedback">
		    <label for="name">Name :</label>
		    <input type="text" class="form-control" id="name">		    
	  	</div>
	  	<div class="form-group has-success has-feedback">
		    <label for="email">Movie Name :</label>
		    <input type="email" class="form-control" id="email">		    
	  	</div>	
		   
	    <label for="email"> Rating :</label>	  	
	  	<div class='starrr' id='rating-student'></div> 	<br>
	  	<input type="button" id="submit" class="btn btn-success" value="SUBMIT">
	  	<div class="msg"></div>
	</div>	
</div>

<hr>



<h2>Details</h2>
<table class="table table-condensed">
	<thead>
	  <tr>
	    <th>Name</th>
	    <th>Movie Name</th>		
	    <th>Rating</th>
	  </tr>
	</thead>
	<tbody>


	<?php 
		$conn = mysqli_connect('localhost','root','','student_db');
		if($qry = mysqli_query($conn,"SELECT * FROM records")){
			while($show = mysqli_fetch_assoc($qry)){
				echo "<tr>";
					echo "<td>".$show['name']."</td>";					
					echo "<td>".$show['email']."</td>";					
					if($show['rating']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
					if($show['rating']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
				echo "</tr>";
			}
		}
	?>
	</tbody>
</table>
	
</div>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/ratingstar.js"></script>

<script>

var rate;
$('#rating-student').starrr({
  change: function(e, value){ 
  	rate = value;  	       
    if (value) {
      $('.your-choice-was').show();      
    } else {
      $('.your-choice-was').hide();
    }
  }
});

$("#submit").click(function(){	
	var name = $('#name').val();
	var email = $('#email').val();	
	$.ajax({		
        url: "rating.php",
        type: 'post',
        data: {v1 : name, v2 : email, v3 : rate},
        success: function (status) {
        	if(status == 1){
            	$('.msg').html('<b>Student Inserted !</b>');
        	}else{
            	$('.msg').html('<b>Server side error !</b>');        		
        	}
        }
    });

});
</script>
</body>
</html>