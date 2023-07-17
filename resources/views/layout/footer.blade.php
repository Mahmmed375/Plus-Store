<footer>
    <div class="container">
        <div class="footer-item my-10">
            <div class="container">
                <div class="row p-3 ">
                    <div class="col-lg-3 col-md-6">
                        <div class="products ">
                            <h5 class="lead mx-4 bulde">المنتجات</h5>
                            <ul class="navbar-nav my-1">
                                <li class="nav-item"><a class="nav-link" href="{{ $page2 }}">الموضة</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ $page6 }}">موبايلات</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ $page4 }}">الاكترونية</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="usfull-link">
                            <h5 class="lead mx-3 bulde">روابط المساعدة</h5>
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="/Help">المساعدة</a></li>
                                <li class="nav-item"><a class="nav-link" href="/subort">االدعم الفني</a></li>
                                <?php if (!empty($_COOKIE['names'])):
                                    echo " <li class='nav-item'><a class='nav-link' href='/exit'>تسجيل الخروج</a>";
                                endif;
                                ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="contact-us">
                            <h5 class="lead mx-4 bulde">اتصل بنا</h5>
                            <ul class="navbar-nav">
                                <li class="nav-item my-2"><i class="bi bi-house-door-fill"></i> الخرطوم </li>
                                <li class="nav-item my-2" dir="ltr"><a
                                        style=" text-decoration: none;color: #FDFDFF;"
                                        href="mailto:@mohamdStor.com">stor.suport@amile.com</a><i style="width: 1px"
                                        class="bi bi-envelope-fill"></i></li>
                                <li class="nav-item my-2" dir="ltr"><a
                                        style=" text-decoration: none;color: #FDFDFF;display: inline;font-size: 0.8em;"
                                        href="tel:0125 620 590">0125 620 590</a><i class="bi bi-telephone-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social text-center">
            <div class="row">
                <div class="col">
                    <a href="http://facebook.com"><i class="bi bi-facebook"></i></a>
                    <a href="http://twitter.org"><i class="bi bi-twitter"></i></a>
                    <a href="http://instagram"><i class="bi bi-instagram"></i></a>
                    <a href="http://youtube/stor"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="containe"> --}}
    <div class="copyright text-center p-2">
        <div class="row">
            <div class="col" dir="ltr">
                &copy; <span class="copyrit">2023</span><strong> Live Stor</strong>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</footer>
