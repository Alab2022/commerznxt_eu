<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Payment</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Payments</a></li>
      </ul>
    </div>
    <!-- <div class="right">
      <div class="form-group ms-2 d-flex align-center">
        <h6 class="mr1" style="margin-bottom: 0;">Show</h6>
        <div class="dropdown">
          <span><i class="bi bi-chevron-down"></i></span>
          <button class="btn btn-secondary dropdown-toggle fl-dd" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            50
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">10</a></li>
            <li><a class="dropdown-item" href="#">20</a></li>
            <li><a class="dropdown-item" href="#">30</a></li>
          </ul>
        </div>
        <div class="date-picker ms-2">
          <form action="/action_page.php">
            <input type="date" id="birthday" name="birthday">
          </form>
        </div>
      </div>
      <div class="inner-addon right-addon search_md ">
        <i class="bi bi-search"></i>
        <input type="text" class="form-control" placeholder="Search" />
      </div>
      <div class="dropdown ms-2">
        <span><i class="bi bi-chevron-down"></i></span>
        <button class="btn btn-secondary dropdown-toggle fl-dd" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          CSV
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">10</a></li>
          <li><a class="dropdown-item" href="#">20</a></li>
          <li><a class="dropdown-item" href="#">30</a></li>
        </ul>
      </div>
      <button class="btn btn-primary ms-2"><span><img src="img/share.svg" alt=""></span> Export</button>

    </div> -->
  </div>
</div>
<div class="container-fluid page-inner">
  <div class="card card-pd">

    <div class="card-body remove-padding">
      <div class="table-wrapper">
        <table id="tb-border-radius" class="table">
          <thead>
            <tr>
              <th>Customer</th>
              <th>Invoice No</th>
              <th>Invoice Date</th>
              <th>Order Value</th>
              <th>Amount Received</th>
              <th>Pending Payment</th>
              <th>Credit Period</th>
              <th>Credit Days Left</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Adam</td>
              <td>INV-01</td>
              <td>08 Oct 2022 </td>
              <td>5000</td>
              <td>22500</td>
              <td>2500</td>
              <td>30Days</td>
              <td>15</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>INV-01</td>
              <td>08 Oct 2022 </td>
              <td>5000</td>
              <td>22500</td>
              <td>0</td>
              <td>30Days</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>INV-01</td>
              <td>08 Oct 2022 </td>
              <td>5000</td>
              <td>22500</td>
              <td>2500</td>
              <td>30Days</td>
              <td>15</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>INV-01</td>
              <td>08 Oct 2022 </td>
              <td>5000</td>
              <td>22500</td>
              <td>0</td>
              <td>30Days</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>INV-01</td>
              <td>08 Oct 2022 </td>
              <td>5000</td>
              <td>22500</td>
              <td>2500</td>
              <td>30Days</td>
              <td>15</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>INV-01</td>
              <td>08 Oct 2022 </td>
              <td>5000</td>
              <td>22500</td>
              <td>0</td>
              <td>30Days</td>
              <td>-</td>
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

  <!-- create user offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Choose Filter</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="mb-3">
        <div class="date-picker">
          <label for="">Date</label>
          <form action="/action_page.php">
            <input type="date" id="birthday" name="birthday">
          </form>
        </div>
      </div>
      <div class="mb-3">
        <label for="">User Type</label>
        <div class="d-flex radio-custom mt-3">
          <div class="form-check me-3 ">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              General
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Customer
            </label>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Country</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">State/Provice</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

    </div>
    <div class="offcanvas-footer fil-pd">
      <button type="button" class="btn btn-secondary sec-custom">Clear</button>
      <button type="button" class="btn btn-primary ms-2 ">Filter</button>
    </div>
  </div>
</div>
<?php include('common/footer.php'); ?>