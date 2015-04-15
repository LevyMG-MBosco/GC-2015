<?php include_once('includes/header.php'); ?>
<div class="interior-page-wrap container">
  <!--  -->
  <div class="row">
    <div class="col-xs-12">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="well well-sm">
                      <form class="form-horizontal" method="post">
                          <fieldset>
                              <legend class="text-center header">Contact us</legend>

                              <div class="form-group">
                                  <div class="col-md-offset-2 col-md-8">
                                      <input id="fname" name="name" type="text" placeholder="Name" class="form-control">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-offset-2 col-md-8">
                                      <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-offset-2 col-md-8">
                                      <input id="phone" name="phone" type="text" placeholder="Company" class="form-control">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-12 text-center">
                                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                  </div>
                              </div>
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <style>
          .header {
              color: #000;
              font-size: 27px;
              padding: 10px;
          }

          .bigicon {
              font-size: 35px;
              color: #e21836;
          }
      </style>
  </div>
</div>
<?php include_once('includes/footer.php'); ?>
