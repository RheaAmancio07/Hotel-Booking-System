<div class="container mt-4 text-white">
	<?php
	check_message();

	?>
	<!-- <div class="panel panel-primary"> -->
	<div class="panel-body">
		<h1 class="text-center mb-3">LISTS OF USER</h1>
		<form action="controller.php?action=delete" Method="POST">
			<div class="btn-group mb-3">
				<a href="index.php?view=add" class="btn btn-success rounded mr-sm-2">New</a>
				<button type="submit" class="btn btn-danger rounded" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
			</div>
			<table id="example" class="table table-striped text-center text-white" cellspacing="0"  style="font-size: 20px;">

				<thead>
					<tr>
						
						<th>
							<input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
							ACCOUNT NAME
						</th>
						<th>USRNAME</th>
						<th>TYPE</th>
						<th>CONTACT #</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$mydb->setQuery("SELECT * FROM `tbluseraccount`");
					$cur = $mydb->loadResultList();

					foreach ($cur as $result) {
						echo '<tr>';
						
						echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="' . $result->USERID . '"/>
				  				<a  href="index.php?view=edit&id=' . $result->USERID . '">  <span class="glyphicon glyphicon-pencil">
				  				<a href="index.php?view=edit&id=' . $result->USERID . '">' . ' ' . $result->UNAME . '</a></td>';
						echo '<td>' . $result->USER_NAME . '</td>';
						echo '<td>' . $result->ROLE . '</td>';
						echo '<td>' . $result->PHONE . '</td>';
						echo '</tr>';
					}
					?>
				</tbody>

			</table>

		</form>
	</div>
	<!--End of Panel Body-->
	<!-- </div> -->
	<!--End of Main Panel-->

</div>
<!--End of container-->