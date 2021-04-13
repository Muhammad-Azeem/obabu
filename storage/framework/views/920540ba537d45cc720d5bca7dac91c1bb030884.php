<?php $__env->startSection('title','Obabu Home'); ?>
<?php $__env->startSection('maincontent'); ?>
    <section class="membership_main">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="banner-details">
                        <h1><span class="text-color-secondary">Our</span> Membership Program</h1>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, odit. Eligendi autem quaerat quisquam aperiam perspiciatis ipsum odit exercitationem at amet eum velit vel possimus consectetur officia, maiores aut molestiae!</p>
                        <div class="mt-4 pt-2">
                            <a href="<?php echo e(route('register')); ?>"> <button class="btn btn-primary mr-3 shadow signup">SIGN UP</button></a>
                            <button class="btn btn-secondary ml-3 shadow">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_position_img">
                        <img src="<?php echo e(asset('public/assets/images/right_side.png')); ?>" class="img-fluid banner-image" alt="Laptop Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="table_membership">
        <div class="tblr_head">
            <div class="heading_sec">
                <h1><span class="text-color-secondary">Membership</span> Purchase </h1>
                <p>Select Your Right Plan !</p>
            </div>
            <div class="sessions">
                <button type="button" class="btn btn-secondary shadow" onclick="changePrice('monthly')">Monthly Session</button>
                <p class="or">OR</p>
                <button type="button" class="btn btn-primary shadow" onclick="changePrice('weekly')">Weekly Session</button>
            </div>
        </div>
        <div class="main_tables_spc">
            <div class="container-fluid">
                <div class="row m-0">
                    <form action="<?php echo e(route('payment')); ?>" method="post" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="type" id="type" value="monthly">
                        <input type="hidden" name="total_price" id="total_amount" value="">
                        <input type="hidden" name="package_id" id="package_id" value="">
                        <input type="hidden" name="option_id" id="option_id" value="">
                        <input type="hidden" name="is_session" id="is_session" value="0">
                        <button type="submit" id="sub_btn" style="display: none"></button>
                    </form>

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
                                    <div class="price_main monthly_price">
                                        <h4 class="total_price <?php echo e($key); ?>-total_price"><?php echo e($m->monthly_price); ?> <span>$</span></h4>
                                        <p> Per Month </p>
                                    </div>
                                        <div class="price_main weekly_price" style="display: none">
                                            <h4 class="total_price1 <?php echo e($key); ?>-total_price1"><?php echo e($m->weekly_price); ?> <span>$</span></h4>
                                            <p> Per Week </p>
                                        </div>
                                        <input type="hidden" name="type" id="type" value="monthly">
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

                                        <input class="form-check-input" type="radio" name="exampleRadios2"  id="exampleRadios-<?php echo e($key1); ?>" value="<?php echo e($o->id); ?>" onclick="changePriceDay('<?php echo e($key); ?>','<?php echo e($m->per_day_price); ?>','<?php echo e($o->number); ?>','<?php echo e($key1); ?>','<?php echo e($m->monthly_price); ?>','<?php echo e($m->weekly_price); ?>',null)" >
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
                            <div class="position_img">
                                <img src="<?php echo e(asset('public/assets/images/contact-us.png')); ?>">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="session_card shadow">

            <div class="session_head text-center">
                <h4>Single Sessions Also Available</h4>
            </div>
            <div class="custom_radio_main">
                <div class="custom_radio">
                    <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="label_container green_color"><?php echo e($s->is_session_count); ?> Sessions
                        <input type="radio" checked="checked" name="radio" onclick="buyPackage('<?php echo e($s->id); ?>','session')">
                        <span class="checkmark"></span>
                        <h4><?php echo e($s->is_session_count * $s->per_day_price); ?> $</h4>
                    </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div class="bottom_main_img">
                    <img src="<?php echo e(asset('public/assets/images/info-box-after.png')); ?>" class="img-fluid">
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obabu/resources/views/home/membership.blade.php ENDPATH**/ ?>