@extends('layouts.master')

@section('content_tengah')
        <!-- alert -->
        <div class="alert alert-warning" role="alert">
            <div class="row">
              <div class="col-1 col-md-1">
                <i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i>
              </div>
              <div class="col col-md-11">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Warning!</strong> You have a live listring with a simillar tittle.
                Please see the duplicate listring policy on eBay for more information.
              </div>
            </div>
          </div>
   <!-- Trie (How to, Strore, History) -->
            <div class="row">
                    <div class="col-lg-12">
                        <div class="search-result-box">
                          <ul class="nav nav-tabs text-center">
                              <li class="nav-item col-md-4 p-0 ">
                                  <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                      <b>How To</b>
                                  </a>
                              </li>
                              <li class="nav-item col-md-4 p-0">
                                  <a href="" data-toggle="modal" data-target="#con-close-modal" aria-expanded="false" class="nav-link">
                                      <b>Store</b>
                                  </a>
                              </li>
                              <li class="nav-item col-md-4 p-0">
                                  <a href="#history" data-toggle="tab" aria-expanded="false" class="nav-link">
                                      <b>History</b>
                                  </a>
                              </li>
                          </ul>
                            <div class="tab-content">
                              <!-- start home -->
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                          <div class="col-md-2">
                                              <!-- <img src="assets/images/users/avatar-2.jpg" class="rounded-circle mr-3" alt="friend"> -->
                                              <div class="media">
                                                  <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-1.jpg" alt="Generic placeholder image" height="64">
                                              </div>
                                          </div>

                                          <div class="col-md-9">
                                                    <div class="row">
                                                          <div class="col-md-6">
                                                            <h4>Andy Kennedy</h4>
                                                            <p class="text-muted">Pro Elit Web Master</p>
                                                          </div>

                                                            <div class="col-md-3 waves-effect" data-toggle="modal" data-target="#con-close-modal" >
                                                              <div class="row">
                                                                <div class="col-4">
                                                                  <h3 class="ion-social-usd-outline"></h3>
                                                                </div>
                                                                <div class="col-md-8">
                                                                   <strong class="text-primary">5000</strong>
                                                                   <p>Point</p>
                                                                </div>
                                                              </div>
                                                            </div>


                                                          <div class="col-md-3 waves-effect" data-toggle="modal" data-target="#con-close-modal">
                                                            <div class="row">
                                                              <div class="col-4">
                                                                <h3><i class=" md-new-releases"></i></h3>
                                                              </div>
                                                              <div class="col-md-8">
                                                                 <strong class="text-primary">30</strong>
                                                                 <p>Gems</p>
                                                              </div>
                                                            </div>
                                                          </div>
                                        </div>
                                        <hr>
                                        <div class="m-b-10">
                                          <span class="label label-default">Analisa</span>
                                          <span class="label label-default">Microsoft Office</span>
                                          <span class="label label-default">Komunikasi</span>
                                          <!-- <button type="button" class="btn btn-dafault btn-sm m-1">Analisa</button>
                                          <button type="button" class="btn btn-dafault btn-sm m-1">Microsoft Office</button>
                                          <button type="button" class="btn btn-dafault btn-sm m-1">Komunikasi</button> -->
                                        </div>
                                      </div>


                                      <!-- All Masa Belanja -->
                                          <div class="col-md-12">
                                              <div class="">
                                                   <div class="row">
                                                   <!-- card buy -->
                                                    <div class="col-md-4 border card-box text-center">
                                                         <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                         <p>Masa Belanja +5 hari</p>
                                                        <!-- <div class="row"> -->
                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                <h3><i class="fa fa-shopping-cart"></i></h3>
                                                                <p>Stock</p>
                                                              </div>

                                                              <div class="col-md-4">
                                                                <h3><i class="ion-social-usd-outline"></i></h3>
                                                                <p>Point</p>
                                                              </div>

                                                              <div class="col-md-4">
                                                                <h3><i class=" md-new-releases"></i></h3>
                                                                <p>Gems</p>
                                                              </div>

                                                            </div>
                                                          <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
                                                        <!-- </div> -->
                                                        <a href="#" class="btn btn-primary">Buy</a>
                                                        
                                                      </div>

                                                    <!-- card buy -->
                                                     <div class="col-md-4 border card-box text-center">
                                                            <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                            <p>Masa Belanja +5 hari</p>
                                                           <!-- <div class="row"> -->
                                                               <div class="row">
                                                                 <div class="col-md-4">
                                                                   <h3><i class="fa fa-shopping-cart"></i></h3>
                                                                   <p>Stock</p>
                                                                 </div>

                                                                 <div class="col-md-4">
                                                                   <h3><i class="ion-social-usd-outline"></i></h3>
                                                                   <p>Point</p>
                                                                 </div>

                                                                 <div class="col-md-4">
                                                                   <h3><i class=" md-new-releases"></i></h3>
                                                                   <p>Gems</p>
                                                                 </div>

                                                               </div>
                                                             <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
                                                           <!-- </div> -->
                                                           <a href="#" class="btn btn-primary">Buy</a>
                                                         </div>

                                                       <!-- card buy -->
                                                        <div class="col-md-4 border card-box text-center">
                                                                 <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                                 <p>Masa Belanja +5 hari</p>
                                                                <!-- <div class="row"> -->
                                                                    <div class="row">
                                                                      <div class="col-md-4">
                                                                        <h3><i class="fa fa-shopping-cart"></i></h3>
                                                                        <p>Stock</p>
                                                                      </div>

                                                                      <div class="col-md-4">
                                                                        <h3><i class="ion-social-usd-outline"></i></h3>
                                                                        <p>Point</p>
                                                                      </div>

                                                                      <div class="col-md-4">
                                                                        <h3><i class=" md-new-releases"></i></h3>
                                                                        <p>Gems</p>
                                                                      </div>

                                                                    </div>
                                                                  <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
                                                                <!-- </div> -->
                                                                <a href="#" class="btn btn-primary">Buy</a>
                                                              </div>

                                                      <!-- card buy -->
                                                        <div class="col-md-4 border card-box text-center">
                                                              <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                              <p>Masa Belanja +5 hari</p>
                                                             <!-- <div class="row"> -->
                                                                 <div class="row">
                                                                   <div class="col-md-4">
                                                                     <h3><i class="fa fa-shopping-cart"></i></h3>
                                                                     <p>Stock</p>
                                                                   </div>

                                                                   <div class="col-md-4">
                                                                     <h3><i class="ion-social-usd-outline"></i></h3>
                                                                     <p>Point</p>
                                                                   </div>

                                                                   <div class="col-md-4">
                                                                     <h3><i class=" md-new-releases"></i></h3>
                                                                     <p>Gems</p>
                                                                   </div>

                                                                 </div>
                                                               <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
                                                             <!-- </div> -->
                                                             <a href="#" class="btn btn-primary">Buy</a>
                                                           </div>

                                                       <!-- card buy -->
                                                        <div class="col-md-4 border card-box text-center">
                                                               <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                               <p>Masa Belanja +5 hari</p>
                                                              <!-- <div class="row"> -->
                                                                  <div class="row">
                                                                    <div class="col-md-4">
                                                                      <h3><i class="fa fa-shopping-cart"></i></h3>
                                                                      <p>Stock</p>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                      <h3><i class="ion-social-usd-outline"></i></h3>
                                                                      <p>Point</p>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                      <h3><i class=" md-new-releases"></i></h3>
                                                                      <p>Gems</p>
                                                                    </div>

                                                                  </div>
                                                                <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
                                                              <!-- </div> -->
                                                              <a href="#" class="btn btn-primary">Buy</a>
                                                            </div>

                                                        <!-- card buy -->
                                                         <div class="col-md-4 border card-box text-center">
                                                                <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                                                <p>Masa Belanja +5 hari</p>
                                                               <!-- <div class="row"> -->
                                                                   <div class="row">
                                                                     <div class="col-md-4">
                                                                       <h3><i class="fa fa-shopping-cart"></i></h3>
                                                                       <p>Stock</p>
                                                                     </div>

                                                                     <div class="col-md-4">
                                                                       <h3><i class="ion-social-usd-outline"></i></h3>
                                                                       <p>Point</p>
                                                                     </div>

                                                                     <div class="col-md-4">
                                                                       <h3><i class=" md-new-releases"></i></h3>
                                                                       <p>Gems</p>
                                                                     </div>

                                                                   </div>
                                                                 <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
                                                               <!-- </div> -->
                                                               <a href="#" class="btn btn-primary">Buy</a>
                                                             </div>
                                                   </div>
                                              </div>
                                          </div>
                                      <!-- end All Belanja -->

                                      </div>
                                  </div>
                              <!-- end home -->

                                <!-- end All results tab -->


                                <!-- Users tab -->
                                <div class="tab-pane" id="users">
                                    <div class="search-item">

                                    </div>

                                </div>
                                <!-- end Users tab -->

                                <!-- Start History -->
                                <div class="tab-pane" id="history">
                                  <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-9">
                                          <div class="row">
                                            <div class="col-md-3 col-md-3-offside">

                                            </div>
                                              <div class="col-md-6">
                                                <h4>My Points</h4>
                                              </div>

                                                <div class="col-md-3 " >
                                                  <div class="row">
                                                    <div class="col-4">
                                                      <h3 class="ion-social-usd-outline"></h3>
                                                    </div>
                                                    <div class="col-md-8">
                                                       <strong class="text-primary">5000</strong>
                                                       <p>Point</p>
                                                    </div>
                                                  </div>
                                                </div>

                                          </div>
                                        </div>
                                      </div>

                                        <!-- start card -->
                                          <div class="">

                                               <table class="table table-striped" class="table table-striped table-bordered m-b-0 toggle-circle" data-page-size="7">
                                                   <thead>
                                                   <tr>
                                                       <th>
                                                          <div class="checkbox checkbox-primary">
                                                              <input id="checkbox2" type="checkbox" checked>
                                                          </div>
                                                        </th>
                                                       <th>Item</th>
                                                       <th>Date</th>
                                                       <th>Point</th>
                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                   <tr>
                                                       <th scope="row">
                                                         <div class="checkbox checkbox-primary">
                                                           <input id="checkbox2" type="checkbox" checked>
                                                         </div>
                                                       </th>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                   </tr>
                                                   <tr>
                                                       <th scope="row">
                                                         <div class="checkbox checkbox-primary">
                                                           <input id="checkbox2" type="checkbox" checked>
                                                         </div>
                                                       </th>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                   </tr>
                                                   <tr>
                                                     <th scope="row">
                                                       <div class="checkbox checkbox-primary">
                                                         <input id="checkbox2" type="checkbox" checked>
                                                       </div>
                                                     </th>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                   </tr>
                                                   <tr>
                                                     <th scope="row">
                                                       <div class="checkbox checkbox-primary">
                                                         <input id="checkbox2" type="checkbox" checked>
                                                       </div>
                                                     </th>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                   </tr>
                                                   <tr>
                                                     <th scope="row">
                                                       <div class="checkbox checkbox-primary">
                                                         <input id="checkbox2" type="checkbox" checked>
                                                       </div>
                                                     </th>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                   </tr>
                                                   <tr>
                                                     <th scope="row">
                                                       <div class="checkbox checkbox-primary">
                                                         <input id="checkbox2" type="checkbox" checked>
                                                       </div>
                                                     </th>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                   </tr>

                                                   </tbody>
                                               </table>
                                            </div>

                                        <!-- end card -->


                                </div>

                      <!-- end history -->

                            </div>


                        </div>
                    </div>
                </div>

          <div class="footer-space">
            <!-- <button type="button" class="tombol btn waves-effect waves-light w-lg float-left"><i class="ti-arrow-left icon-zize"></i>&nbsp;BACK REVIEW</button>
            <button type="button" class="tombol btn btn-primary waves-effect waves-light w-lg float-right">PAY NOW&nbsp;<i class="ti-arrow-right icon-zize"></i></button> -->
          </div>

@endsection


  <!-- Responsive modal -->
  <!-- <button type="button" class="btn btn-secondary waves-effect" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button> -->
  <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="card">
        <div class="text-center">
            <h3>Cancel Free Order</h3>
              <img class="rounded-circle thumb-md" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                    <h5>Are You Sure Want to Order This Items?</h5>

                  <p>Quantity <input type="number" class="" name="number" value="" size="1"> </p>

                <!-- <button  type="sumbit" class="btn btn-primary" name="button">Buy</button> -->
              <!-- </div> -->
            <div class="m-b-10">
              <button type="button" class="btn btn-info waves-effect waves-light" >Yes, With Coints</button>
              <button type="button" class="btn btn-info waves-effect waves-light">Yes, With Gems</button>
              <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">NO</button>
            </div>
            </div>
      </div>
  </div>
  </div>
<!-- /.modal -->


  