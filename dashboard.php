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
      <div class="date-picker">
        <form action="/action_page.php">
          <input type="date" id="birthday" name="birthday">
        </form>
      </div>
      <button type="submit" class="btn btn-primary in-page">
        <span>
          <img class="mr1" src="img/export.svg" alt="">
        </span> Download </button>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
  <div class="inner-page">
    <div class="db-content-top fo-flx-js-sb">
    <div class="card">
      <a href="p-orders.php" class="card-pd">
          <div class="fo-flx ">
        <div class="icon-wrap orange">
          <img src="img/db1.svg" alt="">
        </div>
        <div class="content">
          <h3>38K</h3>
          <h6>Total No.Of Orders</h6>
        </div>
          </div>
      </a>
      </div>
     
      <div class="card card-pd fo-flx">
        <div class="icon-wrap merun">
          <img src="img/db2.svg" alt="">
        </div>
        <div class="content">
          <h3>38K</h3>
          <h6>Prd. to be Re-ordered</h6>
        </div>
      </div>
      <div class="card card-pd fo-flx">
        <div class="icon-wrap fadeblue">
          <img src="img/db3.svg" alt="">
        </div>
        <div class="content">
          <h3>4.5M</h3>
          <h6>Total Sales</h6>
        </div>
      </div>
      <div class="card card-pd fo-flx">
        <div class="icon-wrap solidblue">
          <img src="img/db4.svg" alt="">
        </div>
        <div class="content">
          <h3>2.1M</h3>
          <h6>Payments Received</h6>
        </div>
      </div>
      <div class="card card-pd fo-flx">
        <div class="icon-wrap greenishblue">
          <img src="img/db5.svg" alt="">
        </div>
        <div class="content">
          <h3>1M</h3>
          <h6>Credits Given</h6>
        </div>
      </div>
    </div>

    <div class="chart-wrapper">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-pd">
            <div class="card-heading fo-flx-sb-bl">
              <h4>Sales Analysis</h4>
              <div class="fo-flx">
                <p class="text-green">2021 (+80%) <span><img class="mr1" src="img/up.svg" alt=""></span></p>
                <p class="text-orange">2022 ( 60%)</span> <img class="mr0-5" src="img/upor.svg" alt=""></span></p>
              </div>
              
            </div>
            <div id="chartcondb"></div>
          </div>

          <div class="row" style="margin-top: 25px;">
            <div class="col-md-6">
              <div class="progressbar-wrapper fo-flx-js-sb">
                
                <div class="card card-pd">
                  <h3>38</h3>
                  <h6>Quotes</h6>
                  <div class="progress">
                    <div class="progress-bar orange" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">

                    </div>
                  </div>
                  <p>10 Waiting for Approval</p>
                </div>
                <div class="card card-pd">
                  <h3>48</h3>
                  <h6>Invoices</h6>
                  <div class="progress">
                    <div class="progress-bar solidblue" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:35%">

                    </div>
                  </div>
                  <p>5 Waiting for Approval</p>
                </div>
              </div>
              <div class="card card-pd">
                <div class="card-heading fo-flx-sb-bl">
                  <h4>Top 5 Geography Sales</h4>

                </div>
                <div id="geography"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-pd">
                <div class="card-heading fo-flx-sb-bl">
                  <h4>Purchase Overview</h4>
                  <p class="text-green"><span><img class="mr0-5" src="img/profile.svg" alt=""></span>Vendors 50</p>
                </div>
                <div id="semiDonut"></div>
              </div>
              <div class="card card-pd">
                <div class="card-heading fo-flx-sb-bl">
                  <h4>Recent Notes</h4>
                  <a class="btn btn-light btn-sm" href="">View All</a>
                </div>
                <div class="notes">
                  <div class="content fo-flx mt-3">
                    <div class="number">
                      <h6>01</h6>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the
                      printing and typesetting industry..</p>

                  </div>
                  <div class="divider remove-padding mt-3 mb-3"></div>
                  <div class="content fo-flx mt-3">
                    <div class="number">
                      <h6>01</h6>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the
                      printing and typesetting industry..</p>

                  </div>
                </div>
              </div>
            </div>

          </div>



        </div>
        <div class="col-md-4">
          <div class="card card-pd fadeblue fadeblue-pad">
            <div class="t1 fo-flx-center">
              <p>Total Revenue</p>
              <h6>2022</h6>
            </div>
            <div class="t2 fo-flx-sb-bl">
              <h1>€128,988</h1>
              <h6>+10% <span><img src="img/network.svg" alt=""></span> </h6>
            </div>
          </div>

          <div class="card card-pd">
            <div class="card-heading fo-flx-sb-bl">
              <h4>Sales Tracker</h4>
              <div class="fo-flx-center">
                <h6>2022</h6>
                <a class="btn btn-light btn-sm ms-2" href="">More</a>
              </div>
            </div>
            <div class="chart-body">
              <div id="salesTracker">FusionCharts XT will load here!</div>
            </div>
            <div class="chart-detail-wrapper">
              <div class="chart-details fo-flx-js-sb bo-bottom" style="padding-bottom: 15px;">
                <div class="left fo-flx">
                  <div class="profile-sec mr1">
                    <img src="img/cart.svg" alt="">
                  </div>
                  <div class="content">
                    <h4>E-Commerce Sales</h4>
                    <h6>2345 products sale</h6>
                  </div>
                </div>
                <div class="wr-right fo-flx">
                  <h1>70%</h1>
                  <img src="img/lo-up-or.svg" alt="">
                </div>
              </div>
              <div class="chart-details fo-flx-js-sb mt-2">
                <div class="left fo-flx">
                  <div class="profile-sec mr1">
                    <img src="img/loc.svg" alt="">
                  </div>
                  <div class="content">
                    <h4>E-Commerce Sales</h4>
                    <h6>2345 products sale</h6>
                  </div>
                </div>
                <div class="wr-right fo-flx">
                  <h1>70%</h1>
                  <img src="img/lo-up-or.svg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="card card-pd">
            <div class="card-heading fo-flx-sb-bl">
              <h4>Customers</h4>
              <div class="fo-flx">
                <p class="text-green">Target Achieved 80% <span><img class="mr1" src="img/up.svg" alt=""></span></p>

              </div>
            </div>
            <div class="customers-details mt-3">
              <div class="fo-flx">
                <div class="left fo-flx mr3">
                  <div class="db-icn-bg fadeblue mr1">
                    <i class="bi bi-star"></i>
                  </div>
                  <div>
                    <h3>200</h3>
                    <h6>New Customers</h6>
                  </div>
                </div>
                <div class="right fo-flx">
                  <div class="db-icn-bg slaygreen mr1">
                    <i class="bi bi-chat-left-text-fill"></i>
                  </div>
                  <div>
                    <h3>180</h3>
                    <h6>Quotes Sent</h6>
                  </div>
                </div>
              </div>
              <div class="divider remove-padding mt-3 mb-3"></div>
              <div class="cs-det-footer fo-flx-js-sb">
                <div class="items d-flex align-center">
                  <span><i class="bi bi-circle-half de-success"></i></span>
                  <h6>In Progress 2</h6>
                </div>
                <div class="vertical-div"></div>
                <div class="items d-flex align-center">
                  <span><i class="bi bi-shield-check de-success"></i></i></span>
                  <h6>Won 5</h6>
                </div>
                <div class="vertical-div"></div>
                <div class="items d-flex align-center">
                  <span><i class="bi bi-graph-down-arrow de-error"></i></span>
                  <h6>Lost 0</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<?php include('common/footer.php'); ?>