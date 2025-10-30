<?php
include('./backend/config/conexion.php');
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<!-- end row -->

<!-- Mirrored from techzaa.in/venton/order-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jun 2025 20:43:23 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Gimnasio</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Vendor css (Require in all Page) -->
     <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="assets/js/config.js"></script>

     <!--bwip-js-->
     <script src="https://unpkg.com/bwip-js/dist/bwip-js-min.js"></script>
     <script src="js/index.js"></script>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <!-- ========== Topbar Start ========== -->
          <header class="topbar">
               <div class="container-fluid">
                    <div class="navbar-header">
                         <div class="d-flex align-items-center">
                              <!-- Menu Toggle Button -->
                              <div class="topbar-item">
                                   <button type="button" class="button-toggle-menu me-2">
                                        <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle"></iconify-icon>
                                   </button>
                              </div>

                              <!-- App Search-->
                              <form class="app-search d-none d-md-block ms-2">
                                   <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="">
                                        <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                                   </div>
                              </form>
                         </div>

                         <div class="d-flex align-items-center gap-1">

                              <!-- Theme Color (Light/Dark) -->
                              <div class="topbar-item">
                                   <button type="button" class="topbar-button" id="light-dark-mode">
                                        <i class='bx bx-moon fs-24 align-middle'></i>
                                   </button>
                              </div>

                              <!-- Notification -->
                              <div class="dropdown topbar-item">
                                   <button type="button" class="topbar-button position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class='bx bx-bell fs-24 align-middle'></i>
                                        <span class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">3<span class="visually-hidden">unread messages</span></span>
                                   </button>
                                   <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end" aria-labelledby="page-header-notifications-dropdown">
                                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                             <div class="row align-items-center">
                                                  <div class="col">
                                                       <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                                  </div>
                                                  <div class="col-auto">
                                                       <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                            <small>Clear All</small>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>
                                        <div data-simplebar style="max-height: 280px;">
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom text-wrap">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-1.jpg" class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0"><span class="fw-semibold">Josephine Thompson </span>commented on admin panel <span>" Wow 😍! this admin looks good and awesome design"</span></p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <div class="avatar-sm me-2">
                                                                 <span class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                                                      D
                                                                 </span>
                                                            </div>
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold">Donoghue Susan</p>
                                                            <p class="mb-0 text-wrap">
                                                                 Hi, How are you? What about our next meeting
                                                            </p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-3.jpg" class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold">Jacob Gines</p>
                                                            <p class="mb-0 text-wrap">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <div class="avatar-sm me-2">
                                                                 <span class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                                      <iconify-icon icon="iconamoon:comment-dots-duotone"></iconify-icon>
                                                                 </span>
                                                            </div>
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold text-wrap">You have received <b>20</b> new messages in the
                                                                 conversation</p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-5.jpg" class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold">Shawn Bunch</p>
                                                            <p class="mb-0 text-wrap">
                                                                 Commented on Admin
                                                            </p>
                                                       </div>
                                                  </div>
                                             </a>
                                        </div>
                                        <div class="text-center py-3">
                                             <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification <i class="bx bx-right-arrow-alt ms-1"></i></a>
                                        </div>
                                   </div>
                              </div>

                              <!-- Theme Setting -->
                              <div class="topbar-item d-none d-md-flex">
                                   <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                                        <i class='bx bx-cog fs-24 align-middle'></i>
                                   </button>
                              </div>

                              <!-- Activity -->
                              <div class="topbar-item d-none d-md-flex">
                                   <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas" data-bs-target="#theme-activity-offcanvas" aria-controls="theme-settings-offcanvas">
                                        <i class='bx bx-time fs-24 align-middle'></i>
                                   </button>
                              </div>

                              <!-- User -->
                              <div class="dropdown topbar-item">
                                   <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-flex align-items-center">
                                             <img class="rounded-circle" width="32" src="assets/images/users/avatar-1.jpg" alt="avatar-3">
                                        </span>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <h6 class="dropdown-header">Welcome Gaston!</h6>
                                        <a class="dropdown-item" href="pages-profile.html">
                                             <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span class="align-middle">Profile</span>
                                        </a>
                                        <a class="dropdown-item" href="apps-chat.html">
                                             <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span class="align-middle">Messages</span>
                                        </a>

                                        <a class="dropdown-item" href="pages-pricing.html">
                                             <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span class="align-middle">Pricing</span>
                                        </a>
                                        <a class="dropdown-item" href="pages-faqs.html">
                                             <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span class="align-middle">Help</span>
                                        </a>
                                        <a class="dropdown-item" href="auth-lock-screen.html">
                                             <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span class="align-middle">Lock screen</span>
                                        </a>

                                        <div class="dropdown-divider my-1"></div>

                                        <a class="dropdown-item text-danger" href="logout.php"><!-- auth-signin.html -->
                                             <i class="bx bx-log-out fs-18 align-middle me-1"></i><span class="align-middle">Logout</span>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </header>

          <!-- Activity Timeline -->
          <div>
               <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas" style="max-width: 450px; width: 100%;">
                    <div class="d-flex align-items-center bg-dark p-3 offcanvas-header">
                         <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                         <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body p-0">
                         <div data-simplebar class="h-100 p-4">
                              <div class="position-relative ms-2">
                                   <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                                  <p class="d-flex align-items-center">Add 3 files to <span class=" d-flex align-items-center text-primary ms-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
                                                  <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                                       <div class="row">
                                                            <div class="col-lg-6 border-end border-light">
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <i class="bx bxl-figma fs-20 text-red"></i>
                                                                      <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                                                 </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                                      <a href="#!" class="text-dark fw-medium">venton.docs</a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                                  </h5>
                                                  <p class="d-flex align-items-center mb-0">Marked<span class=" d-flex align-items-center text-primary mx-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Design </span> as <span class="badge bg-success-subtle text-success px-2 py-1 ms-1"> Completed</span></p>
                                                  <div class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                                       <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                                       <div class="ms-auto">
                                                            <a href="#!" class="fw-medium text-primary fs-18" data-bs-toggle="tooltip" data-bs-title="Download" data-bs-placement="bottom"><iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                                       </div>
                                                  </div>
                                                  <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                             <div class="ms-2">
                                                  <h5 class="mb-1 text-dark fw-semibold fs-15">Venton Application UI v2.0.0 <span class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                                  </h5>
                                                  <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                                                  <div class="mt-2">
                                                       <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                                  </div>
                                                  <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="assets/images/users/avatar-7.jpg" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                                  </h5>
                                                  <div class="row g-2 mt-2">
                                                       <div class="col-lg-4">
                                                            <a href="#!">
                                                                 <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                       <div class="col-lg-4">
                                                            <a href="#!">
                                                                 <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                       <div class="col-lg-4">
                                                            <a href="#!">
                                                                 <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                  </div>
                                                  <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="assets/images/users/avatar-6.jpg" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team member
                                                  </h5>
                                                  <p class="d-flex align-items-center gap-1"><iconify-icon icon="iconamoon:check-circle-1-duotone" class="text-success"></iconify-icon> Added a new member to Front Dashboard</p>
                                                  <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                                  </h5>
                                                  <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon icon="iconamoon:certificate-badge-duotone" class="text-danger fs-20"></iconify-icon>" Best Product Award"</p>
                                                  <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <a href="#!" class="btn btn-outline-dark w-100">View All</a>
                         </div>
                    </div>
               </div>
          </div>

          <!-- Right Sidebar (Theme Settings) -->
          <div>
               <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                    <div class="d-flex align-items-center bg-secondary p-3 offcanvas-header">
                         <h5 class="text-white m-0">Theme Settings</h5>
                         <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body p-0">
                         <div data-simplebar class="h-100">
                              <div class="p-3 settings-bar">

                                   <div>
                                        <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                             <label class="form-check-label" for="layout-color-light">Light</label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                             <label class="form-check-label" for="layout-color-dark">Dark</label>
                                        </div>
                                   </div>

                                   <div>
                                        <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                             <label class="form-check-label" for="topbar-color-light">Light</label>
                                        </div>
                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                             <label class="form-check-label" for="topbar-color-dark">Dark</label>
                                        </div>
                                   </div>


                                   <div>
                                        <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-light" value="light">
                                             <label class="form-check-label" for="leftbar-color-light">
                                                  Light
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                             <label class="form-check-label" for="leftbar-color-dark">
                                                  Dark
                                             </label>
                                        </div>
                                   </div>

                                   <div>
                                        <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-default" value="default">
                                             <label class="form-check-label" for="leftbar-size-default">
                                                  Default
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small" value="condensed">
                                             <label class="form-check-label" for="leftbar-size-small">
                                                  Condensed
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-hidden" value="hidden">
                                             <label class="form-check-label" for="leftbar-hidden">
                                                  Hidden
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover-active" value="sm-hover-active">
                                             <label class="form-check-label" for="leftbar-size-small-hover-active">
                                                  Small Hover Active
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover" value="sm-hover">
                                             <label class="form-check-label" for="leftbar-size-small-hover">
                                                  Small Hover
                                             </label>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>
                    <div class="offcanvas-footer border-top p-3 text-center">
                         <div class="row">
                              <div class="col">
                                   <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- ========== Topbar End ========== -->

          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="panel.php" class="logo-dark">
                         <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="panel.php" class="logo-light">
                         <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="assets/images/logo-light.png" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <!-- Menu Toggle Button (sm-hover) -->
               <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                    <i class='bx bx-menu button-sm-hover-icon'></i>
               </button>

               <div class="scrollbar" data-simplebar>
                    <ul class="navbar-nav" id="navbar-nav">

                         <li class="menu-title">General</li>

                         <li class="nav-item">
                              <a class="nav-link" href="panel.php">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:widget-5-broken"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Dashboard </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:t-shirt-broken"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Products </span>
                              </a>
                              <div class="collapse" id="sidebarProducts">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="AgregarUsuarios.php">Agregar Usuarios</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="listas-de-miembros.php">Lista de Miembos</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                    </ul>
               </div>
          </div>
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->

          <div class="page-content">

               <!-- Start Container -->
               <div class="container-fluid">

                    <!-- ========== Page Title Start ========== -->
                    <div class="row">
                         <div class="col-12">
                              <div class="page-title-box">
                                   <h4 class="mb-0 fw-semibold">Agregar Miembros</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a>Order</a></li>
                                        <li class="breadcrumb-item active">Order Checkout</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->

                    <div class="row">
                         <div class="col-lg-8">
                              <div class="card">
                                   <div class="card-body">
                                        <form method="POST" id="formularioUsuario">
                                             <div class="row">
                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="nombre" class="form-label">Nombre</label>
                                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Juan Pablo" required>
                                                       </div>
                                                  </div>

                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="apellido" class="form-label">Apellido</label>
                                                            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ej. Aracena Domingues" required>
                                                       </div>
                                                  </div>

                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="sexo_id" class="form-label">Sexo</label>
                                                            <select id="sexo_id" name="sexo_id" class="form-control" required>
                                                                 <option value="">Seleccionar</option>
                                                                 <option value="1">Masculino</option>
                                                                 <option value="2">Femenino</option>
                                                            </select>
                                                       </div>
                                                  </div>



                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="plan" class="form-label">Planes</label>
                                                            <select id="planes_id" name="plan_id" class="form-control" required>
                                                                 <option value="">Seleccionar</option>
                                                            </select>
                                                            </select>
                                                       </div>
                                                  </div>

                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="monto" class="form-label">Monto</label>
                                                            <input type="text" id="monto" name="monto" class="form-control" placeholder="$" required>
                                                       </div>
                                                  </div>



                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="dni" class="form-label">DNI</label>
                                                            <input type="text" id="dni" name="dni" class="form-control" placeholder="12345678" required>
                                                       </div>
                                                  </div>
                                                  
                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="codigo" class="form-label">Código</label>
                                                            <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Escanear código" required>
                                                       </div>
                                                  </div>

                                                  <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="fecha_de_vencimiento" class="form-label">Fecha de vencimiento</label>
                                                            <input type="date" id="fecha_de_vencimiento" name="fecha_de_vencimiento" class="form-control" />
                                                       </div>
                                                  </div>
                                             </div>


                                             <div class="mt-3">
                                                  <div class="row">
                                                       <div class="col-lg-3">
                                                            <h4 class="card-title">Metodos de Pago</h4>
                                                       </div>
                                                       <div class="col-lg-9">
                                                            <div class="row">

                                                            </div>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <!-- <h5 class="my-4">Metodo de pagos:</h5> -->
                                                            <div class="row gy-2">
                                                                 <div class="col-lg-6">
                                                                      <div class="form-check form-checkbox-primary ps-0">
                                                                           <label for="shipping-1" class="w-100 mb-2">
                                                                                <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                                                     <div class="d-flex align-items-center gap-2">
                                                                                          <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                                               <img src="assets/images/brands/pago-en-efectivo.png" alt="" class="avatar rounded">
                                                                                          </div>
                                                                                          <div>
                                                                                               <h5 class="text-dark fw-medium">
                                                                                                    Efectivo
                                                                                               </h5>
                                                                                               <!-- <p class="mb-0 text-dark">
                                                                                               Delivery -
                                                                                               <span class="text-muted fw-normal">Today</span>
                                                                                          </p> -->
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="ms-auto">
                                                                                          <!-- <p class="mb-2">$10.00</p> -->
                                                                                          <input class="form-check-input" type="radio" name="metodo_de_pagos_id" id="metodo1" value="1" required>
                                                                                     </div>
                                                                                </div>
                                                                           </label>
                                                                      </div>
                                                                 </div>
                                                                 <script>
                                                                      document.addEventListener("DOMContentLoaded", () => {
                                                                           let buffer = "";

                                                                           document.addEventListener("keypress", function(e) {
                                                                                if (e.key.length === 1) {
                                                                                     buffer += e.key;
                                                                                }

                                                                                if (e.key === "Enter") {
                                                                                     buffer = buffer.trim();

                                                                                     let apellido = "";
                                                                                     let nombre = "";
                                                                                     let sexo = "";
                                                                                     let dni = "";

                                                                                     // Caso A: Formato con comillas dobles
                                                                                     if (buffer.includes('"')) {
                                                                                          const partes = buffer.split('"');
                                                                                          if (partes.length >= 5) {
                                                                                               apellido = partes[1]?.trim(); // entre 1ras comillas
                                                                                               nombre = partes[2]?.trim(); // fuera de comillas
                                                                                               sexo = partes[3]?.trim(); // entre 3ras comillas
                                                                                               dni = partes[4]?.trim(); // luego del sexo
                                                                                          }
                                                                                     }

                                                                                     // Caso B: Formato con @
                                                                                     else if (buffer.includes('@')) {
                                                                                          const partes = buffer.split('@');
                                                                                          if (partes.length >= 5) {
                                                                                               apellido = partes[1]?.trim();
                                                                                               nombre = partes[2]?.trim();
                                                                                               sexo = partes[3]?.trim();
                                                                                               dni = partes[4]?.trim();
                                                                                          }
                                                                                     }

                                                                                     // Rellenar campos si existen
                                                                                     if (apellido && nombre && dni) {
                                                                                          document.getElementById("apellido").value = apellido;
                                                                                          document.getElementById("nombre").value = nombre;
                                                                                          document.getElementById("dni").value = dni;

                                                                                          const sexo_id = document.getElementById("sexo_id");
                                                                                          if (sexo.toUpperCase() === "M") {
                                                                                               sexo_id.value = "1";
                                                                                          } else if (sexo.toUpperCase() === "F") {
                                                                                               sexo_id.value = "2";
                                                                                          }
                                                                                     }

                                                                                     buffer = ""; // Reset para el próximo escaneo
                                                                                }
                                                                           });
                                                                      });
                                                                 </script>



                                                                 <div class="col-lg-6">
                                                                      <div class="form-check form-checkbox-primary ps-0">
                                                                           <label for="shipping-4" class="w-100">
                                                                                <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                                                     <div class="d-flex align-items-center gap-2">
                                                                                          <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                                               <img src="assets/images/brands/transferencia-bancaria.png" alt="" class="avatar rounded">
                                                                                          </div>
                                                                                          <div>
                                                                                               <h5 class="text-dark fw-medium">
                                                                                                    Transferencia
                                                                                               </h5>
                                                                                               <!-- <p class="mb-0 text-dark">
                                                                                               Delivery -
                                                                                               <span class="text-muted fw-normal">25 Apr 2024</span>
                                                                                          </p> -->
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="ms-auto">
                                                                                          <input class="form-check-input" type="radio" name="metodo_de_pagos_id" id="metodo2" value="2" required>
                                                                                     </div>
                                                                                </div>
                                                                           </label>
                                                                      </div>
                                                                 </div>

                                                                 <div class="col-lg-6">
                                                                      <div class="form-check form-checkbox-primary ps-0">
                                                                           <label for="shipping-3" class="w-100">
                                                                                <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                                                     <div class="d-flex align-items-center gap-2">
                                                                                          <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                                               <img src="assets/images/card/mastercard.svg" alt="" class="avatar rounded">
                                                                                          </div>
                                                                                          <div>
                                                                                               <h5 class="text-dark fw-medium">
                                                                                                    Efectivo y MercadoPago
                                                                                               </h5>
                                                                                               <!-- <p class="mb-0 text-dark">
                                                                                                    Delivery -
                                                                                                    <span class="text-muted fw-normal">Tomorrow</span>
                                                                                               </p> -->
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="ms-auto">
                                                                                          <!-- <p class="mb-2">$8.00</p> -->
                                                                                          <input class="form-check-input" type="radio" name="metodo_de_pagos_id" id="metodo3" value="3" required>
                                                                                     </div>
                                                                                </div>
                                                                           </label>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </form>



                                        <div class="mt-5">
                                             <div class="row">
                                                  <div class="col-lg-3">
                                                  </div>
                                                  <div class="col-lg-9">
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>




                         <div class="col-lg-4">
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Order Summary</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="table-responsive">
                                             <table class="table mb-0">
                                                  <tbody>


                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                             <div class="card">
                                                  <div class="card-body">
                                                       <div class="text-center">
                                                            <h5 class="card-title mb-0 text-dark fw-medium">Pago</h5>
                                                            <div class="avatar-md bg-light bg-opacity-50 rounded mx-auto my-3">
                                                                 <iconify-icon icon="solar:cart-4-broken" class="fs-32 text-success avatar-title"></iconify-icon>
                                                            </div>
                                                            <h4 id="pago_valor" class="text-dark fw-medium">0</h4>

                                                            <p id="pago_porcentaje" class="text-muted">0%</p>

                                                            <div class="progress mt-2" style="height: 10px;">
                                                                 <div id="barra_pago" class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                                      role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <!-- <div class="card-footer border-top">
                                                  <a href="#!" class="link-dark fw-medium">View More <i class="bx bx-right-arrow-alt"></i></a>
                                             </div> -->
                                             </div>
                                        </div>

                                        <!-- Recargo -->
                                        <div class="col-xl-6 col-md-6">
                                             <div class="card">
                                                  <div class="card-body">
                                                       <div class="text-center">
                                                            <h5 class="card-title mb-0 text-dark fw-medium">Recargo</h5>
                                                            <div class="avatar-md bg-light bg-opacity-50 rounded mx-auto my-3">
                                                                 <iconify-icon icon="solar:user-plus-broken" class="fs-32 text-success avatar-title"></iconify-icon>
                                                            </div>
                                                            <h4 id="recargo_valor" class="text-dark fw-medium">0</h4>
                                                            <p id="recargo_porcentaje" class="text-muted">0%</p>
                                                            <input type="hidden" id="recargo" name="recargo">
                                                            <div class="progress mt-2" style="height: 10px;">
                                                                 <div id="barra_recargo" class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>



                                        <div class="main-btn my-4 text-center">
                                             <button type="button" class="btn btn-primary" id="btnEnviar">
                                                  <i class="bi bi-save"></i> Generar Código
                                             </button>
                                        </div>







                                        <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="modal-body">
                                                            <div class="card border-0 mb-0">
                                                                 <div class="card-body">
                                                                      <form class="">
                                                                           <div class="row align-items-center">
                                                                                <div class="col-lg-12">
                                                                                     <div class="check-icon text-center">
                                                                                          <img src="assets/images/party.png" alt="" class="img-fluid">
                                                                                          <h4 class="fw-semibold mt-3">Thank You !</h4>
                                                                                          <p class="mb-1">Your Transaction Was
                                                                                               Successful</p>
                                                                                          <p><span class="text-dark fw-medium">Order Id</span> : #0758267/90</p>
                                                                                     </div>
                                                                                     <hr>
                                                                                     <div class="row justify-content-between">
                                                                                          <div class="col-lg-4 col-6">
                                                                                               <span class="fw-semibold text-muted fs-14">Date</span>
                                                                                               <p class="text-dark fw-medium mt-1">
                                                                                                    23 April, 2024</p>
                                                                                          </div>
                                                                                          <div class="col-lg-4 col-6 text-end">
                                                                                               <span class="fw-semibold text-muted fs-14">Time</span>
                                                                                               <p class="text-dark fw-medium">
                                                                                                    11:28 AM</p>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="row justify-content-between mt-3 align-items-center">
                                                                                          <div class="col-lg-6 col-6">
                                                                                               <span class="fw-semibold text-muted fs-14">To</span>
                                                                                               <p class="text-dark fw-medium mb-0 mt-1">Gaston Lapierre</p>
                                                                                               <p class="mb-0">hello@dundermuffilin.com</p>
                                                                                          </div>
                                                                                          <div class="col-lg-4 col-6 text-end">
                                                                                               <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="row justify-content-between mt-3 align-items-center">
                                                                                          <div class="col-lg-6 col-6">
                                                                                               <span class="fw-semibold text-muted fs-14">Amount</span>
                                                                                               <h5 class="fw-medium mt-1">$737.00</h5>
                                                                                          </div>
                                                                                          <div class="col-lg-4 col-6 text-end">
                                                                                               <span class="text-success fw-semibold">Completed <i class="bx bx-check-circle align-middle"></i></span>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </form>
                                                                 </div>
                                                                 <div data-bs-theme="dark">
                                                                      <div class="card-footer d-flex align-items-center border-0 bg-body gap-3 rounded">
                                                                           <div class="rounded-3 avatar bg-light d-flex align-items-center justify-content-center">
                                                                                <img src="assets/images/card/mastercard.svg" alt="" class="avatar-sm">
                                                                           </div>
                                                                           <div class="d-block">
                                                                                <p class="text-white fw-semibold mb-0">
                                                                                     Credit/Debit Card</p>
                                                                                <p class="mb-0 text-white-50">
                                                                                     <span>Master Card ending
                                                                                          **** 7812</span>
                                                                                </p>
                                                                           </div>
                                                                           <div class="ms-auto">
                                                                                <a href="#!" class="text-primary fs-30" data-bs-toggle="tooltip" data-bs-title="Download Invoice" data-bs-placement="bottom"><iconify-icon icon="solar:download-square-bold" class="align-middle"></iconify-icon></a>
                                                                           </div>
                                                                      </div>

                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <!-- End Container Fluid -->

                              <!-- ========== Footer Start ========== -->
                              <!-- <footer class="footer">
                         <div class="container-fluid">
                              <div class="row">
                                   <div class="col-12 text-center">
                                        <script>
                                             document.write(new Date().getFullYear())
                                        </script> &copy; Venton. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                                             href="#" class="fw-bold footer-text" target="_blank">Techzaa</a>
                                   </div>
                              </div>
                         </div>
                    </footer> -->
                              <!-- ========== Footer End ========== -->

                         </div>
                         <!-- ==================================================== -->
                         <!-- End Page Content -->
                         <!-- ==================================================== -->

                    </div>
                    <!-- END Wrapper -->

                    <!-- Vendor Javascript (Require in all Page) -->
                    <script src="assets/js/vendor.js"></script>

                    <!-- App Javascript (Require in all Page) -->
                    <script src="assets/js/app.js"></script>

                    <!-- <script src="assets/js/pages/ecommerce-product-details.js"></script> -->
</body>


<!-- Mirrored from techzaa.in/venton/order-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jun 2025 20:43:25 GMT -->

</html>