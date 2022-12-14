<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <x-header/>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <x-sidebar/>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Elements</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Badges</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Badges</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="badge bg-primary">Primary</span>
                      </td>
                      <td>
                        <code>.badge .bg-primary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-secondary">Secondary</span>
                      </td>
                      <td>
                        <code>.badge .bg-secondary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-success">Success</span>
                      </td>
                      <td>
                        <code>.badge .bg-success</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-danger">Danger</span>
                      </td>
                      <td>
                        <code>.badge .bg-danger</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-warning">Warning</span>
                      </td>
                      <td>
                        <code>.badge .bg-warning</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-info">Info</span>
                      </td>
                      <td>
                        <code>.badge .bg-info</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-light text-dark">Light</span>
                      </td>
                      <td>
                        <code>.badge .bg-light</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-dark">Dark</span>
                      </td>
                      <td>
                        <code>.badge .bg-dark</code>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-body">
                  <h5 class="card-title mb-0">Pills</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Pills</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-primary"
                          >Primary</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-primary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-secondary"
                          >Secondary</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-secondary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-success"
                          >Success</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-success</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-danger">Danger</span>
                      </td>
                      <td>
                        <code>badge rounded-pill bg-danger</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-warning"
                          >Warning</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-warning</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-info">Info</span>
                      </td>
                      <td>
                        <code>badge rounded-pill bg-info</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-light text-dark"
                          >Light</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-light</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-dark">Dark</span>
                      </td>
                      <td>
                        <code>badge rounded-pill bg-dark</code>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Notification</h5>
                  <div class="row">
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-success"
                        id="ts-success"
                      >
                        Success
                      </button>
                    </div>
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-info"
                        id="ts-info"
                      >
                        Info
                      </button>
                    </div>
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-warning"
                        id="ts-warning"
                      >
                        Warning
                      </button>
                    </div>
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-danger"
                        id="ts-error"
                      >
                        Error
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Icon Box</h5>
                  <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                          </h1>
                          <h6 class="text-white">Dashboard</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-success text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white">Charts</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-collage"></i>
                          </h1>
                          <h6 class="text-white">Widgets</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-border-outside"></i>
                          </h1>
                          <h6 class="text-white">Tables</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-arrow-all"></i>
                          </h1>
                          <h6 class="text-white">Full Width</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-receipt"></i>
                          </h1>
                          <h6 class="text-white">Forms</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-relative-scale"></i>
                          </h1>
                          <h6 class="text-white">Buttons</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-pencil"></i>
                          </h1>
                          <h6 class="text-white">Elements</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-success text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-calendar-check"></i>
                          </h1>
                          <h6 class="text-white">Calnedar</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-arrow-all"></i>
                          </h1>
                          <h6 class="text-white">Full Width</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-border-outside"></i>
                          </h1>
                          <h6 class="text-white">Tables</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-alert"></i>
                          </h1>
                          <h6 class="text-white">Errors</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Progressbar</h5>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 50%"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: 100%"
                      aria-valuenow="100"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 25%&quot;
                      aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Striped Progressbar</h5>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped"
                      role="progressbar"
                      style="width: 10%"
                      aria-valuenow="10"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-success"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-info"
                      role="progressbar"
                      style="width: 50%"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-warning"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-danger"
                      role="progressbar"
                      style="width: 100%"
                      aria-valuenow="100"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar progress-bar-striped
                      bg-success&quot; role=&quot;progressbar&quot;
                      style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot;
                      aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Multiple Bars</h5>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 15%"
                      aria-valuenow="15"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 30%"
                      aria-valuenow="30"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 20%"
                      aria-valuenow="20"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 15%&quot;
                      aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;div class=&quot;progress-bar bg-success&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 30%&quot;
                      aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;div class=&quot;progress-bar bg-info&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 20%&quot;
                      aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Animated Progress</h5>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                      "
                      style="width: 40%"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                        bg-warning
                      "
                      style="width: 50%"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                        bg-success
                      "
                      style="width: 60%"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                        bg-cyan
                      "
                      style="width: 70%"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar progress-bar-striped
                      progress-bar-animated bg-cyan&quot;
                      style=&quot;width:70%&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Different Models</h5>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-success margin-5 text-white"
                    data-toggle="modal"
                    data-target="#Modal1"
                  >
                    View Popup
                  </button>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-warning margin-5 text-white"
                    data-toggle="modal"
                    data-target="#Modal2"
                  >
                    Alert
                  </button>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-info margin-5"
                    data-toggle="modal"
                    data-target="#Modal3"
                  >
                    Image Popup
                  </button>
                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="Modal1"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true "
                  >
                    <div class="modal-dialog" role="document ">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Popup Header
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true ">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Here is the text coming you can put also image if you
                          want…
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="Modal2"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Alert Model
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Lorem ipsum dolor sit amet...
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                          >
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Save changes
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="Modal3"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Image Header
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img
                            src="../assets/images/background/img5.jpg"
                            width="100% "
                          />
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tooltips</h5>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Tooltip on top"
                  >
                    Tooltip on top
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="right"
                    title="Tooltip on right"
                  >
                    Tooltip on right
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom"
                    title="Tooltip on bottom"
                  >
                    Tooltip on bottom
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    title="Tooltip on left"
                  >
                    Tooltip on left
                  </button>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="card-title">Default Pagination</h5>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <div class="col-md-4">
                      <h5 class="card-title">Pagination with icons</h5>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <div class="col-md-4">
                      <h5 class="card-title">Disabled & Active States</h5>
                      <nav aria-label="...">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"
                              >Previous</a
                            >
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#"
                              >2 <span class="sr-only">(current)</span></a
                            >
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Popovers</h5>
                  <div class="mt-3">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="top"
                      data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on top
                    </button>

                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="right"
                      data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on right
                    </button>

                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="bottom"
                      data-content="Vivamus
                                    sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on bottom
                    </button>

                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="left"
                      data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on left
                    </button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Notificaion</h5>
                  <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                  </div>
                  <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                  </div>
                  <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                  </div>
                  <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                  </div>
                  <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Additional Content</h5>
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer so
                      that you can see how spacing within an alert works with
                      this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                  <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer so
                      that you can see how spacing within an alert works with
                      this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer so
                      that you can see how spacing within an alert works with
                      this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/libs/toastr/build/toastr.min.js"></script>
    <script>
      $(function () {
        // Success Type
        $("#ts-success").on("click", function () {
          toastr.success("Have fun storming the castle!", "Miracle Max Says");
        });

        // Success Type
        $("#ts-info").on("click", function () {
          toastr.info(
            "We do have the Kapua suite available.",
            "Turtle Bay Resort"
          );
        });

        // Success Type
        $("#ts-warning").on("click", function () {
          toastr.warning(
            "My name is Inigo Montoya. You killed my father, prepare to die!"
          );
        });

        // Success Type
        $("#ts-error").on("click", function () {
          toastr.error(
            "I do not think that word means what you think it means.",
            "Inconceivable!"
          );
        });
      });
    </script>
  </body>
</html>
