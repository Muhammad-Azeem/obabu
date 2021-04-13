<?php $__env->startSection('title','Obabu Home'); ?>
<?php $__env->startSection('maincontent'); ?>
    <section class="payment_cards">
        <div class="container-fluid">
            <div class="card_main">
                <div class="card_title">
                    <h3>Personal Detail</h3>
                </div>
                <form method="post" action="<?php echo e(route('charge')); ?>" enctype="multipart/form-data" id="payment-form">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="total_amount" value="<?php echo e($data['price']); ?>">
                    <input type="hidden" name="package_id" value="<?php echo e($data['package']->id); ?>">
                    <input type="hidden" name="type" value="<?php echo e($data['type']); ?>">
                    <input type="hidden" name="option_id" value="<?php echo e(isset($data['option']->id)?$data['option']->id:null); ?>">
                <div class="card_fields">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom_input green_inp">
                                <input type="text" name="name" onkeyup="replaceName()" placeholder="Full Name" class="form-control get_name" required>
                            </div>
                        </div>





                        <div class="col-md-12">
                            <div class="custom_input green_inp">
                                <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" name="phone" placeholder="Phone Number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="password" name="password" placeholder="Password" class="form-control" required>
                            </div>
                        </div>
                        <div class="payment_top_cartoon">
                            <img src="<?php echo e(asset('public/assets/images/blue_cartoon.png')); ?>" class="img-fluid">
                        </div>
                        <div class="payment_bottom_cartoon">
                            <img src="<?php echo e(asset('public/assets/images/info-box-after.png')); ?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="radio_img">
                        <img src="<?php echo e(asset('public/assets/images/red_radio.png')); ?>">
                    </div>
                </div>
            </div>
            <div class="card_main chocolate">
                <div class="card_title">
                    <h3>Payment Detail</h3>
                </div>
                <div class="card_fields">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="text" name="name"  placeholder="Name On Card" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" size="16" pattern="/^-?\d+\.?\d*$/" onKeyPress="if (this.value.length == 16)
                                        return false;" name="card_number" placeholder="Card Number" data-stripe="exp-number" class="form-control card-number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" onKeyPress="if (this.value.length == 2)
                                        return false;" name="month" placeholder="Expiry Month" data-stripe="exp-month" class="form-control card-expiry-month" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" onKeyPress="if (this.value.length == 4)
                                        return false;" name="year" placeholder="Expiry Year" data-stripe="exp-year" class="form-control card-expiry-year" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" onKeyPress="if (this.value.length == 4)
                                        return false;" name="cvc" data-stripe="cvc" placeholder="CVV Number" class="form-control card-cvc" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp align_imgs_inp">
                                <div class="accept_payment">
                                    <h4>Accepted payments</h4>
                                </div>
                                <div class="accept_imgs">

                                    <img src="<?php echo e(asset('public/assets/images/Icon awesome-cc-visa.png')); ?>">
                                    <img src="<?php echo e(asset('public/assets/images/Icon awesome-credit-card.png')); ?>">
                                </div>
                            </div>
                        </div>





                    </div>
                    <div class="checkout_btn">
                       <button type="submit" class="btn">CHECKOUT</button>
                    </div>
                </div>
                </form>
                <div class="radio_img">
                    <img src="<?php echo e(asset('public/assets/images/yellow_radio.png')); ?>">
                </div>
            </div>
            <div class="card_main blue_card">
                <div class="card_title">
                    <h3>Order Conformation</h3>
                </div>
                <div class="card_fields">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info_titles">
                                <h5>User Name : </h5>
                                <p class="user_name"></p>
                            </div>




                            <div class="info_titles">
                                <h5>Package Name : </h5>
                                <p><?php echo e(strtoupper($data['package']->name)); ?> <span class="blur_color">Per <?php echo e(ucfirst(str_replace('ly','',$data['type']))); ?></span></p>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="info_titles mb-3">
                                <h5>Total Before Tax :</h5>
                                <p>$<?php echo e($data['price']); ?></p>
                            </div>
                            <div class="info_titles mb-3">
                                <h5>Estimated Tax :</h5>
                                <p>$0</p>
                            </div>
                            <div class="total">
                                <h5>Order Total   :</h5>
                                <p>$<?php echo e($data['price']); ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="radio_img">
                    <img src="<?php echo e(asset('public/assets/images/blue_radio.png')); ?>">
                </div>
                <div class="payment_bottom_cartoon_lst">
                    <img src="<?php echo e(asset('public/assets/images/blue_cartoon.png')); ?>" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="horizontal_line">
            <hr>
        </div>
    </section>
    <script>
        Stripe.setPublishableKey('<?php echo e(env('STRIPE_KEY')); ?>');
        jQuery(function ($) {
            $('#payment-form').submit(function (event) {
                var $form = $(this);

                // Disable the submit button to prevent repeated clicks
                $form.find('button').prop('disabled', true);

                Stripe.card.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val(),
                }, stripeResponseHandler);

                // Prevent the form from submitting with the default action
                return false;
            });
        });
        function stripeResponseHandler(status, response) {
            var $form = $('#payment-form');

            if (response.error) {
                console.log(response.error,22)
                // Show the errors on the form
                swal("Error",response.error.message , "error");
                $form.find('.payment-errors').show().text(response.error.message);
                $form.find('button').prop('disabled', false);
            } else {
                // response contains id and card, which contains additional card details
                var token = response.id;
                // alert(token)
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));

                // and submit
                $form.get(0).submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obabu/resources/views/home/payment.blade.php ENDPATH**/ ?>