<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo isset($title) ? $title   :  ''; ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- WEB_ROOT means get the first file directory or location ex. dragonhouse/folder/file.php -->
	<!-- <link href="<?php echo WEB_ROOT; ?>admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>admin/css/jquery.dataTables.css">
<link href="<?php echo WEB_ROOT; ?>admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->

	<!-- <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/bootstrap-modal.js"></script>

<script type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script> -->
</head>
<script type="text/javascript">
	//execute if all html elemen has been completely loaded
	$(document).ready(function() {

		//specify class name of a specific element. click event listener--
		$('.cls_btn').click(function() {
			//access the id of the specific element that has been click	
			var id = $(this).attr('id');
			//to debug every value of element,variable, object ect...
			console.log($(this).attr('id'));

			//execute a php file without reloading the page and manipulate the php responce data
			$.ajax({

				type: "POST",
				//the php file that contain a mysql query
				url: "some.php",
				//submit parameter
				data: {
					id: id,
					name: 'kevin'
				}
			})
			//.done means will execute if the php file has done all the processing(ex: query)
			// .done(function( msg ) {
			// 	//decode JSON from PHP file response
			// 	var result = JSON.parse(msg);

			// 	console.log(this);

			// 	//apply the value to each element
			//   $('#display #infoid').html(result[0].member_id);
			//   $('#display #infoname').html(result[0].fName+" "+result[0].lName);
			//   $('#display #Email').html(result[0].email);
			//   $('#display #Gender').html(result[0].gender);
			//   $('#display #bday').html(result[0].bday);
			//     });

		});

	});
</script>
<script type="text/javascript" charset="utf-8">
	$(document).on("click", ".get-id", function() {
		var p_id = $(this).data('id');
		$(".modal-body #infoid").val(p_id);

	});
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('.toggle-modal').click(function() {
			$('#logout').modal('toggle');
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.toggle-modal-reserve').click(function() {
			$('#reservation').modal('toggle');
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.roomImg').click(function() {
			var id = $(this).data('id');
			// alert(id)

			$.ajax({ //create an ajax request to load_page.php
				type: "POST",
				url: "editpic.php",
				dataType: "text", //expect html to be returned  
				data: {
					ROOMID: id
				},
				success: function(data) {
					$('#myModal').modal('toggle').html(data);
					// alert(data);

				}
			});
		});
	});
</script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var t = $('#example').DataTable({
			"columnDefs": [{
				"searchable": false,
				"orderable": false,
				"targets": 1
			}],

			"order": [
				[1, 'desc']
			]
		});

		t.on('order.dt search.dt', function() {
			t.column(0, {
				search: 'applied',
				order: 'applied'
			}).nodes().each(function(cell, i) {
				cell.innerHTML = i + 1;
			});
		}).draw();
	});


	$(document).ready(function() {
		var t = $('#table').DataTable({
			"columnDefs": [{
				"searchable": false,
				"orderable": false,
				"targets": 0
			}],

			"order": [
				[7, 'desc']
			]
		});

		t.on('order.dt search.dt', function() {
			t.column(0, {
				search: 'applied',
				order: 'applied'
			}).nodes().each(function(cell, i) {
				cell.innerHTML = i + 1;
			});
		}).draw();
	});
</script>
<link href="<?php echo WEB_ROOT; ?>admin/css/offcanvas.css" rel="stylesheet">
<?php

admin_logged_in();
?>

