<div class="container mt-4 text-white">
	<?php
	check_message();

	?>
	<!-- <div class="panel panel-primary"> -->
	<div class="container">
		<h1 class="text-center"><strong>LIST OF ACCOMODATION</strong></h1>
		<form action="controller.php?action=delete" Method="POST">
			<div class="btn-group mb-3">
				<a href="index.php?view=add" class="btn btn-success rounded mr-sm-2">New</a>
				<button type="submit" class="btn btn-danger rounded" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
			</div>
			<table id="example" class="table table-striped text-center text-white" cellspacing="0" style="font-size: 20px;">

				<thead>
					<tr>

						<th class="text-center" width="100">
							<input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
							ACCOMODATION
						</th>
						<th class="text-center" width="100">DESCRIPTION</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$accom = new Accomodation();
					$cur = $accom->listOfaccomodation();

					foreach ($cur as $result) {
						echo '<tr>';

						echo '<td width="20%" align="left"><input type="checkbox" name="selector[]" id="selector[]" value="' . $result->ACCOMID . '"/>
				  				<a  href="index.php?view=edit&id=' . $result->ACCOMID . '">  <span class="glyphicon glyphicon-pencil">
				  				<a href="index.php?view=view&id=' . $result->ACCOMID . '">' . ' ' . $result->ACCOMODATION . '</a></td>';
						echo '<td>' . $result->ACCOMDESC . '</td>';
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