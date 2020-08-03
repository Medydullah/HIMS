


<body style="background:  #e6ecf0">

<div id="app">

  <div class="container-fluid">
      <div class="row">

          @include('expert.components.left-nav')

          <div class="col-lg-9" style="padding-left:0; padding-right: 0;">

              @include('expert.components.top_nav')

              <!-- Content -->
              <main class="py-4">
                  <div class="row justify-content-center">
                      <div class="col-md-12">

                          <div class="card">
                              <!--Drug heading -->
                              <div class="card-header">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <h3 style=" ">
                                              <i class="fa fa-ambulance"> </i>
                                              Drugs
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                              
<!-- ===================================================Drug Top Nav Menu -->
                              <div class="card-body">

                                  <div class="container-fluid" style="background: #ffffff">
                                      <div class="row justify-content-center">

                                          <div class="col-md-12" >

                                              <!-- STAFF TABS -->
                                              <div class="tabs-wrapper"  >
                                                  <ul class="nav nav-tabs nav-justified">


                                                      <li class="nav-item">
                                                          <a class="nav-link {{ $activeTab=='stock'? 'active' : ' ' }} "
                                                             href="{{ route('hce.pharmacy') }}/">
                                                              <i class="fa fa-store"> </i>
                                                              Drug Stock
                                                          </a>
                                                          
                                                      </li>

                                                      <li class="nav-item">
                                                          <a class="nav-link {{ $activeTab=='request'? 'active' : ' ' }}"
                                                             href="{{ route('hce.pharmacy') }}/request">
                                                              <i class="fa fa-ambulance"> </i>
                                                              Drug Request
                                                          </a>
                                                      </li>


                                                      <li class="nav-item">
                                                          <a class="nav-link {{ $activeTab=='table'? 'active' : ' ' }} "
                                                             href="{{ route('hce.pharmacy') }}/table">
                                                              <i class="fa fa-table"> </i>
                                                              Drug Table
                                                          </a>
                                                      </li>

                                                      <li class="nav-item">
                                                          <a class="nav-link {{ $activeTab=='notification'? 'active' : ' ' }} "
                                                             href="{{ route('hce.pharmacy') }}/notification">
                                                              <i class="fa fa-message"> </i>
                                                              Notification
                                                          </a>
                                                      </li>

                                                  </ul>

                                                  <div class="content-wrapper" style="background: #f8fafc;">
                                                  <div class="list-wrapper">

                                                  
                                                                          </a>
                                                                      </li>

                                                                  </ul>
                                                              </div>