<body class="bg-secondary text-dark">
	<!--Header-->
	<div class="d-flex" id="wrapper" style="margin-top: -70px;">
		<div class="bg-light border-right bg-dark " style="width:18%; height:100vh; display:block; overflow:hidden; position:fixed;" id="sidebar-wrapper">
			<a class="navbar-brand text-white ml-4" style="font-size: 40px; font-family:Georgia, 'Times New Roman', Times, serif;" href="#"><strong>SHILOH</strong></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="list-group list-group-flush ml-1" style="font-size: 28px; font-family:Georgia, 'Times New Roman', Times, serif;">
				<ul class="navbar-nav mr-auto">

					<li class="<?php echo (currentpage() == 'index.php') ? "nav-item active  list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px;">
						<a href="<?php echo WEB_ROOT; ?>admin/index.php" class="text-decoration-none text-white "> Home </a>
					</li>
					
					<li class="<?php echo (currentpage() == 'mod_room') ? "nav-item active list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px;">
						<a href="<?php echo WEB_ROOT; ?>admin/mod_room/index.php" class="text-decoration-none text-white"> Rooms </a>
					</li>

					<li class="<?php echo (currentpage() == 'mod_accomodation') ? "nav-item active  list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px;">
						<a href="<?php echo WEB_ROOT; ?>admin/mod_accomodation/index.php" class="text-decoration-none text-white">Accomodation</a>
					</li>

					<li class="<?php echo (currentpage() == 'mod_reservation') ? "nav-item active  list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px;">
						<?php
						$query = "SELECT count(*) as 'Total' FROM `tblpayment` WHERE `STATUS`='Pending'";
						$mydb->setQuery($query);
						$cur = $mydb->loadResultList();
						foreach ($cur as $result) {
						?>
							<a href="<?php echo WEB_ROOT; ?>admin/mod_reservation/index.php" class="text-decoration-none text-white">Reservation <?php echo  isset($result->Total) ? '<span style="color:red">(' . $result->Total . ')</span>' : ''; ?> </a>
						<?php } ?>
					</li>

					<li class="<?php echo (currentpage() == 'mod_reports') ? "nav-item active  list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px;">
						<a href="<?php echo WEB_ROOT; ?>admin/mod_reports/index.php" class="text-decoration-none text-white">Reports</a>
					</li>

				</ul>

				<form class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						<?php if ($_SESSION['ADMIN_UROLE'] == "Administrator") { ?>

							<li class="<?php echo (currentpage() == 'mod_users') ? "nav-item active  list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px; margin-top:5px;">
								<a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="text-decoration-none text-white"><i class="fa fa-user-circle " style='font-size:18px'></i> Users</a>
							</li>

						<?php } ?>
						<li class="<?php echo (currentpage() == '../logout.php') ? "nav-item active  list-group-item list-group-item-action bg-light" : false; ?>" style="margin-right:20px;">
							<button type="button" class="btn bg-transparent border-0" style="font-size:25px;" data-toggle="modal" data-target="#exampleModal"><a class="toggle-modal text-decoration-none text-white" style="margin-left: -13px;"><i class="fa fa-lock"></i> Logout</a></button>
						</li>
					</ul>
				</form>

			</div>
		</div>
		<!--End of Header-->
		<div id="page-content-wrapper w-75 justify-content-center">
			<div class="container">

				<?php //check_message(); 
				?>
				<?php require_once $content; ?>
				<!--/row-->

				<!-- <hr> -->
				<script src="<?php echo WEB_ROOT; ?>admin/jquery/jquery.min.js"></script>
				<script src="<?php echo WEB_ROOT; ?>admin/js/bootstrap.min.js"></script>

				<script src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.min.js"></script>
				<script src="<?php echo WEB_ROOT; ?>js/dataTables.bootstrap.min.js"></script>


				<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
				<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
				<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

				<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/input-mask/jquery.inputmask.js"></script>
				<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/input-mask/jquery.inputmask.date.extensions.js"></script>
				<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/input-mask/jquery.inputmask.extensions.js"></script>

				<footer>
					<p class="text-white ml-5">&copy;
						Dragon House
					</p>

					<script>
						$(function() {
							$(".select2").select2();
						})


						$('input[data-mask]').each(function() {
							var input = $(this);
							input.setMask(input.data('mask'));
						});


						$('#DATETO').inputmask({
							mask: "2/1/y h:s",
							placeholder: "mm/dd/yyyy hh:mm",
							alias: "datetime",
							hourFormat: "24"
						});



						$('#DATEFROM').inputmask({
							mask: "2/1/y h:s",
							placeholder: "mm/dd/yyyy hh:mm",
							alias: "datetime",
							hourFormat: "24"
						});



						function checkall(selector) {
							if (document.getElementById('chkall').checked == true) {
								var chkelement = document.getElementsByName(selector);
								for (var i = 0; i < chkelement.length; i++) {
									chkelement.item(i).checked = true;
								}
							} else {
								var chkelement = document.getElementsByName(selector);
								for (var i = 0; i < chkelement.length; i++) {
									chkelement.item(i).checked = false;
								}
							}
						}

						function checkNumber(textBox) {
							while (textBox.value.length > 0 && isNaN(textBox.value)) {
								textBox.value = textBox.value.substring(0, textBox.value.length - 1)
							}
							textBox.value = trim(textBox.value);
						}
						//
						function checkText(textBox) {
							var alphaExp = /^[a-zA-Z]+$/;
							while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
								textBox.value = textBox.value.substring(0, textBox.value.length - 1)
							}
							textBox.value = trim(textBox.value);
						}
					</script>
				</footer>
			</div>
		</div>
	</div>

	<!--/.container-->
</body>

</html>
<script type="text/javascript">
	$('.start').datetimepicker({
		language: 'en',
		weekStart: 1,
		todayBtn: 1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});
	$('.end').datetimepicker({
		language: 'en',
		weekStart: 1,
		todayBtn: 1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});
</script>