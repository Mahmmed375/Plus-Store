@extends('layout.master')
@section('titl')
    {{ $page_titl }}
@endsection

@section('body')
    <div class="prodect">
        @php
            $pro = $_COOKIE['s'];
            $r = (int) $pro;

            $db_info = 'mysql:host=localhost;dbname=myshop';
            $db_user = 'root';
            $db_password = '';
            try {
                $db = new PDO($db_info, $db_user, $db_password);
                $get_info = 'SELECT * FROM `prodect` WHERE id=' . $r . ';';
                $info = $db->prepare($get_info);
                $info->execute();
                $informtion = $info->fetchAll();
                $titl = '';
                $discription = '';
                $prais = '';
                $descont = '';
                $pro_img = '';
                $pro_id = '';
                $typ = '';
                foreach ($informtion as $key => $value) {
                    $titl = $value[1];
                    $discription = $value[2];
                    $prais = $value[5];
                    $descont = $value[4];
                    $pro_img = $value[3];
                    $pro_id = $value[0];
                    $typ = $value[6];
                }
            } catch (PDOException $i) {
                echo $i;
            }

        @endphp

        <!-- start sell-one-product -->
        <section class="sell-one-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 my-3">
                        <img class="card-img-top" src="/img/{{ $pro_img }}" alt="Card image cap">
                    </div>
                    <div class="col-sm-6 my-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $titl }}</h5>
                            <p class="card-text">{{ $typ }}</p>
                            <h3><strong>{{ "$" . $prais }}</strong></h3>
                            <h5><del class="card-link">{{ "$" . $descont }}</del></h5>
                            <br>
                            <h4>الميزات</h4>
                            <br>
                            <p class="card-text">{{ $discription }}</p>
                            <form action="/sell" method="GET" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn btn-primary">شراء</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>
    <!-- end sell-one-product -->
@endsection
