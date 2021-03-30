
@include('layouts.header')
<section class="activity-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="activity-box">
                        <div class="card shadow-sm pb-4">
                            <div class="card-body">
                                <h5 class="card-title">MEETING</h5>
                                <hr class="mt-0"/>
                                <div class="list-box d-flex justify-content-between shadow-sm">
                                    <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid" alt="Image User">
                                    <div>
                                        <h5>Hane Carmela</h5>
                                        <p>Lorem ipsum, dolo.</p>
                                    </div>
                                    <div>
                                        <h6>14 - JAN - 2021</h6>
                                        <p>Some text here</p>
                                    </div>
                                </div>
                                <div class="list-box list-box-green d-flex justify-content-between shadow-sm mt-3">
                                    <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid" alt="Image User">
                                    <div>
                                        <h5>Hane Carmela</h5>
                                        <p>Lorem ipsum, dolo.</p>
                                    </div>
                                    <div>
                                        <h6>14 - JAN - 2021</h6>
                                        <p>Some text here</p>
                                    </div>
                                </div>
                                <div class="list-box d-flex justify-content-between shadow-sm mt-3">
                                    <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid" alt="Image User">
                                    <div>
                                        <h5>Hane Carmela</h5>
                                        <p>Lorem ipsum, dolo.</p>
                                    </div>
                                    <div>
                                        <h6>14 - JAN - 2021</h6>
                                        <p>Some text here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="activity-box mt-4">
                        <div class="card shadow-sm pb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">MY POD</h5>
                                    <h6>View More</h6>
                                </div>
                                <hr class="mt-0"/>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="list-box d-flex flex-column justify-content-center align-items-center shadow-sm">
                                            <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid mb-1" width="100" height="100" alt="Image User">
                                            <h6>Hane Carmela</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="list-box list-box-g1 d-flex flex-column justify-content-center align-items-center shadow-sm">
                                            <img src="assets/images/boy.png" class="img-fluid mb-1" width="100" height="100" alt="Image User">
                                            <h6>Hane Carmela</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="list-box list-box-g2 d-flex flex-column justify-content-center align-items-center shadow-sm">
                                            <img src="assets/images/child.png" class="img-fluid mb-1" width="100" height="100" alt="Image User">
                                            <h6>Hane Carmela</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="list-box list-box-trans d-flex flex-column justify-content-center align-items-center mt-3">
                                            <img src="assets/images/plus.png" class="img-fluid" width="100" height="100" alt="Image User">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="activity-box">
                        <div class="card bg-card shadow-sm pb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">SEND A HIGH FIVE</h5>
                                    <h6>View More</h6>
                                </div>
                                <hr class="mt-0"/>
                                <table class="table table-borderless">
                                    <thead>
                                    <tr class="bg-thead shadow-lg">
                                        <th scope="col">USER</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">HIGH FIVE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="tr-accepted">
                                        <td class="d-flex align-items-center">
                                            <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid mb-1" width="50" height="50" alt="Image User">
                                            <h6 class="ml-2 color-accepted">Hane Carmela</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-accepted">ACCEPTED</button>
                                        </td>
                                        <td class="pt-4">
                                            <h6 class="color-accepted">12 - JAN - 2020</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-accepted">SEND</button>
                                        </td>
                                    </tr>
                                    <tr class="tr-pending">
                                        <td class="d-flex align-items-center">
                                            <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid mb-1" width="50" height="50" alt="Image User">
                                            <h6 class="ml-2 color-pending">Hane Carmela</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-pending">PENDING</button>
                                        </td>
                                        <td class="pt-4">
                                            <h6 class="color-pending">12 - JAN - 2020</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-pending">SEND</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="activity-box mt-5">
                        <div class="card shadow-sm pb-4 border-color">
                            <div class="card-body p-0">
                                <ul class="list-group border-radius">
                                    <li class="list-group-item active">ANNOUNCEMENT</li>
                                    <li class="list-group-item d-flex bg-list-item1">
                                        <img src="{{asset('public/assets/images/announcement.png')}}" class="img-fluid" height="50" width="100" alt="Announcement">
                                        <div>
                                            <h4>Recently created a group</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi blanditiis quidem.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex bg-list-item2">
                                        <img src="{{asset('public/assets/images/announcement.png')}}" class="img-fluid" height="50" width="100" alt="Announcement">
                                        <div>
                                            <h4>Recently created a group</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi blanditiis quidem.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
