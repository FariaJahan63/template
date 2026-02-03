<?php
?>

<html lang="en">

  
<!-- Mirrored from www.xn--b3c3da.com/haclc/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 02:07:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base #href="" />

    <title>Dashboard - Ace Admin</title>

    <!-- include common vendor stylesheets & fontawesome -->
    
     <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">


    <link rel="stylesheet" type="text/css" href="node_modules/%40fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="node_modules/%40fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="node_modules/%40fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="node_modules/%40fortawesome/fontawesome-free/css/solid.css">



    <!-- include vendor stylesheets used in "Dashboard" page. see "/views//pages/partials/dashboard/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="dist/css/ace-font.css">



    <!-- ace.css -->
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/ace.css">-->


    <!-- favicon -->
    <link rel="icon" type="images/png" href="assets/favicon.png" />

    <!-- "Dashboard" page styles, specific to this page for demo only -->
    <!-- <link rel="stylesheet" type="text/css" href="views/pages/dashboard/%40page-style.css">-->
  </head>

  <body>
    <div class="body-container">
      
   
   <div class="main-container bgc-white">

       

        <div role="main" class="main-content">

          <div class="page-content container container-plus">
            <!-- page header and toolbox -->
            <div class="page-header pb-2">
              <h1 class="page-title text-primary-d2 text-150">
                Dashboard
                <small class="page-info text-secondary-d2 text-nowrap">
                  <i class="fa fa-angle-double-right text-80"></i>
                  overview &amp; stats
                </small>
              </h1>

              <div class="page-tools d-inline-flex">
                <button type="button" class="btn btn-light-green btn-h-green btn-a-green border-0 radius-3 py-2 text-600 text-90">
                  <span class="d-none d-sm-inline mr-1">
                Save
            </span>
                  <i class="fa fa-save text-110 w-2 h-2"></i>
                </button>

                <button type="button" class="mx-2px btn btn-light-purple btn-h-purple btn-a-purple border-0 radius-3 py-2 text-90">
                  <i class="fa fa-undo text-110 w-2 h-2"></i>
                </button>

                <div class="btn-group dropdown dd-backdrop dd-backdrop-none-md">
                  <button type="button" class="btn btn-light-primary btn-h-primary btn-a-primary border-0 radius-3 py-2 text-90 dropdown-toggle" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-search text-110 w-2 h-2"></i>
                  </button>

                  <div class="dropdown-menu dropdown-menu-right dropdown-caret dropdown-animated animated-2 dd-slide-up dd-slide-none-md">
                    <div class="dropdown-inner">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="row mt-3">
              <div class="col-xl-8">
                <div class="row px-3 px-lg-4">
                  <div class="col-12">
                    <div class="row h-100 mx-n425">

                      <div class="col-12 col-sm-4 p-0 pos-rel mt-3 mt-sm-0 pt-0 pt-sm-0 text-center">
                        <div class="ccard h-100 d-flex flex-column mx-2 px-2 py-3">
                          <div class="d-flex text-center">
                            <div class="flex-grow-1 mb-3">
                              <div class="text-nowrap text-100 text-dark-l2">
                                Earnings
                              </div>


                              <div>
                                <span class="text-150 text-secondary-d1 mr-n1">$</span>
                                <span class="text-170 text-secondary-d4">
                						198,450
                					</span>

                                <span class="text-blue text-nowrap ml-n1">
                						+5%
                						<i class="fa fa-caret-up"></i>
                					</span>
                              </div>
                            </div>
                          </div>



                          <button type='button' class='btn btn-outline-blue radius-round btn-bold px-4 py-1 mt-3 mx-auto'>View Report</button>
                        </div><!-- /.ccard -->
                      </div><!-- /.col -->


                      <div class="col-12 col-sm-4 p-0 pos-rel mt-3 mt-sm-0 pt-0 pt-sm-0 text-center">
                        <div class="ccard h-100 d-flex flex-column mx-2 px-2 py-3">
                          <div class="d-flex text-center">
                            <div class="flex-grow-1 mb-3">
                              <div class="text-nowrap text-100 text-dark-l2">
                                Page views
                              </div>


                              <div>

                                <span class="text-170 text-secondary-d4">
                						729,351
                					</span>

                                <span class="text-blue text-nowrap ml-n1">
                						+7.2%
                						<i class="fa fa-caret-up"></i>
                					</span>
                              </div>
                            </div>
                          </div>


                          <div class="align-self-center w-95">
                            <canvas class="infobox-line-chart ml-n15 mt-n2" style="height: 64px; width: 100%;" data-values="[1000,800,1800,400,1500,1000,1050,1300,2100,1400,1500,1350]"></canvas>
                          </div>

                        </div><!-- /.ccard -->
                      </div><!-- /.col -->


                      <div class="col-12 col-sm-4 p-0 pos-rel mt-3 mt-sm-0 pt-0 pt-sm-0 text-center">
                        <div class="ccard h-100 d-flex flex-column mx-2 px-2 py-3">
                          <div class="d-flex text-center">
                            <div class="flex-grow-1 mb-3">
                              <div class="text-nowrap text-100 text-dark-l2">
                                Task progress
                              </div>


                            </div>
                          </div>


                          <div class="align-self-center pos-rel text-blue">
                            <canvas class="infobox-progress-chart" style="width: 180px;" data-percent="58"></canvas>
                            <span class="position-center text-600 text-110 text-dark-tp4">
                				58%
                			</span>
                          </div>


                        </div><!-- /.ccard -->
                      </div><!-- /.col -->

                    </div><!-- /.row -->
                  </div>

                  <div class="col-12 mt-35">
                    <div class="row h-100 mx-n425">

                      <div class="col-12 col-md-4 px-0 mb-2 mb-md-0">
                        <div class="ccard h-100 pt-2 pb-25 px-25 d-flex mx-2 overflow-hidden">
                          <!-- the colored circles on bottom right -->
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3" style="width: 5.25rem; height: 5.25rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5" style="width: 4.75rem; height: 4.75rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5" style="width: 4.25rem; height: 4.25rem;"></div>


                          <div class="flex-grow-1 pl-25 pos-rel d-flex flex-column">
                            <div class="text-secondary-d4">
                              <span class="text-200">
                					164
                				</span>



                              <span class="text-md text-danger-m1 align-text-bottom text-nowrap">
                						(-2% <i class="ml-2px fa fa-caret-down"></i>)
                					</span>
                            </div>

                            <div class="mt-auto text-nowrap text-secondary-d2 text-105 letter-spacing mt-n1">
                              orders
                            </div>
                          </div>


                          <div class="ml-auto pr-1 align-self-center pos-rel text-125">
                            <i class="fa fa-shopping-cart text-purple opacity-1 fa-2x mr-25"></i>
                          </div>
                        </div><!-- /.ccard -->
                      </div><!-- /.col -->



                      <div class="col-12 col-md-4 px-0 mb-2 mb-md-0">
                        <div class="ccard h-100 pt-2 pb-25 px-25 d-flex mx-2 overflow-hidden">
                          <!-- the colored circles on bottom right -->
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-blue-l3 opacity-3" style="width: 5.25rem; height: 5.25rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-blue-l2 opacity-5" style="width: 4.75rem; height: 4.75rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-blue-l1 opacity-5" style="width: 4.25rem; height: 4.25rem;"></div>


                          <div class="flex-grow-1 pl-25 pos-rel d-flex flex-column">
                            <div class="text-secondary-d4">
                              <span class="text-200">
                					750
                				</span>

                              <span class="text-md text-success-m1 align-text-bottom text-nowrap">
                						(+8% <i class="ml-2px fa fa-caret-up"></i>)
                					</span>


                            </div>

                            <div class="mt-auto text-nowrap text-secondary-d2 text-105 letter-spacing mt-n1">
                              new followers
                            </div>
                          </div>


                          <div class="ml-auto pr-1 align-self-center pos-rel text-125">
                            <i class="fab fa-twitter text-blue opacity-1 fa-2x mr-25"></i>
                          </div>
                        </div><!-- /.ccard -->
                      </div><!-- /.col -->



                      <div class="col-12 col-md-4 px-0 mb-2 mb-md-0">
                        <div class="ccard h-100 pt-2 pb-25 px-25 d-flex mx-2 overflow-hidden">
                          <!-- the colored circles on bottom right -->
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-orange-l3 opacity-3" style="width: 5.25rem; height: 5.25rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-orange-l2 opacity-5" style="width: 4.75rem; height: 4.75rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-orange-l1 opacity-5" style="width: 4.25rem; height: 4.25rem;"></div>


                          <div class="flex-grow-1 pl-25 pos-rel d-flex flex-column">
                            <div class="text-secondary-d4">
                              <span class="text-200">
                					16
                				</span>



                            </div>

                            <div class="mt-auto text-nowrap text-secondary-d2 text-105 letter-spacing mt-n1">
                              experiments
                            </div>
                          </div>


                          <div class="ml-auto pr-1 align-self-center pos-rel text-125">
                            <i class="fa fa-bolt text-orange opacity-1 fa-2x mr-25"></i>
                          </div>
                        </div><!-- /.ccard -->
                      </div><!-- /.col -->


                    </div>
                  </div>
                </div><!-- /.row -->
              </div>

              <div class="col-xl-4 mt-4 mt-xl-0">
                <div class="card ccard h-100 overflow-hidden">
                  <div class="card-header border-0 bgc-white card-header-sm">
                    <h6 class="card-title text-dark-m3 pl-25 pt-15 text-110">
                      Traffic Sources
                      <br />
                      <span class="text-85 text-dark-l2">
                        Last 7 days
                    </span>
                    </h6>

                    <div class="card-toolbar no-border align-self-start mt-15 mr-1">
                      <div class="dropdown dd-backdrop dd-backdrop-none-md">
                        <a class="btn btn-light-secondary border-0 btn-bold btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                          This Week
                          <i class="fa fa-caret-down ml-2"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-caret dropdown-animated dd-slide-up dd-slide-none-md">
                          <div class="dropdown-inner">
                            <a class="dropdown-item active btn-a-bold m-1" href="#">This Week</a>
                            <a class="dropdown-item m-1" href="#">Last Week</a>
                            <a class="dropdown-item m-1" href="#">This Month</a>
                            <a class="dropdown-item m-1" href="#">Last Month</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-body p-0 bgc-whit flex-grow-1">
                    <div class="d-flex align-items-center justify-content-center flex-wrap h-100">
                      <div class="pos-rel">
                        <div class="position-center text-center text-secondary-d3 mt-n3">
                          <span>
                                total
                            </span>

                          <div class="mt-n1 text-180 text-secondary-d4 text-600">
                            730k
                          </div>
                        </div>

                        <canvas id="traffic-source-chart" class="mb-3" style="height: 170px; width: 170px; max-height: 170px; max-width: 170px;"></canvas>
                      </div>
                    </div>
                  </div>
                </div><!-- /.card -->
              </div>
            </div>





            <div class="row pt-3 mt-1 mt-lg-3">
              <div class="col-lg-5 order-last order-lg-first mt-lg-3">
                <div class="card border-0">
                  <div class="card-header bg-transparent border-0 pl-1">
                    <h5 class="card-title mb-2 mb-md-0 text-120 text-grey-d3">
                      <i class="fa fa-star mr-1 text-orange text-90"></i>
                      Best Sellers
                    </h5>

                    <div class="card-toolbar align-self-center">
                      <a href="#" data-action="toggle" class="card-toolbar-btn text-grey text-110">
                        <i class="fa fa-chevron-up"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body p-0 ccard overflow-hidden">
                    <table class="table brc-black-tp11">
                      <thead class="border-0">
                        <tr class="border-0 bgc-dark-l5 text-dark-tp5">
                          <th class="border-0 pl-4">
                            name
                          </th>
                          <th class="border-0">
                            price
                          </th>
                          <th class="border-0">
                            status
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">
                            Hoverboard
                          </td>

                          <td>
                            <small><s class="text-danger-m1">$229.99</s></small>
                            <span class="text-success-m1 font-bolder text-95">
        							$119.99
        						</span>
                          </td>

                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-info-d2 text-white">on sale</span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">
                            Hiking Shoe
                          </td>

                          <td>
                            <span class="text-info-d2 text-95 font-bolder">
        							$46.45
        						</span>
                          </td>

                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-success text-white">approved</span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">
                            Gaming Console
                          </td>

                          <td>
                            <span class="text-info-d2 text-95 font-bolder">
        							$355.00
        						</span>
                          </td>

                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-danger text-white">pending</span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">
                            Digital Camera
                          </td>

                          <td>
                            <small><s class="text-danger-m1">$324.99</s></small>
                            <span class="text-success-m1 font-bolder text-95">
        							$219.95
        						</span>
                          </td>

                          <td>
                            <span class="badge bgc-secondary-l1 text-dark-tp4 border-1 brc-black-tp10"><s>out of stock</s></span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">
                            Laptop
                          </td>

                          <td>
                            <span class="text-info-d2 text-95 font-bolder">
        							$899.00
        						</span>
                          </td>

                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-orange text-white">SOLD</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-7 mb-4 mb-lg-0 mt-3">
                <div class="card border-0 h-100">
                  <div class="card-header border-0 bgc-transparent pl-1">
                    <h5 class="card-title mb-2 mb-md-0 text-120 text-grey-d3">
                      <i class="fas fa-chart-line text-primary-m2 mr-1 text-105"></i>
                      Sale Stats
                    </h5>

                    <div class="card-toolbar no-border dd-backdrop dd-backdrop-none-md">
                      <a href="#" class="btn btn-xs btn-light-secondary border-1 text-600 px-4 radius-round dropdown-toggle" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        2020
                      </a>

                      <div class="dropdown-menu dropdown-menu-right dropdown-caret dropdown-animated dd-appear-center dd-slide-none-md mw-auto">
                        <div class="dropdown-inner">
                          <a class="dropdown-item active" href="#">2021</a>
                          <a class="dropdown-item" href="#">2020</a>
                          <a class="dropdown-item" href="#">2019</a>
                        </div>
                      </div>
                    </div>

                    <div class="card-toolbar align-self-center">
                      <a href="#" data-action="reload" class="card-toolbar-btn text-success-m2 text-100">
                        <i class="fas fa-sync-alt"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body p-0 ccard px-1 mx-n1 mx-md-0 h-100 d-flex align-items-center">
                    <div class="mx-n2 px-0 mx-md-0 my-2 w-100">
                      <canvas id="saleschart" height="105"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="row mt-5 pt-lg-3">
              <div class="col-12 col-lg-3">
                <div class="card ccard radius-t-0 h-100">
                  <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div><!-- the blue line on top -->

                  <div class="card-header pb-3 brc-secondary-l3">
                    <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                      Transfers
                    </h5>

                    <div class="card-toolbar no-border pl-0 pl-md-2">
                      <a href="#" class="btn btn-sm btn-lighter-grey btn-bgc-white btn-h-light-orange btn-a-light-orange text-600 px-2 py-1 radius-round">
                        <i class="fa fa-arrow-down text-90 mx-1px"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body pt-2 pb-1">

                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Alexa's avatar" src="assets/images/avatar/avatar3.jpg" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        Alexa
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        1,250
                        <span class="text-80">
                            USD
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </div>
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Derek's avatar" src="assets/images/avatar/avatar2.png" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        Derek
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        350
                        <span class="text-80">
                            EUR
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </div>
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Antonio's avatar" src="assets/images/avatar/avatar1.jpg" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        Antonio
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        120
                        <span class="text-80">
                            CAD
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-down text-danger-m1 text-95"></i>
                    </span>
                    </div>
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Gabriel's avatar" src="assets/images/avatar/avatar2.jpg" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        Gabriel
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        620
                        <span class="text-80">
                            GBP
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </div>
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="David's avatar" src="assets/images/avatar/avatar5.png" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        David
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        330
                        <span class="text-80">
                            AUD
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-down text-danger-m1 text-95"></i>
                    </span>
                    </div>
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Jason's avatar" src="assets/images/avatar/avatar6.jpg" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        Jason
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        1,400
                        <span class="text-80">
                            AED
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-down text-danger-m1 text-95"></i>
                    </span>
                    </div>
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Rebecca's avatar" src="assets/images/avatar/avatar7.jpg" class="h-4 w-4" />
                    </span>

                      <span class="text-default-d3 text-90 text-600">
                        Rebecca
                    </span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        350
                        <span class="text-80">
                            USD
                        </span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="card ccard radius-t-0 h-100">
                  <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div><!-- the blue line on top -->

                  <div class="card-header brc-secondary-l3 pb-3">
                    <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                      Todo List
                      <span class="text-sm">
                        (Sortable)
                    </span>
                    </h5>

                    <div class="card-toolbar no-border pl-0 pl-md-2">
                      <a href="#" class="btn btn-sm btn-lighter-grey btn-bgc-white btn-h-light-orange btn-a-light-orange text-600 px-25 radius-round">
                        View all
                        <i class="fa fa-arrow-right ml-2 text-90"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body bgc-white p-0 pb-15">
                    <form autocomplete="off" id="tasks" class="mt-n1px">
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-0" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-0">
                          <span class="align-middle">
                                Answering customer questions
                            </span>
                        </label>



                      </div>
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-1" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-1">
                          <span class="align-middle">
                                Fixing bugs
                            </span>
                          <i class="fa fa-exclamation-circle text-danger-m2 text-110 align-middle ml-1"></i>
                        </label>

                        <span class="badge bgc-danger-l3 border-r-2 radius-r-0 brc-danger-m2 text-danger-d1 ml-1 mr-2">
                            urgent
                        </span>


                      </div>
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-2" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-2">
                          <span class="align-middle">
                                Adding new features
                            </span>
                        </label>


                        <span class="badge bgc-success-l3 border-r-2 radius-r-0 brc-success-m2 text-dark-tp3 ml-1 mr-2">
                            normal
                        </span>

                      </div>
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-3" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-3">
                          <span class="align-middle">
                                Upgrading server hardware
                            </span>
                        </label>



                      </div>
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-4" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-4">
                          <span class="align-middle">
                                Adding new skins
                            </span>
                        </label>



                        <span class="badge bgc-blue-l3 border-r-2 radius-r-0 brc-blue-m2 text-dark-tp3 ml-1 mr-2">
                            low
                        </span>
                      </div>
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-5" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-5">
                          <span class="align-middle">
                                Updating server software
                            </span>
                          <i class="fa fa-exclamation-circle text-danger-m2 text-110 align-middle ml-1"></i>
                        </label>

                        <span class="badge bgc-danger-l3 border-r-2 radius-r-0 brc-danger-m2 text-danger-d1 ml-1 mr-2">
                            urgent
                        </span>


                      </div>
                      <div class="task-item d-flex align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2">
                        <label class="checkbox">
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-6" />
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-6">
                          <span class="align-middle">
                                Cleaning up
                            </span>
                        </label>


                        <span class="badge bgc-success-l3 border-r-2 radius-r-0 brc-success-m2 text-dark-tp3 ml-1 mr-2">
                            normal
                        </span>

                      </div>
                    </form>
                  </div><!-- /.card-body -->
                </div>
              </div>

              <div class="col-12 col-lg-5 mt-4 mt-lg-0">
                <div id="conversations" class="card border-0 shadow-sm h-100">

                  <div class="card-header bgc-primary-d1">
                    <h6 class="card-title text-white font-normal">
                      <i class="far fa-comment-dots text-130 mr-1"></i>
                      <span class="text-110">
                        Conversation
                    </span>
                      <span class="text-95 d-block d-sm-inline text-center">
                        (6 online)
                    </span>
                    </h6>

                    <div class="card-toolbar align-self-center text-white text-90 no-border p-2px">
                      Jack is typing
                      <div class="typing-dots text-160 text-white mx-md-1">
                        <span class="typing-dot">.</span>
                        <span class="typing-dot">.</span>
                        <span class="typing-dot">.</span>
                      </div>
                    </div>

                    <div class="card-toolbar align-self-center">
                      <a href="#" data-action="reload" class="card-toolbar-btn text-white">
                        <i class="fas fa-sync-alt"></i>
                      </a>
                    </div>
                  </div>


                  <div class="card-body border-x-1 brc-primary-l1 p-0">
                    <div class="ace-scroll" data-ace-scroll='{"height": 380, "smooth":true}'>
                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation mt-425">
                        <div class="d-flex align-items-start col px-0">
                          <div class="mr-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Max's avatar" src="assets/images/avatar/avatar1.jpg" class="radius-round w-4 h-4" />
                              <span class="position-tr bgc-success-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Max
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex mb-15 pos-rel">
                              <!-- the triangle -->
                              <span class="position-tl ml-n15 mt-15 w-3 h-3 bgc-grey-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-grey-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Raw denim you probably haven't heard of actively? So lorem ipsum indeed! <span class='fa-stack w-auto'> <i class='fas fa-circle text-dark fa-stack-1x text-100'></i> <i class='fas fa-smile-beam text-warning-m3 text-125 fa-stack-1x pos-rel'></i> </span>
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 ml-2 mt-2">
                                10:21
                              </div>
                            </div>
                            <div class="d-flex mb-15 pos-rel">

                              <div class="py-2 px-3 radius-1 bgc-grey-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Tell you what, dolor sit amet forever!
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 ml-2 mt-2">
                                10:23
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation text-right mt-425">
                        <div class="d-flex flex-row-reverse align-items-start col px-0">
                          <div class="ml-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Mia's avatar" src="assets/images/avatar/avatar7.jpg" class="radius-round w-4 h-4" />
                              <span class="position-tr bgc-orange-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Mia
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">
                              <!-- the triangle -->
                              <span class="position-tr mr-n15 mt-15 w-3 h-3 bgc-primary-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Consectetur adipiscing elit, quis nostrud exercitation.
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 mr-2 mt-2">
                                10:25
                              </div>
                            </div>
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  So count me in! <i class='fa fa-thumbs-up text-orange-m1 text-125 ml-1'></i>
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 mr-2 mt-2">
                                10:25
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation mt-425">
                        <div class="d-flex align-items-start col px-0">
                          <div class="mr-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Max's avatar" src="assets/images/avatar/avatar1.jpg" class="radius-round w-4 h-4" />
                              <span class="position-tr bgc-success-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Max
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex mb-15 pos-rel">
                              <!-- the triangle -->
                              <span class="position-tl ml-n15 mt-15 w-3 h-3 bgc-grey-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-grey-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Heard of them jean shorts Austin! Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 ml-2 mt-2">
                                10:26
                              </div>
                            </div>
                            <div class="d-flex mb-15 pos-rel">

                              <div class="mt-2px pos-rel">
                                <div class='d-flex'>
                                  <div class='border-1 radius-2 mx-1 brc-primary-l1 shadow-sm d-style overflow-hidden'><img alt='Heedphones' src='assets/images/product/wireless-headphone.jpg' width='64' class='d-zoom-2' /></div>
                                  <div class='border-1 radius-2 mx-1 brc-primary-l1 shadow-sm d-style overflow-hidden'><img alt='Speakers' src='assets/images/product/smart-speaker.jpg' class='d-zoom-2' width='64' /></div>
                                  <div class='border-1 radius-2 mx-1 brc-primary-l1 shadow-sm d-style overflow-hidden'><img alt='Shoes' src='assets/images/product/running-shoes.jpg' class='d-zoom-2' width='64' /></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation text-right mt-425">
                        <div class="d-flex flex-row-reverse align-items-start col px-0">
                          <div class="ml-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Mia's avatar" src="assets/images/avatar/avatar7.jpg" class="radius-round w-4 h-4" />
                              <span class="position-tr bgc-orange-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Mia
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">
                              <!-- the triangle -->
                              <span class="position-tr mr-n15 mt-15 w-3 h-3 bgc-primary-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Are you sure fusce dapibus tellus ac cursus commodo??? <span class='fa-stack w-auto'> <i class='fas fa-circle text-dark fa-stack-1x text-100'></i> <i class='fas fa-grin-alt text-warning-m3 text-125 fa-stack-1x pos-rel'></i> </span>
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 mr-2 mt-2">
                                10:49
                              </div>
                            </div>
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Considering donec id elit non mi porta gravida at eget metus is undermined
                                </div>
                              </div>

                              <div class="text-80 text-grey-m2 mr-2 mt-2">
                                10:50
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- conversation footer -->
                  <div class="card-footer px-25 pt-1px bgc-white border-1 border-t-0 brc-primary-l1 radius-b-2">
                    <div class="mb-0 p-3 dcard brc-grey-l1">
                      <div class="input-group input-group-fade">
                        <input id="id-reply" type="text" class="form-control pl-2 border-0 radius-0 shadow-none" placeholder="Write your message ..." />

                        <!-- smiley dropdown -->
                        <div class="btn-group mx-2 dropup">
                          <button type="button" class="btn btn-xs px-1 border-0 btn-lighter-warning btn-bgc-tp dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa-stack">
                                    <i class="far fa-smile text-dark-tp5 text-150 fa-stack-1x"></i>
                                </span>
                          </button>

                          <div class="dropdown-menu dropdown-menu-right p-1">
                            <div class="d-flex">
                              <a class="dropdown-item px-25" href="#">
                                <span class="fa-stack w-auto">
                                            <i class="fas fa-circle text-dark fa-stack-1x text-100"></i>
                                            <i class="fas fa-smile text-warning-m3 text-125 fa-stack-1x pos-rel"></i>
                                        </span>
                              </a>

                              <a class="dropdown-item px-25" href="#">
                                <span class="fa-stack w-auto">
                                            <i class="fas fa-circle text-dark fa-stack-1x text-100"></i>
                                            <i class="fas fa-smile-beam text-warning-m3 text-125 fa-stack-1x pos-rel"></i>
                                        </span>
                              </a>

                              <a class="dropdown-item px-25" href="#">
                                <span class="fa-stack w-auto">
                                            <i class="fas fa-circle text-dark fa-stack-1x text-100"></i>
                                            <i class="fas fa-smile-wink text-warning-m3 text-125 fa-stack-1x pos-rel"></i>
                                        </span>
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="input-group-append">
                          <button class="btn btn-info radius-3px" type="button">
                            Send
                            <i class="fa fa-angle-right ml-1"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.card-footer -->

                </div><!-- /.card -->
              </div>
            </div>
          </div>

         
        </div>

        <div id="id-ace-settings-modal" class="my-1 my-lg-2 modal modal-nb ace-aside aside-right aside-offset aside-below-nav" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content w-auto flex-grow-1 pb-1px radius-0 radius-l-2 border-y-2 border-l-1 brc-default-m3 bgc-white-tp1 shadow">

              <div class="modal-header p-0 radius-0 mx-3">
                <h4 class="modal-title text-primary-d1 text-140 pt-2 pl-1">Demo Settings</h4>

                <button type="button" class="close m-0 mr-n2" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-times text-70" aria-hidden="true"></i>
                </button>
              </div>

              <div class="modal-body mx-md-2" data-ace-scroll='{"smooth": true, "lock": true}'>
                <form autocomplete="off">
                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h5 class="text-default-d2">
                      Zoom
                    </h5>

                    <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        90%
                        <input type="radio" name="zoom-level" value="90" />
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary active">
                        100%
                        <input type="radio" name="zoom-level" value="none" checked />
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        110%
                        <input type="radio" name="zoom-level" value="110" />
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        120%
                        <input type="radio" name="zoom-level" value="120" />
                      </label>
                    </div>
                  </div>


                  <hr class="border-double my-md-3" />


                  <h5 class="text-purple-d1">
                    Themes
                  </h5>

                  <div id="auto-match-div" class="bgc-secondary-l4 py-1 radius-1 mb-3 border-1 radius-1 border-l-3 brc-secondary-m4">
                    <label class="mt-1 pr-2 d-flex align-items-center" for="id-auto-match">
                      <input type="checkbox" class="input-lg mx-15" id="id-auto-match" checked />

                      <span class="pl-0 text-secondary-d1 text-90 font-bolder">
                        Match sidebar & navbar themes
                      </span>
                    </label>
                  </div>


                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mt-3">
                    <h6 class="text-95 pl-1 text-grey-d1">Sidebar</h6>

                    <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0  col-10 col-sm-7" data-toggle="buttons">
                      <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                        Dark
                        <input type="radio" name="sidebar-theme" value="dark" />
                      </label>

                      <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                        Light
                        <input type="radio" name="sidebar-theme" value="light" />
                      </label>
                    </div>
                  </div>



                  <div>
                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-sidebar-themes-dark">
                      <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">
                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark d-style active m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="dark" checked />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark2 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="dark2" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkblue" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslategrey d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkslategrey" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-cadetblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="cadetblue" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-plum d-style my-1px m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="plum" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslateblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkslateblue" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-purple d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="purple" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-steelblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="steelblue" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-blue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="blue" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-teal d-style m-1px d-none">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="teal" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-green d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="green" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkcrimson d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkcrimson" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient1 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient1" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient2 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient2" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient3 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient3" />
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient4 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient4" />
                        </label>

                        <!--
                      <label class="btn btn-xs sidebar-color border-0 sidebar-gradient5 d-style m-1px d-none">
                        <i class="fa fa-check text-white v-active"></i>
                        <input type="radio" name="sidebar-dark" value="gradient5"  />
                      </label>
                      -->

                      </div>
                    </div><!-- #id-sidebar-themes-dark -->


                    <div class="d-none" id="id-sidebar-themes-light">
                      <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                          <label class="active btn btn-xs border-0 sidebar-white2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white" checked />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white2 d-style m-1px d-none">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white2" />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white3 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white3" />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white4 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white4" />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-light d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="light" />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightblue d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightblue" />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightblue2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightblue2" />
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightpurple d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightpurple" />
                          </label>


                        </div>
                      </div>
                    </div><!-- #id-sidebar-themes-light -->

                  </div>

                  <hr class="border-dotted" />

                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h6 class="text-95 pl-1 text-grey-d1">Navbar</h6>

                    <div id="navbar-themes-show" class="btn-group btn-group-toggle align-self-end flex-wrap px-0 col-10 col-sm-7" data-toggle="buttons">
                      <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                        Light
                        <input type="radio" name="navbar-theme" value="light" />
                      </label>

                      <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                        Dark
                        <input type="radio" name="navbar-theme" value="dark" />
                      </label>
                    </div>

                    <div id="navbar-themes-show-msg" class="d-none text-95 px-3 py-15 bgc-secondary-l3 border-1 brc-secondary-m4 border-dotted ml-3 radius-1">
                      Navbar themes can be viewed in<br /> <span>Dashboard <a class="btn-h-dark no-underline px-2px" href="dashboard.html">1</a> & <a class="btn-h-dark no-underline px-2px" href="dashboard-4.html">4</a></span>
                    </div>

                  </div>

                  <div>
                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-navbar-themes-dark">
                      <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                        <label class="btn btn-xs border-0 navbar-blue d-style active m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="blue" checked />
                        </label>

                        <label class="btn btn-xs border-0 navbar-darkblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="darkblue" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-teal d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="teal" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-green d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="green" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-cadetblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="cadetblue" />
                        </label>



                        <label class="btn btn-xs border-0 navbar-plum d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="plum" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-purple d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="purple" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-orange d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="orange" />
                        </label>


                        <label class="btn btn-xs border-0 navbar-brown d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="brown" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-darkgreen d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="darkgreen" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-skyblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="skyblue" />
                        </label>

                        <label class="btn btn-xs border-0 navbar-secondary d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="secondary" />
                        </label>

                      </div>
                    </div><!-- #id-navbar-themes-dark -->

                    <div class="d-none" id="id-navbar-themes-light">
                      <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                        <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                          <label class="active btn btn-xs border-0 navbar-white d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="white" checked />
                          </label>

                          <label class="btn btn-xs border-0 navbar-white2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="white2" />
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightblue d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightblue" />
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightpurple d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightpurple" />
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightgreen d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightgreen" />
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightgrey d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightgrey" />
                          </label>

                          <!--
                        <label class="btn btn-xs border-0 navbar-lightyellow d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="lightyellow"  />
                        </label>
        
                        <label class="btn btn-xs border-0 navbar-khaki d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="khaki"  />
                        </label>
                        -->

                        </div>
                      </div>

                    </div><!-- #id-navbar-themes-light -->

                  </div>


                  <hr class="border-dotted" />


                  <div class="text-95">
                    <h5 class="text-success">Layout</h5>

                    <div class="mt-3 d-flex justify-content-between align-items-center">
                      <label for="id-navbar-fixed" class="pl-1 text-grey-d1">Fixed Navbar</label>
                      <input type="checkbox" class="ace-switch" id="id-navbar-fixed" checked />
                    </div>

                    <div class="mt-2 d-flex justify-content-between align-items-center">
                      <label for="id-sidebar-fixed" class="pl-1 text-grey-d1">Fixed Sidebar</label>
                      <input type="checkbox" class="ace-switch" id="id-sidebar-fixed" checked />
                    </div>

                    <div class="mt-2 d-flex justify-content-between align-items-center">
                      <label for="id-footer-fixed" class="pl-1 text-grey-d1">Fixed Footer</label>
                      <input type="checkbox" class="ace-switch" id="id-footer-fixed" />
                    </div>

                    <div class="mt-2 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                      <div class="pl-1 text-grey-d1">Boxed Layout</div>

                      <div class="w-50 btn-group btn-group-toggle flex-row flex-wrap fl1ex-md-nowrap" data-toggle="buttons">
                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          None
                          <input type="radio" name="boxed-layout" value="none" />
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          All
                          <input type="radio" name="boxed-layout" value="all" />
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          Not Navbar
                          <input type="radio" name="boxed-layout" value="not-navbar" />
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary active">
                          Only Content
                          <input type="radio" name="boxed-layout" value="only-content" checked />
                        </label>
                      </div>
                    </div>

                    <div id="id-body-bg" class="collapse">
                      <div class="mt-3 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                        <h6 class="text-95 pl-1 text-grey-d1">Body Background:</h6>

                        <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                          <label class="btn btn-sm btn-outline-purple active  mb-1">
                            None
                            <input type="radio" name="body-theme" value="auto" checked />
                          </label>

                          <label class="btn btn-sm btn-outline-purple mb-1">
                            images 1
                            <input type="radio" name="body-theme" value="img1" />
                          </label>

                          <label class="btn btn-sm btn-outline-purple mb-1">
                            images 2
                            <input type="radio" name="body-theme" value="img2" />
                          </label>
                        </div>
                      </div>
                    </div>



                    <hr class="border-dotted my-2" />

                    <div class="mt-1 d-flex justify-content-between align-items-center">
                      <label for="id-rtl" class="pl-1 text-grey-d1">RTL (right to left)</label>

                      <input type="checkbox" class="ace-switch" id="id-rtl" />
                    </div>


                  </div>

                  <hr class="border-double my-md-4" />

                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h5 class="text-info">Font</h5>

                    <div class="align-self-end w-75">
                      <select id="id-change-font" class="ace-select radius-round w-100 text-grey brc-h-info-m2">
                        <option value="lato">Lato</option>
                        <option value="manrope">Manrope</option>
                        <option value="montserrat">Montserrat</option>
                        <option value="noto-sans">Noto Sans</option>
                        <option value="open-sans" selected>Open Sans</option>
                        <option value="poppins">Poppins</option>
                        <option value="raleway">Raleway</option>
                        <option value="roboto" class="text-primary-d2 text-600">Roboto (popular)</option>
                        <option value="">----</option>
                        <option value="markazi">Markazi (for RTL languages)</option>
                      </select>
                    </div>
                  </div>


                  <hr class="border-double my-md-4" />

                  <div class="text-95">
                    <h5 class="text-orange-d2 ml-n2px">Sidebar</h5>
                    <!--
                  <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-compact" class="pl-1 text-grey-d2">Compact</label>
        
                      <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" id="id-sidebar-compact"  />
                        <label class="custom-control-label" for="id-sidebar-compact"></label>
                      </div>
                  </div>
                  -->

                    <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                      <div class="pl-1 text-grey-d1">Collapsed Mode</div>

                      <div class="btn-group btn-group-toggle flex-row" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-red active">
                          Expand
                          <input type="radio" name="sidebar-collapsed" value="expandable" checked />
                        </label>

                        <label class="btn btn-sm btn-outline-red">
                          Popup
                          <input type="radio" name="sidebar-collapsed" value="hoverable" />
                        </label>

                        <label class="btn btn-sm btn-outline-red">
                          Hide
                          <input type="radio" name="sidebar-collapsed" value="hideable" />
                        </label>
                      </div>
                    </div>

                    <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-hover" class="pl-1 text-grey-d1">Submenu on Hover</label>

                      <label>
                        <input type="checkbox" class="ace-switch" id="id-sidebar-hover" />
                      </label>
                    </div>

                    <div class="mt-2 d-flex d-xl-none justify-content-between align-items-center">
                      <label for="id-push-content" class="pl-1 text-grey-d1">Push Content</label>

                      <label>
                        <input type="checkbox" class="ace-switch" id="id-push-content" />
                      </label>
                    </div>

                  </div>

                  <div class="my-1"></div>
                </form>
              </div>

              <div class="modal-footer d-none justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  <i class="fa fa-times mr-1"></i>
                  Close
                </button>
                <button type="button" class="btn btn-info">
                  <i class="fa fa-check mr-1"></i>
                  Keep changes
                </button>
              </div>

            </div><!-- .modal-content -->

            
          </div><!-- .modal-dialog -->
        </div>
        
        <!-- .modal-aside -->
    </div>
    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


    <!-- include vendor scripts used in "Dashboard" page. see "/views//pages/partials/dashboard/@vendor-scripts.hbs" -->
    <script src="node_modules/chart.js/dist/Chart.js"></script>


    <script src="node_modules/sortablejs/Sortable.js"></script>


    <!-- include ace.js -->
    <script src="dist/js/ace.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="app/browser/demo.html"></script>



    <!-- "Dashboard" page script to enable its demo functionality -->
    <script src="views/pages/dashboard/%40page-script.js"></script>
  </body>


<!-- Mirrored from www.xn--b3c3da.com/haclc/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 02:07:46 GMT -->
</html>