<?php
if (!defined('WEB_ROOT')) {
  exit;
}

$code = $_GET['code'];



$query = "SELECT  `G_FNAME` ,  `G_LNAME` ,  `G_ADDRESS` ,  `TRANSDATE` ,  `CONFIRMATIONCODE` ,  `PQTY` ,  `SPRICE` ,`STATUS`
				FROM  `tblpayment` p,  `tblguest` g
				WHERE p.`GUESTID` = g.`GUESTID` AND `CONFIRMATIONCODE`='" . $code . "'";
$mydb->setQuery($query);
$res = $mydb->loadSingleResult();

if ($res->STATUS == 'Confirmed') {
  $stats = '<li class="next list-unstyled"><a class ="btn btn-primary text-white text-decoration-none mt-2" href="' . WEB_ROOT . 'admin/mod_reservation/controller.php?action=checkin&code=' . $res->CONFIRMATIONCODE .
    '">Confirmed &rarr;</a></li>';
} elseif ($res->STATUS == 'Checkedin') {
  $stats = '<li class="next list-unstyled"><a class ="btn btn-primary text-white text-decoration-none mt-2" href="' . WEB_ROOT . 'admin/mod_reservation/controller.php?action=checkout&code=' . $res->CONFIRMATIONCODE .
    '">Checkin &rarr;</a></li>';
} elseif ($res->STATUS == 'Checkedout') {
  $stats = "";
} else {
  $stats = '<li class="next list-unstyled"><a class ="btn btn-primary text-white text-decoration-none mt-2" href="' . WEB_ROOT . 'admin/mod_reservation/controller.php?action=confirm&code=' . $res->CONFIRMATIONCODE .
    '">Confirm &rarr;</a></li>';
}



?>
<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:100%;  margin-left:130px;">

  <div class="container text-white">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <h3 class="text-center ">GUEST INFORMATION</h3>
        <hr>
        <div class="col-lg-8">
          <div class="box box-solid">

            <div>
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a><i class="fa fa-inbox"></i><strong> FIRSTNAME: </strong>&nbsp;&nbsp;
                    <span class="pull-right"> <?php echo $res->G_FNAME; ?></span></a></li>
                <li class="active"><a><i class="fa fa-envelope-o"></i><strong> LASTNAME: </strong> &nbsp;&nbsp;
                    <span class="pull-right"><?php echo $res->G_LNAME; ?></span></a></li>
                <li class="active"><a><i class="fa fa-file-text-o"></i><strong> ADDRESS:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="pull-right"> <?php echo $res->G_ADDRESS; ?></span></a></li>
              </ul>
            </div>

          </div>
        </div>
        <hr>

        <div class="col-lg-12">

          <div class="row">
            <div class="col-lg-12">
              <h1 class="text-center">RESERVATION</h1>
              <h5 class="text-center mb-4">View Rooms</h5>
            </div>
          </div>
          <?php

          $query = "SELECT * 
				FROM  `tblreservation` r,  `tblguest` g,  `tblroom` rm, tblaccomodation a
				WHERE r.`ROOMID` = rm.`ROOMID` 
				AND a.`ACCOMID` = rm.`ACCOMID` 
				AND g.`GUESTID` = r.`GUESTID`  AND r.`STATUS`<>'Cancelled'
				AND  `CONFIRMATIONCODE` = '" . $code . "'";
          $mydb->setQuery($query);
          $res = $mydb->loadResultList();

          foreach ($res as $cur) {
            $image = WEB_ROOT . 'admin/mod_room/' . $cur->ROOMIMAGE;
            $day = dateDiff(date($cur->ARRIVAL), date($cur->DEPARTURE));

          ?>

            <!-- Blog Post Row -->
            <div class="row">
              <!-- <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div> -->
              <div class="col-md-3">
                <img class="img-responsive img-hover mb-2 " src="<?php echo $image; ?>" alt="">
              </div>
              <div class="col-md-12">
                <div class="box box-solid">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                      <h3>
                        <?php echo $cur->ROOM; ?> [ <small><?php echo $cur->ACCOMODATION; ?></small> ]
                      </h3>
                    </li>
                    <li></li>
                  </ul>

                  <p><strong>ARRIVAL: </strong><?php echo date_format(date_create($cur->ARRIVAL), 'm/d/Y'); ?></p>
                  <p><strong>DEPARTURE: </strong><?php echo date_format(date_create($cur->DEPARTURE), 'm/d/Y'); ?></p>
                  <p><strong>Night(s): </strong><?php echo ($day == 0) ? '1' : $day; ?></p>
                  <p><strong>PRICE: </strong>$<?php echo $cur->RPRICE; ?></p>
                  <!-- <a class="btn btn-danger" href="<?php echo WEB_ROOT . 'admin/mod_reservation/controller.php?id=' . $cur->RESERVEID . '&action=cancelroom'; ?>">Cancel<i class="fa fa-angle-right"></i></a> -->
                </div>
              </div>

            </div>
            <hr>
            <!-- /.row -->


          <?php }

          ?>
        </div>
        <!-- Pager -->
        <div class="col-lg-9">
          <a href="<?php echo WEB_ROOT . 'admin/mod_reservation/index.php'; ?>" class=" btn btn-primary">
            &larr; BACK
          </a>
          <?php echo $stats; ?>
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>