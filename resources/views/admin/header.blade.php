@php
if(isset($subpage)){
$subpage = $subpage;
}else{
$subpage = '';
}

if(isset($title)){
$title = $title;
}else{
$title = "Admin Dashboard - MULTIPLEX";
}
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>{{$title}}</title>

  <meta name="description" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/loader-new1.png') }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  <link rel="stylesheet" href="{{ asset('admin/vendor/libs/apex-charts/apex-charts.css') }}" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{ asset('admin/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('admin/js/config.js') }}"></script>

  <!-- ck editor -->
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script> -->
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

  <!-- datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" />

  <!-- Include Required Prerequisites -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />

  <!-- Include Date Range Picker -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>


  <style>
    .required_star {
      color: red;
      font-size: 16px;
    }

    .redColor {
      text-decoration: line-through
    }

    .headerFilter {
      color: #696cff;
    }

    a {
      text-decoration: none !important;
    }



  </style>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="javascript:void(0);" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="{{ asset('/images/logo/multiplex-logo2.png') }}" alt="logo">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item @if ($page == 'dashboard') active open @endif">
            <a href="{{ route('dashboard') }}" class="menu-link">
              <img src="{{ asset('/images/dashboard-icon.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Dashboard</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'category') active open @endif">
            <a href="{{ route('admin.category') }}" class="menu-link">
              <img src="{{ asset('/images/bars-staggered-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Category</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'sub_category') active open @endif">
            <a href="{{ route('admin.sub_category') }}" class="menu-link">
              <img src="{{ asset('/images/uncharted.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Sub Category</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'products') active open @endif">
            <a href="{{ route('products') }}" class="menu-link">
              <img src="{{ asset('/images/box-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Products</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'productenquiry') active open @endif">
            <a href="{{ route('product-enquiry.list') }}" class="menu-link">
              <img src="{{ asset('/images/clipboard-question-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Product Enquiries</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'serviceenquiry') active open @endif">
            <a href="{{ route('service-enquiry.list') }}" class="menu-link">
              <img src="{{ asset('/images/paper-plane-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Service Enquiries</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'enquiry') active open @endif">
            <a href="{{ route('enquiry.list') }}" class="menu-link">
              <img src="{{ asset('/images/note-sticky-regular.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;General Enquiries</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'openings') active open @endif">
            <a href="{{ route('openings') }}" class="menu-link">
              <img src="{{ asset('/images/briefcase-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Job Openings</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'job') active open @endif">
            <a href="{{ route('job') }}" class="menu-link">
              <img src="{{ asset('/images/briefcase-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Jobs Applied</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'departments') active open @endif">
            <a href="{{ url('admin/departments') }}" class="menu-link">
              <img src="{{ asset('/images/building-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Departments</div>
            </a>
          </li>
          <li class="menu-item @if ($page == 'galleries') active open @endif">
            <a href="{{ url('admin/galleries') }}" class="menu-link">
              <img src="{{ asset('/images/image-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Gallery</div>
            </a>
          </li>

          <li class="menu-item @if ($page == 'banner') active open @endif">
            <a href="{{ url('admin/banner') }}" class="menu-link">
              <img src="{{ asset('/images/image-solid.svg') }}" width="20" height="20" alt="logo">
              <div data-i18n="Analytics">&nbsp;&nbsp;Banner</div>
            </a>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar" style="background-color: rgb(0 164 90) !important;">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              {{-- <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div> --}}
              <h3 style="margin-top: 10px;">Welcome To <span style="font-weight:600;color:#fff;">Multiplex Group</span></h3>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{ asset('/images/loader-new1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="{{ asset('/images/loader-new1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Admin</span>
                          <!-- <small class="text-muted">Admin</small> -->
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>

                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                      <img src="{{ asset('/images/arrow-right-from-bracket-solid.svg') }}" width="20" height="20" alt="logo">
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          @yield('content')
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                made with ❤️ by
                <a href="https://www.multiplexgroup.com/" target="_blank" class="footer-link fw-bolder">MULTIPLEX</a>
              </div>

            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('admin/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('admin/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('admin/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

  <script src="{{ asset('admin/vendor/js/menu.js') }}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('admin/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('admin/js/dashboards-analytics.js') }}"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <!-- Include DataTables Buttons extension -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.print.min.js"></script>
  @yield('scripts')
</body>

</html>