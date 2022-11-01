<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid .remove-margin bg-white">
  <div class="db-top-wrapper fo-flx-js-sb">
    <div class="left fo-flx-center">
      <div class="profile-sec">
        <img src="img/prof-big.png" alt="">
      </div>
      <div class="content">
        <h3>Welcome Back, Richard Welsh!</h3>
        <h6 class="mt-1">
          <span>
            <img class="min-icon" src="img/date.svg" alt="">
          </span> Today: 10th Oct 2022 <span style="margin-left: 5px;">
            <img class="min-icon" src="img/time.svg" alt="">
          </span> 11:50AM
        </h6>
      </div>
    </div>
    <div class="right">

      <button type="submit" class="btn btn-warning in-page" data-bs-toggle="modal" data-bs-target="#requestquote"> <span><i class="bi bi-sticky-fill mr0-5"></i></span> Request for Quote </button>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
  <div class="inner-page">


    <div class="row">
      <div class="col-md-4">
        <div class="card card-pd">
          <div class="card-heading fo-flx-sb-bl">
            <h4>Order Status</h4>
          </div>
          <div id="geography"></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-12">
          <div class="card card-pd">
            <!-- <div class="eu-ch chart ">
          <div id="chart-container">FusionCharts XT will load here!</div>
          </div>
          <div class="chart-content">
            <h1>€38,633</h1>
            <h6>Total  Order Value</h6>
          </div> -->
            <h6>chart place holder</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-pd">
              <h3>38</h3>
              <h6 style="font-size: 16px;">Quotation Sent</h6>
              <div class="mini-div db"></div>
              <p class="remove-margin" style="font-size: 16px;">Value</p>
              <h5 class="tint-blue mt-1">€ 8,988</h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-pd">
              <h3>123</h3>
              <h6 style="font-size: 16px;">Quotation Received</h6>
              <div class="mini-div db"></div>
              <p class="remove-margin" style="font-size: 16px;">Value</p>
              <h5 class="tint-blue mt-1">€ 8,988</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-pd fadeblue cs-sty">
          <div class="card-chart-det">
            <h4>Total Outstanding</h4>
            <h1 class="mb-2">€ 20,000</h1>
          </div>
          <div class="card-heading fo-flx-sb-bl">
            <h4>Last 5 Credit Days Due</h4>

          </div>
          <div class="chart-wrapper">

          </div>


        </div>
      </div>

      <div class="col-md-12">
        <div class="card card-pd">
          <div class="crm-cd-header fo-flx-center remove-padding mb-3 remove-bckg">
            <h4>Top 3 Upcoming Payment</h4>
            <div class="d-flex align-center">
              <h6>Show</h6>
              <div class="form-group ms-2">

                <div class="dropdown">
                  <span><i class="bi bi-chevron-down"></i></span>
                  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    50
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">10</a></li>
                    <li><a class="dropdown-item" href="#">20</a></li>
                    <li><a class="dropdown-item" href="#">30</a></li>
                  </ul>
                </div>
              </div>
              <div class="inner-addon right-addon search_md ms-2">
                <i class="bi bi-search"></i>
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="button" class="btn btn-light ms-2">View all</button>

            </div>
          </div>
          <div class="card-body remove-padding">
            <div class="table-wrapper">
              <table id="tb-border-radius" class="table">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Due Date</th>
                    <th>Order Value</th>
                    <th>Payment Mode</th>
                    <th>Balance</th>
                    <th>Credit Days</th>
                    <th>Credit Days left</th>
                    <th>Make Payment</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CM-001</td>
                    <td>06/10/2022</td>
                    <td>2200</td>
                    <td>2200</td>
                    <td>22000</td>
                    <td>0</td>
                    <td>14</td>
                    <td><button type="button" class="btn btn-warning btn-sm ms-2">Pay Now</button></td>
                  </tr>
                  <tr>
                    <td>CM-001</td>
                    <td>06/10/2022</td>
                    <td>2200</td>
                    <td>2200</td>
                    <td>22000</td>
                    <td>0</td>
                    <td>14</td>
                    <td><button type="button" class="btn btn-warning btn-sm ms-2">Pay Now</button></td>
                  </tr>
                  <tr>
                    <td>CM-001</td>
                    <td>06/10/2022</td>
                    <td>2200</td>
                    <td>2200</td>
                    <td>22000</td>
                    <td>0</td>
                    <td>14</td>
                    <td><button type="button" class="btn btn-warning btn-sm ms-2">Pay Now</button></td>
                  </tr>
                  <tr>
                    <td>CM-001</td>
                    <td>06/10/2022</td>
                    <td>2200</td>
                    <td>2200</td>
                    <td>22000</td>
                    <td>0</td>
                    <td>14</td>
                    <td><button type="button" class="btn btn-warning btn-sm ms-2">Pay Now</button></td>
                  </tr>



                </tbody>
              </table>


            </div>
            

            <div class="fo-flx-center">
              <h6>Showing 50 of 200</h6>
              <nav aria-label="Page navigation example">

                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <a class="page-link"> <span><i class="bi bi-chevron-left"></i></span> Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next <span><i class="bi bi-chevron-right"></i></span></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Request quote -->
<div class="modal fade" id="requestquote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog rm-mw">
    <div class="modal-content R-cus-q">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request for a Quote</h5>
        <button type="button" class="btn btn-info btn-sm ms-2"> <span><i class="bi bi-plus-lg"></i></span> Add Product</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body form-group">


        <div class="table-wrapper eu">
          <table id="tb-border-radius" class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>SKU ID</th>
                <th>QTY</th>
                <th>Price/QTY</th>
                <th>SUb Total</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><button type="button" class="btn btn-light tb-rndd"><i class="bi bi-trash-fill"></i></button></td>
              </tr>
              <tr>
                <td><select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><button type="button" class="btn btn-light tb-rndd"><i class="bi bi-trash-fill"></i></button></td>
              </tr>
              <tr>
                <td><select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><input class="faded" type="text" name="" id=""></td>
                <td><button type="button" class="btn btn-light tb-rndd"><i class="bi bi-trash-fill"></i></button></td>
              </tr>




            </tbody>
          </table>


        </div>
        <div class="table-footer fo-flx-top mt-4">
              <div class="left">
                <div class="content-1 mb-3">
                  <h5 class="mb-2">Comments</h5>
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                
              </div>
              <div class="right">
                <div class="bg-tb-bottom">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Sub Total</td>
                        <td></td>
                        <td>4500</td>
                      </tr>
                      <tr>
                        <td>Req.Discount(5%)</td>
                        <td><input class="spe-in" type="text" name="" id=""></td>
                        <td>4500</td>
                      </tr>
                      <tr>
                        <td class="remove-bo"><b>Total</b></td>
                        <td></td>
                        <td class="remove-bo"><b>4275</b></td>
                      </tr>
                    </tbody>
                  </table>


                </div>
                <!-- <div class="alert">
                  <p>*This quotation does not required any seal or signature </p>
                </div> -->
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<?php include('common/footer.php'); ?>