<footer class="footer p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('/')}}"> <img src="{{asset('public/assets/images/footer-logo.png')}}" class="img-fluid" alt="footer logo"></a>
                <div class="social-icons mt-3">
                    <!-- <i class="fa fa-facebook"></i> -->
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-google' ></i>
                    <i class='bx bxl-linkedin-square' ></i>
                    <i class='bx bxl-twitter' ></i>
                    <!-- <fa-icon [icon]="faFacebook" class="fa-facebook p-2"></fa-icon>
                    <fa-icon [icon]="faGoogle" class="fa-google p-2"></fa-icon>
                    <fa-icon [icon]="faLinkedin" class="fa-linkedin p-2"></fa-icon>
                    <fa-icon [icon]="faTwitter" class="fa-twitter p-2"></fa-icon> -->
                </div>
            </div>
            <div class="col-md-9 mt-5">
                <div class="row mt-5">
                    <div class="col-md-4 text-center mt-4">
                        <h3>SUPPORT</h3>
                        <ul class="nav flex-column mt-4">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Locate A Dealer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Product Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Spare Parts </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center mt-4">
                        <h3>OBABU</h3>
                        <ul class="nav flex-column mt-4">
                            <li class="nav-item">
                                <a class="nav-link" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ACTIVITY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SALES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CHAT VIEW</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-4">
                        <h3>CONNECT WITH US</h3>
                        <form class="d-flex flex-column align-items-start justify-content-start mt-4">
                            <div class="input-group mb-3 w-100 shadow-sm ">
                                <div class="input-group-prepend">
											<span class="input-group-text">
												<!-- <fa-icon [icon]="faEnvelope"></fa-icon> -->
												<i class='bx bxs-envelope'></i>
											</span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <button class="btn btn-primary shadow-lg mt-3">CONNECT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <img src="{{asset('public/assets/images/footer.png')}}" class="img-fluid footer-image" alt="footer image"  width="250" height="250">
            </div>
        </div>
    </div>
</footer>
<script>
    function changePrice(type){
        $('#type').val(type);

        if (type == 'monthly'){
            $('.monthly_price').show();
            $('.weekly_price').hide();

        }else{
            $('.monthly_price').hide();
            $('.weekly_price').show();

        }
    }
    function changePriceDay(id,price,number,id2,monthly,weekly,discount){
        var type = $('#type').val();
        if (discount == null) {
            var total = number * price;
        }else {
            var minus = (number * price/100)*discount;
            var total = (number * price) - minus;

        }

        if (id2 != 0){

            if (type == 'monthly'){
                $('.'+id+'-total_price').html('').append(total+'<span>$</span>');

                $('.monthly_price').show();
                $('.weekly_price').hide();

            }else{
                $('.'+id+'-total_price1').html('').append(total+'<span>$</span>');

                $('.monthly_price').hide();
                $('.weekly_price').show();

            }
        }else{
            if (type == 'monthly'){
                $('.'+id+'-total_price').html('').append(monthly+'<span>$</span>');

                $('.monthly_price').show();
                $('.weekly_price').hide();

            }else{
                $('.'+id+'-total_price1').html('').append(weekly+'<span>$</span>');

                $('.monthly_price').hide();
                $('.weekly_price').show();

            }
        }


    }
</script>
