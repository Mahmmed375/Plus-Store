<div class="cont fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="/"><i class="bi bi-cart3 "> </i> Plus Stor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-bs-controls="navbarNav" aria-bs-expanded="false" aria-bs-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="kids">الاطفال</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="women">النساء</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="men">الرجال</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="school_supplies">المستلزمات المدرسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Home_Appliances">مستلزمات المنزلية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Electronic"> الاجهزة الاكترونية</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="agricultural_tools">الادوات زراعية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="cars">السيارات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Motorcycles">الدرجات النارية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="bicycles">الدراجات الهوائية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Offers.">العروض و التخفيضات</a>
                    </li>
                    <?php
                    if (!empty($_COOKIE['names'])):
                        echo "<li class='nav-item'><a class='nav-link' href='profile'>حسابي</a></li>"; {{-- <liclass='nav-item'><aclass='nav-link'href='/exit'>تسجيلالخروج</a>"; --}}
                    else:
                        echo "<li class='nav-item'><a class='nav-link' href='/sing_up'>انشاء حساب</a></li><li class='nav-item'><a class='nav-link' href='/sing'>تسجيل الدخول</a></li>";
                    endif;
                    ?>


                </ul>
            </div>
        </nav>
    </div>
</div>
