@extends('page/layout/layout')

@section('pageTitle', 'Pricing')

@section('content')

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Dinner with <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates:Loves " data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Good Food Equals Good Mood </h2>
                            <p>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Order Now</a>
                            </div>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
						Pricing
					</h2>
                    <p>Choose a payment plan that that works for you</p>
                </div>
                <div class="panel-pricing-in">
                    <!-- item -->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="images/store.png" alt="" />
                                </div>
                                <h3>Basic</h3>
                                <h3>30 Meals/Month <span>Package</span></h3>
                            </div>
                            <div class="panel-body text-center">
                                <p data-toggle="tooltip" title="Aung May Than"><strong>$30/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 10 GB Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-times"></i> 2GB Storage</li>
                                <li class="list-group-item"><i class="fa fa-times"></i> Offline work</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center"  data-toggle="modal" data-target="#exampleModal" href="#">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="images/food.png" alt="" />
                                </div>
                                <h3>Pro</h3>
                                <h3>1 Meal/Day <span>Package</span></h3>
                            </div>
                            <div class="panel-body text-center">
                                <p data-toggle="tooltip" title="60,000 MMK"><strong>$60/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 50 GB Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center"  data-toggle="modal" data-target="#exampleModal" href="#">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <!-- <div class="col-md-4 col-sm-4 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="images/coffee.png" alt="" />
                                </div>
                                <h3>Platinum</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p data-toggle="tooltip" title="60,000 MMK"><strong>$90/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 100 GB Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
                </div> 
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h4 class="modal-title mt " id="exampleModalLabel">Purchase Form</h4>
                        <button type="button" class="close cc" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body col-12">
                    <form class="needs-validation" id="needs">
                      <div class=" row">
                        <div class="form-group col-md-6">
                          <label  for="inputName4">Name</label>
                          <input type="text" class="form-control validate" id="inputName4" name="NameField" data-error="wrong" data-success="right" placeholder="Name" required >

                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputPh4">Phone Number (format: xxxx-xxx-xxxx):</label>
                          <input type="tel" class="form-control " id="inputPhone4" placeholder="Phone" pattern="^\d{4}-\d{3}-\d{4}$" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="AddrField" placeholder="1234 Main St" required>
                </div>

                <div class="form-group row">
                    <div class=" form-group col-md-6">
                        <label for="inputPcType">Purchase Type</label>
                    <select id="inputPcType" class="form-control" required="required" >
                        <option selected>Choose...</option>
                        <option value="kbz" >KBZ Pay</option>
                        <option value="cash">Cash</option>
                    </select>                        
                 </div>
                 <div class="form-group col-md-6">
                     <label for="inputPackage4">Packages</label>
                     <select id="inputPackage" class="form-control"  required="required">
                        <option selected>Choose...</option>
                        <option id="pg1" value="triple">30meal package       $45</option>
                        <option value="triple">Triple 1 Package   $50</option>
                    </select>
                </div>
            </div>         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-warning submit" >Purchase Now!</button>
           
    </form>
</div>
<div class="modal-footer">
    
</div>
</div>
</div>
</div>



            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end pricing-main -->

    @endsection 
