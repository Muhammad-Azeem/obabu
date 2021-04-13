<?php $__env->startSection('title','Obabu Home'); ?>
<?php $__env->startSection('maincontent'); ?>
    <section class="membership_main">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="banner-details">
                        <h5 class="offer_text">LIMITED OFFER</h5>
                        <h1> GET <span class="text-color-secondary">15%</span>OFF</h1>
                        <h5 class="memer_offer">ON MEMBERSHIP PACKAGES</h5>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna !</p>
                        <div class="mt-4 pt-2">
                            <a href="<?php echo e(route('register')); ?>"> <button class="btn btn-primary mr-3 shadow signup">SIGN UP</button></a>
                            <button class="btn btn-secondary ml-3 shadow">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <img src="<?php echo e(asset('public/assets/images/frd.png')); ?>" class="img-fluid banner-image align_to_top" alt="Laptop Image">

                </div>
            </div>
        </div>
    </section>
    <div class="refer_friend">
        <div class="main_ad_pd">
            <div class="row m-0">
                <div class="col-md-7">
                    <div class="refer_img">
                        <img src="<?php echo e(asset('public/assets/images/refer_friend.png')); ?>" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <div class="refer_frnd_text">
                        <h2>REFER A FRIEND</h2>
                        <p>Select Your Right Plan !</p>
                        <button type="button" class="btn"><i class='bx bx-upload mr-1'></i>	Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="table_membership">
        <form action="<?php echo e(route('payment')); ?>" method="post" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>
            <input type="hidden" name="type" id="type" value="weekly">
            <input type="hidden" name="total_price" id="total_amount" value="">
            <input type="hidden" name="package_id" id="package_id" value="">
            <input type="hidden" name="option_id" id="option_id" value="">
            <input type="hidden" name="is_session" id="is_session" value="0">
            <button type="submit" id="sub_btn" style="display: none"></button>
        </form>
        <div class="main_tables_spc">
            <div class="container-fluid">
                <div class="row m-0">
                    <?php $__currentLoopData = $membership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="mem_table shadow">
                                <div class="mem_t_head">
                                    <?php if($key == 0): ?>
                                        <img src="<?php echo e(asset('public/assets/images/blue.png')); ?>" class="img-fluid">
                                    <?php elseif($key == 1): ?>
                                        <img src="<?php echo e(asset('public/assets/images/pink.png')); ?>" class="img-fluid">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('public/assets/images/green.png')); ?>" class="img-fluid">
                                    <?php endif; ?>
                                    <div class="price_mem">




                                        <div class="price_main weekly_price" >
                                            <h4 class="total_price1 <?php echo e($key); ?>-total_price1"><?php echo e(($m->weekly_price/100)*$m->discount); ?> <span>$</span></h4>
                                            <p> Per Week </p>
                                        </div>
                                        <input type="hidden" name="type" id="type" value="weekly">
                                    </div>
                                </div>
                                <div class="mem_t_data">
                                    <div class="name_mem text-center">
                                        <h3><?php echo e(strtoupper($m->name)); ?></h3>
                                    </div>
                                    <div class="check_p">
                                        <p> <i class='bx bx-check'></i> <?php echo e($m->days_per_week); ?> Days Per Week </p>
                                        <p> <i class='bx bx-check'></i> Select Classes Per Day : </p>
                                    </div>
                                    <div class="list_radio_btn">
                                        <?php $__currentLoopData = $m->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <div class="form-check">
                                                
                                                <input class="form-check-input" type="radio" name="exampleRadios2"  id="exampleRadios-<?php echo e($key1); ?>" value="<?php echo e($o->number); ?>" onclick="changePriceDay('<?php echo e($key); ?>','<?php echo e($m->per_day_price); ?>','<?php echo e($o->number); ?>','<?php echo e($key1); ?>','<?php echo e($m->monthly_price); ?>','<?php echo e($m->weekly_price); ?>','<?php echo e($m->discount); ?>')" >
                                                <label class="form-check-label" for="exampleRadios-<?php echo e($key1); ?>">
                                                    <?php echo e($o->number); ?> Classes per day
                                                </label>

                                                
                                                
                                                
                                                
                                                

                                                


                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <div class="pack_btn text-center">
                                        <button type="button" class="btn" onclick="buyPackage('<?php echo e($m->id); ?>','package')">GET PACKAGE</button>
                                    </div>
                                </div>
                                <div class="ribbon ribbon-top-left"><span><?php echo e($m->discount); ?>% Off</span></div>




                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </section>






























































<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obabu/resources/views/home/membership_discount.blade.php ENDPATH**/ ?>