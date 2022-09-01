
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Competence Based EShop</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/statics/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center mx-auto">
                <img class="" src="<?php echo base_url() ?>/statics/images/logo.png" alt="">
            </div>
        </div>
    </div>
    <section class="signup-step-container">
        <div class="container">
            
            <div class="row d-flex justify-content-center">
                
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Choose Learners Class</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Products</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Order Summary</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Confirm Purchase</i></a>
                                </li>
                            </ul>
                        </div>
        
                        <form role="form" action="/store/order" class="login-box order_form">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <!-- <h4 class="text-center">Step 1</h4> -->
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Select Class: </label> 
                                                <select name="class" class="form-control" id="class">
                                                    <option value="" selected disabled>----Choose Class----</option>
                                                    <option value="0">All Available Classes</option>
                                                    <?php if(!empty($levels) && is_array($levels)): ?>
                                                        <?php foreach($levels as $level): ?>
                                                        <option value="<?= esc($level['id']) ?>"><?= esc($level['level']) ?></option>
                                                    <?php
                                                     endforeach;
                                                     endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step btn-block">Proceed</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="table_section"></div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Proceed</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="summary_section"></div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Proceed</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name <small class="text-danger">*</small></label> 
                                                <input autocomplete="off" class="form-control" type="text" name="name" required placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address <small class="text-danger">*</small></label> 
                                                <input autocomplete="off" class="form-control" type="email" name="email" required placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number <small class="text-danger">*</small></label> 
                                                <input autocomplete="off" class="form-control" type="text" name="phone" required placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Desired Location of Delivery <small class="text-danger">*</small></label> 
                                                <input autocomplete="off" class="form-control" type="text" name="location" required placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Additional Comment <small class="text-warning">(Optional)</small></label> 
                                                <textarea class="form-control" name="comment" id="" cols="3" rows="3"></textarea> 
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Finish</button></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script  src="<?php echo base_url(); ?>/statics/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(function () {
        $('select').select2({
            closeOnSelect: true
        });
        $('#class').change(function(){
			var html = '';
            var value = $(this).val();
            console.log(value);
			var url  = "<?php echo base_url(); ?>/product/menu/"+value;
			$.ajax({
				url: url,
				dataType: "json",
				type: "GET",
				success: function(data){
					console.log(data);
					$('.table_section').empty().html(data.result);
                    $('.summary_section').empty().html(data.summary_result);
				},
				error: function(jqXHR, textStatus, errorThrown){
					console.log(jqXHR);
				}
			});
		});

        
    });
    function numberWithCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    function getTotal(element){
        var ele_pointer = element.id;
        var total = 0;
        var qty = element.value;
        var cost = $("input[name='"+ele_pointer+"']").val();
        total = cost*qty;
        $("input[name='summary_"+ele_pointer+"']").val(total);
        $(".summary_"+ele_pointer).empty().html(numberWithCommas(total)+'/=');
    }
</script>
</body>
</html>
