<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:100%;  margin-left:400px;">

  <div class="container text-white justify-content-center float-right">

    <div class="row justify-content-center">
      <div class="col-lg-12">
        <!--<div class="form-container"> -->
        <form action="controller.php?action=add" enctype="multipart/form-data" method="POST">
          <div class="container">
            <div>
              <h1 class="text-center"><strong>NEW ROOM</strong></h1>
            </div>
            <div class="form-group mb-4" style="font-size: 20px;">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="ROOM">Name:</label>

                <div class="col-lg-20">
                  <input name="" type="hidden" value="">
                  <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder="Room Name" type="text" value="">
                </div>
              </div>
            </div>
            <div class="form-group mb-4">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="ACCOMID">Accomodation:</label>
                <div class="col-lg-20">
                  <select class="form-control input-sm" name="ACCOMID" id="ACCOMID">
                    <option value="None">None</option>
                    <?php
                    $rm = new Accomodation();
                    $cur = $rm->listOfaccomodation();
                    foreach ($cur  as $accom) {
                      echo '<option value=' . $accom->ACCOMID . '>' . $accom->ACCOMODATION . ' (' . $accom->ACCOMDESC . ')</OPTION>';
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group mb-4">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="ROOMDESC">Description:</label>

                <div class="col-lg-20">
                  <input name="" type="hidden" value="">
                  <input class="form-control input-sm" id="ROOMDESC" name="ROOMDESC" placeholder="Description" type="text" value="">
                </div>
              </div>
            </div>
            <div class="form-group mb-4">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="NUMPERSON">Number of Person:</label>

                <div class="col-lg-20">
                  <input class="form-control input-sm" id="NUMPERSON" name="NUMPERSON" placeholder="Number of Person" type="text" value="1" onkeyup="javascript:checkNumber(this);">
                </div>
              </div>
            </div>
            <div class="form-group mb-4">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="PRICE">Price:</label>
                <div class="col-lg-20">
                  <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder="Price" type="text" value="" onkeyup="javascript:checkNumber(this);">
                </div>
              </div>
            </div>
            <!--  <div class="form-group mb-4">
                  <div class="col-lg-20">
                    <label class="col-lg-20 control-label" for=
                    "ROOMNUM">No. of Rooms:</label>

                    <div class="col-lg-20">
                      <input name="" type="hidden" value=""> -->
            <input class="form-control input-sm" id="ROOMNUM" name="ROOMNUM" placeholder="Room #" type="hidden" value="1">
            <!--    </div>
                  </div>
                </div> -->
            <div class="form-group mb-4">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="image">Upload Image:</label>

                <div class="col-lg-20">
                  <input type="file" name="image" value="" id="image">
                </div>
              </div>
            </div>
            <div class="form-group mb-4">
              <div class="col-lg-20">
                <label class="col-lg-20 control-label" for="idno"></label>
                <div class="col-lg-20">
                  <center><button class="btn btn-primary" name="save" type="submit">ADD ROOM</button></center>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
