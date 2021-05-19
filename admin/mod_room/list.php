<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:100%;  margin-left:280px;">
	<div class="container text-white justify-content-center float-right" >
		<?php
		check_message();

		?>
		<!-- <div class="panel panel-primary"> -->
		<div class="container mx-auto">
			<h3 class="text-center mb-4"><strong>LISTS OF ROOMS</strong></h3>
			<form action="controller.php?action=delete" Method="POST" style="margin-left: 10%;">
				<div class="btn-group mb-3">
					<a href="index.php?view=add" class="btn btn-success rounded mr-sm-2">New</a>
					<button type="submit" class="btn btn-danger rounded" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				<table id="example" style="font-size:18px;" class="table table-striped table-hover table-responsive text-center text-white " cellspacing="0">

					<thead>
						<tr>

							<th class="text-center " >
								<input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
								Image
							</th>
							<!-- <th>Room#</th> -->
							<th class="text-center" width="220">Room</th>
							<!-- <th class="text-center" width="120">Description</th> -->
							<th class="text-center" width="120">Accomodation</th>
							<th class="text-center" width="90">Person</th>
							<th class="text-center" width="120">Price</th>
							<!-- <th># of Rooms</th> -->
						</tr>
					</thead>
					<tbody>
						<?php
						$mydb->setQuery("SELECT *,ACCOMODATION FROM tblroom r, tblaccomodation a WHERE r.ACCOMID = a.ACCOMID ORDER BY  ROOMID ASC ");

						$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							echo '<tr>';

							echo '<td class="text-center"  width="120"><input type="checkbox" name="selector[]" id="selector[]" value="' . $result->ROOMID . '"/> 
				  				<img src="' . $result->ROOMIMAGE . '" width="60" height="40" title="' . $result->ROOM . '"/></td>';
							// echo '<td><a href="index.php?view=edit&id='.$result->ROOMID.'">' . ' '.$result->ROOMNUM.'</a></td>';
							echo '<td><a class="text-decoration-none text-white" href="index.php?view=edit&id=' . $result->ROOMID . '">' . $result->ROOM . ' (' . $result->ROOMDESC . ')</a></td>';
							// echo '<td>'. $result->ROOMDESC.'</td>';
							// echo '<td>'. $result->ACCOMODATION.' ('. $result->ACCOMDESC.')</td>';
							echo '<td>' . $result->ACCOMODATION . '</td>';
							echo '<td>' . $result->NUMPERSON . '</td>';

							echo '<td> &euro;' . $result->PRICE . '</td>';
							// echo '<td>'.$result->ROOMNUM.' </td>';
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

	<div class="modal fade" id="myModal" tabindex="-1">

	</div>
</div>