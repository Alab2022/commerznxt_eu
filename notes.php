<?php include('common/head.php'); ?>
	<?php include('common/header.php'); ?>
		<div class="container-fluid remove-margin bg-white">
			<div class="db-top-wrapper">
				<div class="left">
					<h4>My Task</h4>
					<ul class="breadcrumb">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Task</a></li>
					</ul>
				</div>
				<div class="right">
				<div class="inner-addon right-addon search_md ">
        <i class="bi bi-search"></i>
        <input type="text" class="form-control" placeholder="Search Contacts" />
      </div>
					<button class="btn btn-primary ms-2"><i class="bi bi-plus-lg"></i> Create New Note</button>
				</div>
			</div>
		</div>
		<div class="container-fluid page-inner">
			<div class="row task">
                <!-- Task Colun one -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-circle-half in-progress"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- Task Colun Two -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="flag_general">Open</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_general">Open</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- Task Colun Three -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-circle-half in-progress"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- Task Colun Four -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="flag_general">InProgress</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">InProgress</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_general">InProgress</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Add Task -->
<div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body form-group">
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
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Select Customer</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row">
        <div class="col">
        <label for="exampleFormControlTextarea1" class="form-label">Target Date</label>
		<div class="input-group date" id="datepicker">
        <input type="text" class="form-control" id="date"/>
        <span class="input-group-append shadow-cs ">
          <span class="input-group-text bg-light d-block dp_icon">
		  <i class="bi bi-calendar-week-fill"></i>
          </span>
        </span>
      </div>
        </div>
        <div class="col">
        <label for="exampleFormControlTextarea1" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		<?php include('common/footer.php'); ?>