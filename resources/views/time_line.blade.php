@extends('layouts.master')

@section('content_tengah')

<img src="assets/images/nbls-profile-header.JPG" class="img-fluid" alt="" height="50px">

            <div class="row">
                    <div class="col-lg-12">
                        <div class="search-result-box">
                          <ul class="nav nav-tabs">
                              <li class="nav-item col-md-4 p-0 ">
                                  <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <p class="fa fa-comments-o fa-2x"></p>
                                      <b>Status</b>
                                  </a>
                              </li>
                              <li class="nav-item col-md-4 p-0">
                                  <a href="#users" data-toggle="tab" aria-expanded="false" class="nav-link">
                                      <p class="fa fa-question fa-2x"></p>
                                      <b>Tanya</b>
                                  </a>
                              </li>
                              <li class="nav-item col-md-4 p-0">
                                  <a href="#other-tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                                      <p class="fa fa-sitemap fa-2x"></p>
                                      <b>Hasil Karya</b>
                                  </a>
                              </li>
                          </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <form acttion="/timeline" method="post">
                                      <div class="row">
                                          {{csrf_field()}}
                                          <div class="col-md-12">
                                              <h4>What's Happening?</h4>
                                            <hr>
                                            </div>
                                            <div class="col-md-2">
                                                  <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-1.jpg" alt="Generic placeholder image" height="54">
                                            </div>
                                              <div class="col-md-10">
                                                  <textarea name="status" type="text" rows="5" cols="45" placeholder="Share Something" class="border-0"></textarea>
                                              </div>
    
                                            <div class="col-md-12">
                                              <hr>
                                              <div class="row">
                                                <div class="col-md-10">
                                                  <ul class="nav nav-pills profile-pills m-t-10">
                                                      <li>
                                                          <a data-toggle="tooltip" data-placement="top" title="choose photos" href="#"><i class="fa fa-camera"></i></a>
                                                      </li>
                                                      <li>
                                                          <a data-toggle="tooltip" data-placement="top" title="flip max 50 kb" href="#"><i class="fa fa-paperclip"></i></a>
                                                      </li>
                                                      <li>
                                                          <a data-toggle="tooltip" data-placement="top" title="link" href="#"><i class="fa fa-link"></i></a>
                                                      </li>
                                                  </ul>
                                                </div>
                                                  <div class="col-md-2">
                                                      <button type="submit" class="btn btn-primary float-right" name="button">SEND</button>
                                                  </div>
                                              </div>
                                            </div>
                                       </div>
                                   </form>
                                </div>

                                <!-- end All results tab -->


                                <!-- Users tab -->
                                <div class="tab-pane" id="users">
                                    <div class="search-item">
                                        <div class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-1.jpg" alt="Generic placeholder image" height="54">
                                            <div class="media-body">
                                                <h5 class="media-heading">
                                                    <a href="#" class="text-dark">Chadengle</a>
                                                </h5>
                                                <p class="font-13">
                                                    <b>Email:</b>
                                                    <span><a href="#" class="text-muted">mediaheader@mail.com</a></span>
                                                </p>
                                                <p class="m-b-0 font-13">
                                                    <b>Bio:</b>
                                                    <br/>
                                                    <span class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end Users tab -->

                                <div class="tab-pane" id="other-tab">
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo
                                       rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                        Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                                         Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                        <div class="col-lg-12">
                            <div class="search-result-box">
                              <ul class="nav nav-tabs">
                                  <li class="nav-item col-md-6 p-0">
                                      <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                          <b>TimeLine</b>
                                      </a>
                                  </li>
                                  <li class="nav-item col-md-6 p-0">
                                      <a href="#newquestion" data-toggle="tab" aria-expanded="false" class="nav-link">
                                          <b>NewQuestion</b>
                                      </a>
                                  </li>

                              </ul>

                              <!-- timeline -->

                                <div class="tab-content">
                                    <div class="tab-pane active" id="timeline">
                                      <div class="row">
                                        <div class="col-sm-12">
                                            <div class=" m-t-20">

                                                <div class="media m-b-30">
                                                    <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right text-primary"><i>Sponsored</i> <i class="fa fa-bookmark"></i> </span>
                                                        <h4 class="text-primary font-16 m-0">
                                                          Chris Greyson
                                                          <small class="text-muted">
                                                            <i class="ion-clock"></i>
                                                            2 days ago
                                                          </small>
                                                        </h4>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                                <hr/>

                                                  <div class="row">
                                                    <div class="col-md-2">
                                                      <i class="fa fa-thumbs-o-up "> 10</i>
                                                    </div>
                                                    <div class="col-md-1">
                                                      <a href="#" class="text-center">
                                                           <span class="badge badge-primary float-right">15</span>
                                                      </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <strong>Jenny, Robert</strong>
                                                      <p>and 13 more like this</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p class="fa fa-comments-o"> 15  </p>
                                                        <p class="fa fa-share"></p>
                                                    </div>
                                                  </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-12 bg-muted">
                                            <div class=" m-t-20">

                                                <div class="media m-b-30">
                                                    <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right text-primary"><i class="ion-android-more"></i> </span>
                                                        <h4 class="text-primary font-16 m-0">
                                                          Andrian
                                                          <small class="text-muted">
                                                            <i class="ion-clock"></i>
                                                            1 days ago
                                                          </small>
                                                        </h4>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                                <hr/>

                                                  <div class="row">
                                                    <div class="col-md-2">
                                                      <i class="fa fa-thumbs-o-up "> 10</i>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <p>Replay</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p class="fa fa-comments-o"> 15  </p>
                                                        <p class="fa fa-share"></p>
                                                    </div>
                                                  </div>

                                            </div>

                                        </div>

                                        <div class="col-sm-12 bg-muted">
                                            <div class=" m-t-20">

                                                <div class="media m-b-30">
                                                    <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-4.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right text-primary"><i class="ion-android-more"></i> </span>
                                                        <h4 class="text-primary font-16 m-0">
                                                          Dimas
                                                          <small class="text-muted">
                                                            <i class="ion-clock"></i>
                                                            1 hours ago
                                                          </small>
                                                        </h4>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                                <hr/>

                                                  <div class="row">
                                                    <div class="col-md-2">
                                                      <i class="fa fa-thumbs-o-up "> 10</i>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <p>Replay</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p class="fa fa-comments-o"> 15  </p>
                                                        <p class="fa fa-share"></p>
                                                    </div>
                                                  </div>

                                            </div>

                                        </div>

                                    </div>

                                        <div class="text-center p-t-10">
                                          <a class="text-warning" href="#">View more comments +</a>
                                          <hr>
                                        </div>

                                        <div class="media">
                                            <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-4.jpg" alt="Generic placeholder image">

                                            <div class="media-body">
                                              <input type="text" class="form-control" placeholder="Tulis Komentar...." name="" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- end timelines tab -->


                                    <!-- question tab -->
                                    <div class="tab-pane" id="newquestion">
                                      <div class="row">
                                        <div class="col-lg-12">
                                            <div class=" m-t-20">

                                                <div class="media m-b-30">
                                                    <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right text-primary"><i>Sponsored</i> <i class="fa fa-bookmark"></i> </span>
                                                        <h4 class="text-primary font-16 m-0">
                                                          Chris Greyson
                                                          <small class="text-muted">
                                                            <i class="ion-clock"></i>
                                                            2 days ago
                                                          </small>
                                                        </h4>

                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                   Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                                <hr/>

                                                  <div class="row">
                                                    <div class="col-md-2">
                                                      <i class="fa fa-thumbs-o-up "> 10</i>
                                                    </div>
                                                    <div class="col-md-1">
                                                      <a href="#" class="text-center">
                                                           <span class="badge badge-primary float-right">15</span>
                                                      </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <strong>Jenny, Robert</strong>
                                                      <p>and 13 more like this</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p class="fa fa-comments-o"> 15  </p>
                                                        <p class="fa fa-share"></p>
                                                    </div>
                                                  </div>
                                                  <hr>

                                                  <div>
                                                    <div class="media m-b-30">
                                                        <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <input type="text" class="form-control" id="" placeholder="Jadilah yang pertama menjawab...">

                                                        </div>
                                                    </div>
                                                    <hr>
                                                  </div>

                                            </div>
                                        </div>
                                    </div>   <!-- end row -->

                                    <div class="row">
                                      <div class="col-lg-12">
                                          <div class=" m-t-20">

                                              <div class="media m-b-30">
                                                  <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                  <div class="media-body">
                                                      <span class="media-meta pull-right text-primary"><i>Sponsored</i> <i class="fa fa-bookmark"></i> </span>
                                                      <h4 class="text-primary font-16 m-0">
                                                        Chris Greyson
                                                        <small class="text-muted">
                                                          <i class="ion-clock"></i>
                                                          2 days ago
                                                        </small>
                                                      </h4>

                                                  </div>
                                              </div>
                                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                               Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                              <hr/>

                                                <div class="row">
                                                  <div class="col-md-2">
                                                    <i class="fa fa-thumbs-o-up "> 10</i>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <a href="#" class="text-center">
                                                         <span class="badge badge-primary float-right">15</span>
                                                    </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <strong>Jenny, Robert</strong>
                                                    <p>and 13 more like this</p>
                                                  </div>
                                                  <div class="col-md-5 text-right">
                                                      <p class="fa fa-comments-o"> 15  </p>
                                                      <p class="fa fa-share"></p>
                                                  </div>
                                                </div>
                                                <hr>

                                                <div>
                                                  <div class="media m-b-30">
                                                      <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                      <div class="media-body">
                                                          <input type="text" class="form-control" id="" placeholder="Jadilah yang pertama menjawab...">

                                                      </div>
                                                  </div>
                                                  <hr>
                                                </div>

                                          </div>
                                      </div>
                                    </div>      <!-- end row -->

                                    <div class="row">
                                      <div class="col-lg-12">
                                          <div class=" m-t-20">

                                              <div class="media m-b-30">
                                                  <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                  <div class="media-body">
                                                      <span class="media-meta pull-right text-primary"><i>Sponsored</i> <i class="fa fa-bookmark"></i> </span>
                                                      <h4 class="text-primary font-16 m-0">
                                                        Chris Greyson
                                                        <small class="text-muted">
                                                          <i class="ion-clock"></i>
                                                          2 days ago
                                                        </small>
                                                      </h4>

                                                  </div>
                                              </div>
                                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                               Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                              <hr/>

                                                <div class="row">
                                                  <div class="col-md-2">
                                                    <i class="fa fa-thumbs-o-up "> 10</i>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <a href="#" class="text-center">
                                                         <span class="badge badge-primary float-right">15</span>
                                                    </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <strong>Jenny, Robert</strong>
                                                    <p>and 13 more like this</p>
                                                  </div>
                                                  <div class="col-md-5 text-right">
                                                      <p class="fa fa-comments-o"> 15  </p>
                                                      <p class="fa fa-share"></p>
                                                  </div>
                                                </div>
                                                <hr>

                                                <div>
                                                  <div class="media m-b-30">
                                                      <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                      <div class="media-body">
                                                          <input type="text" class="form-control" id="" placeholder="Jadilah yang pertama menjawab...">

                                                      </div>
                                                  </div>
                                                  <hr>
                                                </div>

                                          </div>
                                      </div>
                                    </div>      <!-- end row -->

                                    <div class="row">
                                      <div class="col-lg-12">
                                          <div class=" m-t-20">

                                              <div class="media m-b-30">
                                                  <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                  <div class="media-body">
                                                      <span class="media-meta pull-right text-primary"><i>Sponsored</i> <i class="fa fa-bookmark"></i> </span>
                                                      <h4 class="text-primary font-16 m-0">
                                                        Chris Greyson
                                                        <small class="text-muted">
                                                          <i class="ion-clock"></i>
                                                          2 days ago
                                                        </small>
                                                      </h4>

                                                  </div>
                                              </div>
                                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                               Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                                              <hr/>

                                                <div class="row">
                                                  <div class="col-md-2">
                                                    <i class="fa fa-thumbs-o-up "> 10</i>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <a href="#" class="text-center">
                                                         <span class="badge badge-primary float-right">15</span>
                                                    </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <strong>Jenny, Robert</strong>
                                                    <p>and 13 more like this</p>
                                                  </div>
                                                  <div class="col-md-5 text-right">
                                                      <p class="fa fa-comments-o"> 15  </p>
                                                      <p class="fa fa-share"></p>
                                                  </div>
                                                </div>
                                                <hr>

                                                <div>
                                                  <div class="media m-b-30">
                                                      <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                      <div class="media-body">
                                                          <input type="text" class="form-control" id="" placeholder="Jadilah yang pertama menjawab...">

                                                      </div>
                                                  </div>
                                                  <hr>
                                                </div>

                                          </div>
                                      </div>
                                    </div>      <!-- end row -->
                                    </div>
                                    <!-- end question tab -->

                                </div>
                            </div>
                        </div>
                    </div>


          <div class="card-box bg-muted">
            <h5>People You May Follow</h5>
               <div class="row">
                 <div class="col-md-4 border card-box text-center">
                     <img class="rounded-circle thumb-md" src="assets/images/users/avatar-1.jpg" alt="Generic placeholder image">
                     <h6 class="text-primary">Jhon Smith</h6>
                     <p>Graphic Designer</p>

                <div class="row">
                  <div class="col-md-12 text-left p-0">
                    <small class="p-0 text-muted">UX Designer, Photoshop, Web Development</small>
                  </div>
                  <div class="btn-group m-0">
                    <button type="button" class="btn btn-primary" name="button">Following</button>
                    <button type="button" class="btn btn-muted" name="button">Prolife</button>
                  </div>

                </div>
                 </div>

                 <div class="col-md-4 border card-box text-center">
                     <img class="rounded-circle thumb-md" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                     <h6 class="text-primary">Chris Greyson</h6>
                     <p>Graphic Designer</p>

                <div class="row">
                  <div class="col-md-12 text-left p-0">
                    <small class="p-0 text-muted">UX Designer, Photoshop, Web Development</small>
                  </div>
                  <div class="btn-group m-0">
                    <button type="button" class="btn btn-primary" name="button">Following</button>
                    <button type="button" class="btn btn-muted" name="button">Prolife</button>
                  </div>

                </div>
                 </div>

                 <div class="col-md-4 border card-box text-center">
                     <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                     <h6 class="text-primary">Dimas</h6>
                     <p>Graphic Designer</p>

                <div class="row">
                  <div class="col-md-12 text-left p-0">
                    <small class="p-0 text-muted">UX Designer, Photoshop, Web Development</small>
                  </div>
                  <center>
                    <div class="btn-group m-0 float-center">
                      <button type="button" class="btn btn-primary" name="button">Following</button>
                      <button type="button" class="btn btn-muted" name="button">Prolife</button>
                    </div>
                  </center>

                </div>
                 </div>

               </div>
          </div>





          <div class="footer-space">
            <!-- <button type="button" class="tombol btn waves-effect waves-light w-lg float-left"><i class="ti-arrow-left icon-zize"></i>&nbsp;BACK REVIEW</button>
            <button type="button" class="tombol btn btn-primary waves-effect waves-light w-lg float-right">PAY NOW&nbsp;<i class="ti-arrow-right icon-zize"></i></button> -->
          </div>

@endsection