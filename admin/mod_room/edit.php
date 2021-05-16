<?php

// $_SESSION['id']=$_GET['id'];
$rm = new Room();
$result = $rm->single_room($_GET['id']);
?>

<div class="container mt-3 text-white">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <form class="form-horizontal well span6" action="controller.php?action=edit" enctype="multipart/form-data" method="POST">
        <div class="container">
          <div>
            <h1 class="text-center"><strong>EDIT ROOM</strong></h1>
          </div>



          <div class="form-group mb-4" style="font-size: 20px;">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="ROOM">Name:</label>

              <div class="col-lg-12">
                <input name="" type="hidden" value="">
                <input name="ROOMID" type="hidden" value="<?php echo $result->ROOMID; ?>">
                <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder="Room Name" type="text" value="<?php echo $result->ROOM; ?>">
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="ACCOMID">Accomodation:</label>

              <div class="col-lg-12">
                <select class="form-control input-sm" name="ACCOMID" id="ACCOMID">
                  <?php
                  $rm = new Accomodation();
                  $res =  $rm->single_accomodation($result->ACCOMID);
                  ?>

                  <option selected="TRUE" value="<?php echo $res->ACCOMID; ?>"><?php echo $res->ACCOMODATION; ?></option>
                  <?php

                  $cur = $rm->listOfaccomodationNotIn($res->ACCOMID);
                  foreach ($cur  as $accom) {
                    echo '<option  value=' . $accom->ACCOMID . '>' . $accom->ACCOMODATION . '</OPTION>';
                  }

                  ?>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="ROOMDESC">Description:</label>

              <div class="col-lg-12">
                <input name="" type="hidden" value="">
                <input class="form-control input-sm" id="ROOMDESC" name="ROOMDESC" placeholder="Description" type="text" value="<?php echo $result->ROOMDESC; ?>">
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="NUMPERSON">Number of Person:</label>

              <div class="col-lg-12">
                <input class="form-control input-sm" id="NUMPERSON" name="NUMPERSON" placeholder="Number of Person" type="text" value="<?php echo $result->NUMPERSON; ?>" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>


          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="PRICE">Price:</label>

              <div class="col-lg-12">
                <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder="Price" type="text" value="<?php echo $result->PRICE; ?>" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

          <!--   <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for=
              "ROOMNUM">No. of Rooms:</label>

              <div class="col-lg-12">
                <input name="" type="hidden" value=""> -->
          <input class="form-control input-sm" id="ROOMNUM" name="ROOMNUM" placeholder="Room #" type="hidden" value="<?php echo $result->ROOMNUM; ?>">
          <!--    </div>
            </div>
          </div>
         -->
          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="image">Upload Image:</label>

              <div class="col-lg-12">
                <input type="file" name="image" value="" id="image" class="rounded">
              </div>
            </div>
          </div>
          <div class="form-group mb-4">
            <center><img src="<?php echo isset($result->ROOMIMAGE) && !empty($result->ROOMIMAGE) && is_file($result->ROOMIMAGE) ? $result->ROOMIMAGE : '' ?>" alt="Room Image" class="img-thumbnail col-lg-10 col-md-offset-3" ></center>
          </div>

          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-lg-12 control-label" for="idno"></label>

              <div class="col-lg-12">
                <center>
                  <button class="btn btn-primary" name="save" type="submit">SAVE</button>
                </center>
              </div>
            </div>
          </div>


        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!--End of container-->