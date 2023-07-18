@extends('layout.master')
@section('titl')
    {{ $page_titl }}
@stop
@section('body')

    <section class="pro">

        <div class="nav-scroller bg-body shadow-sm">
            <div class="container">
                <nav class="nav" aria-label="Secondary navigation">
                    {{-- <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                <a class="nav-link" href="#">
                    Friends
                    <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
                </a> --}}

                    <a class="nav-link" href="#">هواتف</a>
                    <a class="nav-link" href="#">كمبيوترات</a>
                    <a class="nav-link" href="#">لابتوبات</a>
                    <a class="nav-link" href="#">ساعات</a>
                    <a class="nav-link" href="#">رقاقات</a>
                    <a class="nav-link" href="#">اجهزة شبكة</a>
                    <a class="nav-link" href="#">اخر</a>
                </nav>
            </div>
        </div>

        <div class="container  align-items-center">
            <div class="row ustify-content-sm-center   ">
                @php
                    $db_info = 'mysql:host=localhost;dbname=myshop';
                    $db_user = 'root';
                    $db_password = '';
                    try {
                        $db = new PDO($db_info, $db_user, $db_password);
                        $get_info = 'SELECT id FROM `prodect`;';
                        $info = $db->prepare($get_info);
                        $info->execute();
                        $informtion = $info->fetchAll();
                        $all = count($informtion);
                        for ($i = 0; $i <= $all; $i++) {
                            $get_info = "SELECT * FROM `prodect` WHERE typ='agricultural_tools' AND id=" . $i . ';';
                            $info = $db->prepare($get_info);
                            $info->execute();
                            $informtion = $info->fetchAll();
                            foreach ($informtion as $key => $value) {
                                $titl = $value[1];
                                $discription = $value[2];
                                $prais = $value[5];
                                $descont = $value[4];
                                $pro_img = $value[3];
                                $pro_id = $value[0];
                                if ($value[1] != '') {
                                    if ($value[1] != '') {
                                        echo "
                <div class='col-sm-6 col-md-4  col-lg-3   d-flex flex-column '>
                    <div class='prod' >
                        <div class='card ' >
                            <img class='card-img-top' src='/img/" .
                                            $pro_img .
                                            "' alt=\"" .
                                            $pro_img .
                                            "\"' alt='Card image cap'  style='max-height: 250px;
                                            min-height: 250px; width=100%'>
                            <div class='card-body'>
                                <h5 class='card-title'>" .
                                            $titl .
                                            "</h5>
                                <p class='card-text'>" .
                                            $discription .
                                            "</p>
                                <h3><strong>$ " .
                                            $prais .
                                            "</strong></h3>
                                <h5><del class='card-link'>$" .
                                            $descont .
                                            "</del></h5>
                                <br>
                                <a href='/show' id='" .
                                            $pro_id .
                                            "' class='btn btn-primary'>اشيري الان</a>
                            </div>
                        </div>
                    </div>
                </div>";
                                    }
                                }
                            }
                        }
                    } catch (PDOException $i) {
                        echo $i;
                    }
                @endphp
            </div>
        </div>
    </section>
@stop
