<?php $__env->startSection('title','Obabu Home'); ?>
<?php $__env->startSection('maincontent'); ?>
    <section class="banner">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="banner-details">
                        <h1><span class="text-color-secondary">Instant</span> Video Chat</h1>
                        <h3>Fun Happen Here!</h3>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, odit. Eligendi autem quaerat quisquam aperiam perspiciatis ipsum odit exercitationem at amet eum velit vel possimus consectetur officia, maiores aut molestiae!</p>
                        <div class="join-website text-right mt-4">
                            <a href="<?php echo e(route('membership')); ?>"><button class="btn btn-primary">Join Website</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo e(asset('public/assets/images/sales-1.png')); ?>" class="img-fluid banner-image" alt="Laptop Image" title="Instant Video Chat">
                </div>
            </div>
        </div>
    </section>
    <section class="fun-happen-here mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info-box text-center pt-3 pb-3">
                        <p class="mt-5 mb-0 pt-2 font-weight-bold">Fun Happen OBABU Connects Your Child To Friends To All Over</p>
                        <p class="mb-5 pt-2 font-weight-bold"> The World. Play Dates Will
                            Never Be The Same Here
                        </p>
                    </div>
                    <div class="text-center">
                        <img src="<?php echo e(asset('public/assets/images/info-box-after.png')); ?>" alt="Info" class="img-fluid" width="200" height="150"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="membership mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="membership-left-details">
                        <h2><span class="text-color-secondary">Our</span> Membership Program</h2>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis neque blanditiis optio fugit corrupti, unde reprehenderit aliquid aliquam cumque, voluptas in sequi illo hic voluptate quis possimus labore repellendus commodi! </p>
                        <div class="mt-4">
                            <a href="<?php echo e(route('register')); ?>"> <button class="btn btn-primary mr-3 shadow">SIGN UP</button></a>
                            <button class="btn btn-secondary ml-0 ml-md-3 mt-2 mt-md-0 shadow">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo e(asset('public/assets/images/sales-membership.png')); ?>" class="img-fluid right-image" alt="Membership" title="Membership">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="left-images">
                        <img src="<?php echo e(asset('public/assets/images/sales-membership-3.png')); ?>" class="img-fluid pl-3" width="400" height="350" alt="Membership left">
                        <img src="<?php echo e(asset('public/assets/images/sales-membership-2.png')); ?>" class="img-fluid left-bottom-image" alt="Membership left" title="Membership">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="membership-right-details">
                        <h2>Chat With <span class="text-color-secondary">Any One You</span></h2>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quidem maxime aspernatur, quos, voluptatibus sint.</p>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary shadow font-weight-bold">MAKE FRIENDS!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right">
                    <img src="<?php echo e(asset('public/assets/images/sales-membership-4.png')); ?>" class="img-fluid membership-bottom
							" alt="MemberShip bottom" width="300" height="250" >
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section class="our-services">
        <div class="container">
            <div class="text-left">
                <img src="<?php echo e(asset('public/assets/images/info-box-after.png')); ?>" alt="Info" class="img-fluid" width="200" height="150" />
            </div>
            <h2 class="text-center mb-5">OUR SERVICES</h2>
            <div class="row justify-content-center mt-5 pt-5 pb-5">
                <div class="our-services-image d-xs-none d-sm-none d-md-none d-lg-none d-xl-block">
                    <img src="<?php echo e(asset('public/assets/images/why-us-4.png')); ?>" class="img-fluid" alt="why us image 4" width="200" height="300" />
                </div>
                <div class="col-md-10 mt-5 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="<?php echo e(asset('public/assets/images/our-services-1.png')); ?>" alt="Service 1">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="<?php echo e(asset('public/assets/images/our-services-2.png')); ?>" alt="Service 2">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="<?php echo e(asset('public/assets/images/our-services-3.png')); ?>" alt="Service 3">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-team">
        <div class="container-fluid">
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-md-6 text-center">
                    <h2>JOIN OUR TEAM</h2>
                    <p class="mt-3 pt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo modi optio harum incidunt porro expedita dicta error rem, ab perferendis ea, sed nulla soluta, ipsa accusantium nemo minus magnam consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo modi optio harum incidunt porro expedita dicta error rem, ab perferendis ea, sed nulla soluta, ipsa accusantium nemo minus magnam consectetur.</p>
                    <button class="btn btn-primary mt-5">GET STARTED</button>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obabu/resources/views/home/sales.blade.php ENDPATH**/ ?>