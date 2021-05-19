<div id="page-content-wrapper" style=" overflow: auto; margin-top:50px; width:100%;  margin-left:280px;">
  <div class="container text-white">

    <div class="row justify-content-center ">
      <div class="col-lg-12">
        <form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

          <div>
            <h1 class="text-center ">NEW USER ACCOUNT</h1>
          </div>

          <div style="font-size: 20px;">
            <div class="form-group mb-3">
              <div class="col-lg-12">
                <label class="col-md-4 control-label" for="UNAME">Name:</label>

                <div class="col-lg-12">
                  <input name="deptid" type="hidden" value="">
                  <input class="form-control input-sm" id="UNAME" name="UNAME" placeholder="Account Name" type="text" value="">
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <div class="col-lg-12">
                <label class="col-md-4 control-label" for="USERNAME">Username:</label>

                <div class="col-lg-12">
                  <input name="deptid" type="hidden" value="">
                  <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder="Username" type="text" value="">
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <div class="col-lg-12">
                <label class="col-md-4 control-label" for="UPASS">Password:</label>

                <div class="col-lg-12">
                  <input name="deptid" type="hidden" value="">
                  <input class="form-control input-sm" id="UPASS" name="UPASS" placeholder="Account Password" type="Password" value="">
                </div>
              </div>
            </div>
            <div class="form-group mb-3">
              <div class="col-lg-12">
                <label class="col-md-4 control-label" for="ROLE">Role:</label>

                <div class="col-lg-12">
                  <select class="form-control input-sm" name="ROLE" id="ROLE">
                    <option value="Administrator">Administrator</option>
                    <option value="Guest In-charge">Guest In-charge</option>
                    <!-- <option value="Encoder">Encoder</option> -->
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <div class="col-lg-12">
                <label class="col-md-4 control-label" for="Contact #:">Contact #::</label>

                <div class="col-lg-12">
                  <input name="deptid" type="hidden" value="">
                  <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder="Contact #:" type="text" value="">
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <div class="col-lg-12">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-lg-12">
                  <center>
                    <button class="btn btn-primary" name="save" type="submit">ADD USER</button>
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