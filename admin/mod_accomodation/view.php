<?php

$_SESSION['id'] = $_GET['id'];
$rm = new Accomodation();
$result = $rm->single_accomodation($_SESSION['id']);

?>
<div class="container mt-4">

	<div class="container">

		<div>
			<h1 class="text-center">Accomodation Details</h1>
		</div>

		<table class="table table-hover">

			<td width="30"><strong>NAME </strong></td>
			<td><?php echo ': ' . $result->ACCOMODATION; ?></td>
			</tr>
			<tr>
				<td width="30"><strong>DESCRIPTION </strong></td>
				<td><?php echo ': ' . $result->ACCOMDESC; ?></td>
			</tr>
			
			<tr>
				<td> <input type="button"  value="&laquo BACK" class="btn btn-primary mt-3" onclick="window.location.href='index.php'"></td>
			</tr>
		</table>
	</div>

</div>

<?php unset($_SESSION['id']) ?>