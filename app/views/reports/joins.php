<?php require_once '../app/views/templates/header.php' ?>

<h1> join Reports! </h1>

 <table class='table table-striped table-condensed'>
			<tr>
										<th>username</th>
										 <th>/email</th>
										 <th>/phone</th> 
										 <th>/date</th> 
										 <th>/birthdate</th> 
	 </tr>
	 
					 <?php echo $data['list']?> 
					 <?php foreach ($data['list'] as $items){ ?>
					 
					 <tr>

														 <td><?=$items['username']?></td>
														 <td><?=$items['email']?></td>
														 <td><?=$items['phone']?></td>
														 <td><?=$items['date']?></td>
														 <td><?=$items['birthdate']?></td>
														 <td><a href="/remind/edit/<?=$items['id']?>"><button type="button" class="btn btn-outline-info">Edit</button>
	 </a>        
		 </td> 
			 </tr> 
				 <?php }?>
					              </table> 

<?php require_once '../app/views/templates/footer.php' ?>