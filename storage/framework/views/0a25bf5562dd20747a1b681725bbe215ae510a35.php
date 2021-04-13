<header class="header">
    <nav class="navbar navbar-light navbar-expand-lg bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('public/assets/images/logo.png')); ?>" class="img-fluid mx-auto" height="114" width="139" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $segment = \Illuminate\Support\Facades\Request::segment(1);
            ?>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo e(($segment == '') ? 'active' :''); ?>">
                        <a class="nav-link text-white" href="<?php echo e(url('/')); ?>">HOME</a>
                    </li>
                    <li class="nav-item <?php echo e(($segment == 'about-us') ? 'active' :''); ?>">
                        <a class="nav-link" href="<?php echo e(route('about_us')); ?>">ABOUT US</a>
                    </li>
                    <li class="nav-item <?php echo e(($segment == 'sales') ? 'active' :''); ?>">
                        <a class="nav-link" href="<?php echo e(route('sales')); ?>">SALES</a>
                    </li>
                    <li class="nav-item <?php echo e(($segment == 'membership') ? 'active' :''); ?>">
                        <a class="nav-link" href="<?php echo e(route('membership')); ?>">MEMBERSHIPS</a>
                    </li>
                    <li class="nav-item <?php echo e(($segment == 'chat_view') ? 'active' :''); ?>">
                        <a class="nav-link">CHAT VIEW</a>
                    </li>
                    <li class="nav-item">
                    <?php if(auth()->guard()->guest()): ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                        <?php endif; ?>
                    </li>
                </ul>
                <?php if(auth()->guard()->check()): ?>
                <div class="my-2 my-lg-0">
                    <img src="<?php echo e(asset('public/assets/images/profile.png')); ?>" alt="User Image" class="img-fluid" width="124" height="124"/>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obabu/resources/views/layouts/header.blade.php ENDPATH**/ ?>