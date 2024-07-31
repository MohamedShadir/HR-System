<?php include("layout/header.php"); ?>


        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="">
                        <h2 class="page-title fw-semibold fs-20 mb-0">JOB INFORMATION</h2>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Information</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <button type="button" class="btn btn-primary btn-wave waves-effect waves-light me-2"> <i class="fe fe-plus mx-1 align-middle"></i>Add</button>
                        <button type="button" class="btn btn-success btn-wave waves-effect waves-light"> <i class="fe fe-log-in mx-1 align-middle"></i>Export</button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- ROW-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Deals Statistics
                                </div>

                            </div>
                            <div class="card-body">

                                <div class="d-sm-flex mb-4 justify-content-between">
                                    <div class="my-1">
                                        <span class="">Show</span>
                                        <div class="btn-group">
                                            <!-- <button type="button" class="btn btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                10
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">10</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">25</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">50</a></li>
                                            </ul> -->
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                <option value="Choice 1">10</option>
                                                <option value="Choice 2">20</option>
                                                <option value="Choice 3">30</option>
                                                <option value="Choice 4">40</option>
                                            </select>
                                        </div>
                                        <span class="">Entries</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 my-1">
                                        <div>
                                            <input class="form-control form-control-sm h-35" type="text"
                                                placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive deals-table">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0 w-5 text-uppercase">S.no</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Name</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Date</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Amount</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Status</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">01.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/1.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Jake poole</h6>
                                                            <span class="fs-12 text-muted">jacke123@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$5.321.2</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">02.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/2.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Virginia Gray</h6>
                                                            <span class="fs-12 text-muted">virginia456@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$53,3654</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">03.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/3.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Jacob Thomson</h6>
                                                            <span class="fs-12 text-muted">jacobthomson@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$1,56,3654</td>
                                                <td class="text-primary fs-15 fw-semibold">Pending</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">04.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/4.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                                            <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$12.3</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">05.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/5.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Kylie north</h6>
                                                            <span class="fs-12 text-muted">kylie@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                                                <td class="text-primary fs-15 fw-semibold">Pending</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">06.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/11.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Jan Hodges</h6>
                                                            <span class="fs-12 text-muted">jan@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                                                <td class="text-danger fs-15 fw-semibold">Cancel</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">07.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/7.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                                            <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$2,24,1421</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted fs-15 fw-semibold">08.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/8.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Emily Lewis</h6>
                                                            <span class="fs-12 text-muted">emily@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$9.321.2</td>
                                                <td class="text-danger fs-15 fw-semibold">Cancel</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ROW-5 END -->

            </div>
        </div>

        <!-- End::app-content -->
        
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php include("layout/footer.php"); ?>