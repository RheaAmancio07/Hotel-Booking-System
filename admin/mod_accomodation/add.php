<div id="page-content-wrapper" style="margin-top:50px; width:100%;  margin-left:380px;">
  <div class="container mt-4 "></div>

  <div class="row justify-content-center">
    <div class="col-lg-9">
      <form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

        <div class="container">
          <h1 class="text-center text-white">NEW ACCOMODATION</h1>
        </div>

        <div class=" text-white" style="font-size: 20px;">
          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-md-4 control-label" for="ACCOMODATION">Name:</label>

              <div class="col-lg-12">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="ACCOMODATION" name="ACCOMODATION" placeholder="Accomodation" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-md-4 control-label" for="ACCOMDESC">Description:</label>

              <div class="col-lg-12">
                <input class="form-control input-sm" id="ACCOMDESC" name="ACCOMDESC" placeholder="Description" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <div class="col-lg-12">
              <label class="col-md-4 control-label" for="idno"></label>

              <div class="col-lg-12">
                <center>
                  <button class="btn btn-primary rounded" name="save" type="submit">SAVE ACCOMODATION</button>
                </center>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
<!--End of container-->