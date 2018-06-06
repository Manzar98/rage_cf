<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Form Layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{ url('images/60.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/76.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/120.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/152.png') }}">
  <link rel="icon" type="image/x-icon" href="{{ url('images/favicon.ico') }}" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author" />

  <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('css/pages-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('css/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ url('css/select2.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ url('css/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ url('css/switchery.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link class="main-stylesheet" href="{{ url('css/themes/modern.css') }}" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu ">
    <!-- START PAGE-CONTAINER -->
    <div class="header p-r-0 bg-primary">
      <div class="header-inner header-md-height" style="background: #FFF;">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
        <div class="">
          <div class="brand inline no-border hidden-xs-down">
            <img src="{{ url('images/realfit_web2.png') }}" alt="logo" data-src="{{ url('images/realfit_web2.png') }}" data-src-retina="{{ url('images/realfit_web2.png') }}" width="140%">
          </div>
        </div>

      </div>
    </div>
    <div class="page-container ">
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
<!-- START CONTAINER FLUID -->
<div class=" container    container-fixed-lg">
  <!-- START BREADCRUMB -->
  <div class="row">
    <div class="col-xl-5 col-lg-6">
      <!-- START card -->
      <div class="card card-transparent">
        <div class="card-header ">
          <div class="card-title">Validation
          </div>
        </div>
        <div class="card-block">
          <h3>Showcase and guide users with a <br>
          better User Interface &amp; Experience.</h3>
          <p>Forms are one of the most important components
            <br> when it comes to a dashboard. Recognizing that fact, users are
            <br>able work in a maximum content width.</p>
            <br>
            <p class="small hint-text m-t-5">VIA senior product manager
              <br> for UI/UX at REVOX</p>
              <button class="btn btn-primary btn-cons">More</button>
            </div>
          </div>
          <!-- END card -->
        </div>
        <div class="col-xl-7 col-lg-6 ">
         
          <div class="card card-transparent ">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
              <li class="nav-item">
                <a href="#" class="active" data-toggle="tab" data-target="#tab-fillup1"><span>Generate</span></a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" data-target="#tab-fillup2"><span>Veiw</span></a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" data-target="#tab-fillup3"><span>Modify</span></a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" data-target="#tab-fillup4"><span>Add More</span></a>
              </li> 
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="tab-fillup1">
                 <h5>Fill In Tabs</h5>
                 <p>Native boostrap tabs customized to Pages look and feel, simply changing class name you can change color as well as its animations</p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group form-group-default required">
                      <label>Age</label>
                      <input type="text" class="form-control" name="firstName" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-default required">
                      <label>Height</label>
                      <input type="text" class="form-control" name="lastName" required>
                    </div>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group form-group-default required">
                      <label>Weight</label>
                      <input type="text" class="form-control" name="weight" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-default required">
                      <label>Chest</label>
                      <input type="text" class="form-control" name="chest" required>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-primary">Generate</a>
              </div>
              <div class="tab-pane" id="tab-fillup2">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                  </div>
                </div>
                <div class="row" style="margin: 0 auto;width: 66px;margin-bottom: 8px;"><span ><b>OR</b></span></div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Code</label>
                      <input type="text" class="form-control" name="code" required>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-primary">Submit</a>
              </div>
              
              <div class="tab-pane" id="tab-fillup3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                  </div>
                </div>
                <div class="row" style="margin: 0 auto;width: 66px;margin-bottom: 8px;"><span ><b>OR</b></span></div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Code</label>
                      <input type="text" class="form-control" name="code" required>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-primary">Submit</a>
              </div>
               <div class="tab-pane" id="tab-fillup4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                  </div>
                </div>
                <div class="row" style="margin: 0 auto;width: 66px;margin-bottom: 8px;"><span ><b>OR</b></span></div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Code</label>
                      <input type="text" class="form-control" name="code" required>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-primary">Submit</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTAINER FLUID -->

         <div class=" container    container-fixed-lg">
      <div class="row">
        <div class="col-lg-6">
          <div class="sm-m-l-5 sm-m-r-5">
            <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="card card-default m-b-0">
                <div class="card-header " role="tab" id="headingOne">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Collapsible Group Item
                   </a>
                 </h4>
               </div>
               <div id="collapseOne" class="collapse show" role="tabcard" aria-labelledby="headingOne">
                <div class="card-block">
                  Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover.
                </div>
              </div>
            </div>
            <div class="card card-default m-b-0">
              <div class="card-header " role="tab" id="headingTwo">
                <h4 class="card-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Typography Variables
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                <div class="card-block">
                  <h1 class="light">
                    go explore the <span class="semi-bold">world</span>
                  </h1>
                  <h4>
                    small things in life matters the most
                  </h4>
                  <h2>
                    Big Heading <span class="semi-bold">Body</span>,
                    <i>Variations</i>
                  </h2>
                  <h4>
                    <span class="semi-bold">Open Me</span>, Light , <span class=
                    "semi-bold">Bold</span>, <i>Everything</i>
                  </h4>
                  <p>
                    is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking)
                  </p>
                  <p>
                    and adjusting the Case space between pairs of letters (kerning). Type design is a closely related craft, which some consider distinct and others a part of typography
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-default m-b-0">
              <div class="card-header " role="tab" id="headingThree">
                <h4 class="card-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Easy Edit
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="collapse" role="tabcard" aria-labelledby="headingThree">
                <div class="card-block">
                  Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="sm-m-l-5 sm-m-r-5">
          <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
           <div class="card card-default m-b-0">
            <div class="card-header " role="tab" id="headingFourth">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                  Easy Edit
                </a>
              </h4>
            </div>
            <div id="collapseFourth" class="collapse" role="tabcard" aria-labelledby="headingFourth">
              <div class="card-block">
                Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover.
              </div>
            </div>
          </div>
          <div class="card card-default m-b-0">
            <div class="card-header " role="tab" id="headingFive">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Typography Variables
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="collapse" role="tabcard" aria-labelledby="headingFive">
              <div class="card-block">
                <h1 class="light">
                  go explore the <span class="semi-bold">world</span>
                </h1>
                <h4>
                  small things in life matters the most
                </h4>
                <h2>
                  Big Heading <span class="semi-bold">Body</span>,
                  <i>Variations</i>
                </h2>
                <h4>
                  <span class="semi-bold">Open Me</span>, Light , <span class=
                  "semi-bold">Bold</span>, <i>Everything</i>
                </h4>
                <p>
                  is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking)
                </p>
                <p>
                  and adjusting the Case space between pairs of letters (kerning). Type design is a closely related craft, which some consider distinct and others a part of typography
                </p>
              </div>
            </div>
          </div>
          <div class="card card-default m-b-0">
            <div class="card-header " role="tab" id="headingSix">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Easy Edit
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="collapse" role="tabcard" aria-labelledby="headingSix">
              <div class="card-block">
                Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- START CONTAINER FLUID -->
 <div class=" no-padding    container-fixed-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- START card -->
         <div class="card card-transparent">
          <div class="card-header ">
            <div class="card-title">Boostrap Native Modals
            </div>
          </div>
          <div class="card-block">
            Boostrap modals are something very functional and we began to think how to make something better even better. The modals were styled to suite pages color scheme and animation, we did not stop here we added more, Read more.
          </div>
        </div> 
        <!-- END card -->
     </div>
      <div class="col-md-4">
        <!-- START card -->
       <div class="card card-transparent">
          <div class="card-header ">
            <div class="card-title">Style and Animation
            </div>
          </div>
          <div class="card-block">
            These modals are customized with new animations and style, now pages modals support up to 3 different versions and each version have small, medium and large modals. This helps you to make your app look even better
          </div>
        </div>
        <!-- END card -->
    </div>
      <div class="col-md-4">
        <!-- START card -->
      <div class="card card-transparent">
          <div class="card-header ">
            <div class="card-title">Functional
            </div>
          </div>
          <div class="card-block">
            We did not just go for the looks and compromise functionality, since they are boostrap modals they are responsive and fast and works on all screens.
          </div>
        </div>
        <!-- END card -->
     </div>
    </div>
  </div>
</div>
<!-- END CONTAINER FLUID -->
<div class=" container    container-fixed-lg">
  <div class="row">
    <div class="col-md-3">
      <div class="card social-card share  col1 " data-social="item">
        <div class="card-header ">
          <h5 class="text-complete pull-left fs-12">News <i
            class="fa fa-circle text-complete fs-11"></i></h5>
            <div class="pull-right small hint-text">
              5,345 <i class="fa fa-comment-o"></i>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="card-description">
            <h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
          </div>
          <div class="card-footer clearfix">
            <div class="pull-left">via <span class="text-complete">CNN</span>
            </div>
            <div class="pull-right hint-text">
              Apr 23
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <div class="card social-card share  col1 " data-social="item">
          <div class="card-header ">
            <h5 class="text-complete pull-left fs-12">News <i
              class="fa fa-circle text-complete fs-11"></i></h5>
              <div class="pull-right small hint-text">
                5,345 <i class="fa fa-comment-o"></i>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="card-description">
              <h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
            </div>
            <div class="card-footer clearfix">
              <div class="pull-left">via <span class="text-complete">CNN</span>
              </div>
              <div class="pull-right hint-text">
                Apr 23
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div class="card social-card share  col1 " data-social="item">
            <div class="card-header ">
              <h5 class="text-complete pull-left fs-12">News <i
                class="fa fa-circle text-complete fs-11"></i></h5>
                <div class="pull-right small hint-text">
                  5,345 <i class="fa fa-comment-o"></i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-description">
                <h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
              </div>
              <div class="card-footer clearfix">
                <div class="pull-left">via <span class="text-complete">CNN</span>
                </div>
                <div class="pull-right hint-text">
                  Apr 23
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class=" container    container-fixed-lg">
        <!-- START card -->
        <div class="card card-transparent">
          <div class="card-header ">
            <div class="card-title">Separated form layouts
            </div>
          </div>
          <div class="card-block">
            <div class="row">
              <div class="col-md-10">
                <h3>Simple but not simpler, Seperate your forms and create diversified info graphic</h3>
                <p>Want it to be more Descriptive and User Friendly, We Made it possible, Use Seperated Form Layouts Structure to Presentate your Form Fields.
                </p><br>
                <a href="#" class="btn btn-primary">Create a new account </a>
              </div>
            </div>
          </div>
        </div>
      </div>

@include('inc/footer');




         
