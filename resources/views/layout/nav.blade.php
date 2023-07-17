<div class="cont fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="/"><i class="bi bi-cart3 "> </i> Live Stor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-bs-controls="navbarNav" aria-bs-expanded="false" aria-bs-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href={{ $page2 }}>الموضة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href={{ $page6 }}>موبايلات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ $page4 }}>الاكترونية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href={{ $page8 }}>عروض اليوم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ $page3 }}>الاجهزة المنزلية</a>
                    </li>
                    <?php
                    if (!empty($_COOKIE['names'])):
                        echo "<li class='nav-item'><a class='nav-link' href='/profile'>الحساب</a></li><li class='nav-item'><a class='nav-link' href='/exit'>تسجيل الخروج</a>";
                    else:
                        echo "<li class='nav-item'><a class='nav-link' href='/sing_up'>انشاء حساب</a></li><li class='nav-item'><a class='nav-link' href='/sing'>تسجيل الدخول</a></li>";
                    endif;
                    ?>


                </ul>
            </div>
        </nav>
    </div>
</div>
