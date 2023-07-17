@extends('layout.master')
@section('titl')
    {{ $page_titl }}
@stop
@section('body')
    <section class="pro">
        <div class="container d-flex align-items-center">
            <div class="row ustify-content-sm-center d-flex  ">
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
                        for ($i = 0; $i < $all + 1; $i++) {
                            $get_info = "SELECT * FROM `prodect` WHERE typ='Home_Appliances'AND id=" . $i . ';';
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
                <div class='col-lg-3 col-md-6 d-flex flex-column justify-content-center'>
                    <div class='prod' >
                        <div class='card d-flex' >
                            <img class='card-img-top' src='/img/" .
                                            $pro_img .
                                            "' alt=\"" .
                                            $pro_img .
                                            "\"' alt='Card image cap'>
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
