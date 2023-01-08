<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<main id="main"> 

<div id="myModal" class="modal fade fade bd-example-modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title">Subscribe our Newsletter</h5> -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                  <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-12">
                      <div class="search-form">
                        <div class="container">
                          <div class="row d-flex">
                            <div class="col-lg-6 selltext">
                                <h2 class="text-light fl-heading">Sell Your Calgary House Fast</h2>
                                <p class="f1-para text-light mt-3">Here at Cashyn Homes, we will buy your house fast! You will never have to make any expensive touch-ups or clean out the property. We buy houses in any condition and pay CASH! Call us now or submit your property details to get started.</p>
                                <!-- <ol class="text-light mt-3">
                                    <li><strong>Fill out this form:</strong> we’ll connect over the phone to discuss your property, and make you a fair offer.</li>
                                    <li>Choose our Cash Offer Program OR list it on the market with us</li>
                                    <li>Close on the date you choose and get your cash</li>
                                </ol>
                                <p class="text-light text-center hassel">No Hassles – No Obligation – No Risk! </p> -->
                            </div>

                            <div class="col-lg-6">
                              <form action="#" class="filter-form">
                                <div class="row first-row">
                                     <h4 class="text-center">Get A Fast & Fair Cash Offer On Your House Today</h4>
                                     <p class="text-dark text-center buyhouse">We Buy Houses for cash all over Calgary. Please submit your details below and we will reach out to you within 24 hours with your fair cash offer.</p>
                                  <div class="col-12">
                                    <div class="form-group mb-md-2">
                                       <label class="addresslabel" for="inputEmail4"><strong>Property Address</strong> <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Enter a location">
                                      <!-- <small class="form-text text-muted text-center">Property Address</small> -->
                                      <!-- <small id="emailHelp" class="form-text text-muted">This field is required</small> -->
                                    </div>
                                  </div>
                                </div>
                                <div class="second-row row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                       <label class="addresslabel" for="inputEmail4q"><strong>Phone</strong> <span class="text-danger">*</span></label>
                                      <input type="email" class="form-control" id="inputEmail4q" aria-describedby="emailHelp">
                                      <!-- <small id="emailHelp" class="form-text text-muted">This field is required</small> -->
                                    </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                       <label class="addresslabel" for="inputEmail4y"><strong>Email</strong> <span class="text-danger">*</span></label>
                                      <input type="phone" class="form-control" id="inputEmail4y" aria-describedby="phoneHelp">
                                      <!-- <small id="emailHelp" class="form-text text-muted">This field is required</small> -->
                                    </div>
                                  </div>
                                </div>
                                <div class="second-row row">
                                   <div class="col-12">
                                    <a href="form.php" type="button" class="btn btn-primary btn-lg search-btn mx-auto">Submit >></a>
                                  </div>
                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#myModal').modal('show'); 
    }); 
</script>



<?php include 'includes/footer.php';?>
<?php include 'includes/script.php';?>
