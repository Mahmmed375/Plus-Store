@php
    $db_info = 'mysql:host=localhost;dbname=myshop';
    $db_user = 'root';
    $db_password = '';
    try {
        $db = new PDO($db_info, $db_user, $db_password);
        $id = 'null';
        if (isset($_COOKIE['names']) && $_COOKIE['names'] != '') {
            $id = $_COOKIE['names'];
        }
        $query3 = 'SELECT * FROM `user` WHERE id=' . $id . ';';
        $responsiveness3 = $db->prepare($query3);
        $responsiveness3->execute();
        $var3 = $responsiveness3->fetchAll();
        $name = '';
        $email = '';
        $img = '';
        foreach ($var3 as $key => $values) {
            $name = $values[1];
            $email = $values[2];
            $img = $values[4];
        }
    } catch (PDOException $i) {
        echo $i;
    }

@endphp
@extends('layout.master')
@section('titl')
    {{ $page_titl }}
@stop
@section('body')

    <!-- start profile -->
    <section class="profile">
        <!-- start tabbar -->
        <div class="container my-5 profi">
            <h5 class="text-center p-2 text-light bolde mt-2">الحساب</h5>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-contact-tabe" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" data-controls="contact" data-selected="false">الملف الشخصي</button>

                    <button class="nav-link " id="nav-contact-tabe" data-bs-toggle="tab" data-bs-target="#orders"
                        type="button" role="tab" data-controls="contact" data-selected="false">الطلبات</button>


                    <button class="nav-link" id="nav-contact-tabe" data-bs-toggle="tab" data-bs-target="#products"
                        type="button" role="tab" data-controls="contact" data-selected="false">المنتجات</button>

                    <button class="nav-link" id="nav-contact-tabe" data-bs-toggle="tab" data-bs-target="#masseg"
                        type="button" role="tab" data-controls="contact" data-selected="false">الحالة</button>
                </div>
            </nav>
            <!-- end tabbar -->

            <!-- start barbody -->
            <div class="tab-content" id="nav-tabcontene">
                <div class="tab-pane fade show active p-3" id="profile" role="tabpanel" aria-labelledby="nav-contact">
                    <!-- profile bod tab -->
                    <div class="prefileUser">
                        <div class="row ">
                            <div class="col-sm-3 center">
                                <div class="img my-2">
                                    <img class="card-img-top" src="\user_img\<?php echo $img; ?>" alt="<?php echo $img; ?>">
                                </div>
                                <div class=" text-cente">
                                    <span class="user-info ">
                                        <h4>{{ $name }}</h4>
                                        <p class="emai mx-2 ">{{ $email }}</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="user-link mx-1 d-flex">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a class="nav-link" href="/exit"> تسجيل الخروج</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/sing_up">انشاء حساب اخر</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">تعديل الحساب</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/">طلب اخر</a></li>
                                    </ul>
                                </div>
                                <p class="text-center creat my-2"><a class="nav-link" href="/creat_prodect">اضف منتج</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end profile tabbody -->
                <!-- order tabbody -->
                <div class="tab-pane fade show  p-3" id="orders" role="tabpanel" aria-labelledby="nav-contact">

                    <div class='order p-2 my-2'>
                        <div class='row'>
                            <div class='col'>رقم الطلب</div>
                            <div class='col'>اسم المنتج</div>
                            <div class='col'>اسم مرسل الطلب</div>
                            <div class='col'>موقع الاستلام</div>
                            <div class='col'>رقم التواصل</div>
                            <div class='col'><span class='date-ord'>زمن الطلب</span></div>
                        </div>
                    </div>
                    @php
                        $db_info = 'mysql:host=localhost;dbname=myshop';
                        $db_user = 'root';
                        $db_password = '';

                        try {
                            $db = new PDO($db_info, $db_user, $db_password);
                            $id = 'null';
                            if (isset($_COOKIE['names']) && $_COOKIE['names'] != '') {
                                $id = $_COOKIE['names'];
                            }

                            for ($i = 1; $i < 10; $i++) {
                                $query3 = 'SELECT * FROM `the_orders` WHERE id=' . $i . ' AND user_add=' . $id . '';
                                $responsiveness3 = $db->prepare($query3);
                                $responsiveness3->execute();
                                $var3 = $responsiveness3->fetchAll();
                                $prodect_id = '';
                                $whow_order = '';
                                $time = '';
                                $location = '';
                                $numder_for_contec = '';
                                $order_numder = '';
                                foreach ($var3 as $key => $values) {
                                    $order_numder = $values[0];
                                    $prodect_id = $values[1];
                                    $whow_order = $values[2];
                                    $time = $values[3];
                                    $location = $values[4];
                                    $numder_for_contec = $values[5];
                                }
                                $prodect_name = 'SELECT prodect_name FROM `prodect` WHERE id=' . $prodect_id . '';
                                $responsiveness = $db->prepare($prodect_name);
                                $responsiveness->execute();
                                $var = $responsiveness->fetchAll();
                                $pro_name = '';
                                foreach ($var as $key => $values) {
                                    $pro_name = $values[0];
                                }
                                $named = 'SELECT name FROM `user` WHERE id =' . $whow_order . '';
                                $responsiveness2 = $db->prepare($named);
                                $responsiveness2->execute();
                                $var = $responsiveness2->fetchAll();
                                $names_1 = '';
                                foreach ($var as $key => $values) {
                                    $names_1 = $values[0];
                                }

                                if ($time != '') {
                                    echo "
                <div class='order p-2 my-2'>
                    <div class='row'>
                        <div class='col'>" .
                                        $order_numder .
                                        "</div>
                        <div class='col'>" .
                                        $pro_name .
                                        "</div>
                        <div class='col'>" .
                                        $names_1 .
                                        "</div>
                        <div class='col'>" .
                                        $location .
                                        "</div>
                        <div class='col'>" .
                                        $numder_for_contec .
                                        "</div>
                        <div class='col'><span class='date-ord'>" .
                                        $time .
                                        "</span></div>
                    </div>
                </div>
                                            ";
                                }
                            }
                        } catch (PDOException $i) {
                            echo $i;
                        }

                    @endphp

                </div>

                <!-- end order tbebody -->
                <!-- start masseg tabbody -->

                <div class="tab-pane fade show  p-3" id="products" role="tabpanel" aria-labelledby="nav-contact">

                    <div class='masseg p-2 my-2'>
                        <div class='row'>
                            <div class='col'>اسم المنتج</div>
                            <div class='col'>الوصف</div>
                            <div class='col'>السعر</div>
                            <div class='col'><span class='date-ord'>وقت الانشاء</span></div>
                        </div>
                    </div>

                    @php
                        $db_info = 'mysql:host=localhost;dbname=myshop';
                        $db_user = 'root';
                        $db_password = '';

                        try {
                            $db = new PDO($db_info, $db_user, $db_password);
                            $id = 'null';
                            if (isset($_COOKIE['names']) && $_COOKIE['names'] != '') {
                                $id = $_COOKIE['names'];
                            }

                            for ($i = 1; $i < 10; $i++) {
                                # code...

                                $query3 = 'SELECT * FROM `prodect` WHERE `user_id`=' . $id . ' AND id=' . $i . '';
                                $responsiveness3 = $db->prepare($query3);
                                $responsiveness3->execute();
                                $var3 = $responsiveness3->fetchAll();
                                $prodect_name = '';
                                $prodect_discription = '';
                                $prise = '';
                                $time8 = '';
                                foreach ($var3 as $key => $values) {
                                    $prodect_name = $values[1];
                                    $prodect_discription = $values[2];
                                    $prise = $values[4];
                                    $time8 = $values[8];
                                }
                                if ($prodect_name != '') {
                                    echo "
            <div class='masseg p-2 my-2'>
                <div class='row'>
                    <div class='col'>" .
                                        $prodect_name .
                                        "</div>
                    <div class='col'>" .
                                        $prodect_discription .
                                        "</div>
                    <div class='col'>" .
                                        $prise .
                                        "</div>
                    <div class='col'><span class='date-ord'>" .
                                        $time8 .
                                        "</span></div>
                </div>
            </div>";
                                }
                            }
                        } catch (PDOException $i) {
                            echo $i;
                        }

                    @endphp
                </div>

                <div class="tab-pane fade show  p-3" id="masseg" role="tabpanel" aria-labelledby="nav-contact">
                    <div class='order p-2 my-2'>
                        <div class='row'>
                            <div class='col'>رقم الطلب</div>
                            <div class='col'>الحالة</div>
                            <div class='col'>شطب الطلب</div>
                        </div>
                    </div>

                    @php
                        $db_info = 'mysql:host=localhost;dbname=myshop';
                        $db_user = 'root';
                        $db_password = '';

                        try {
                            $db = new PDO($db_info, $db_user, $db_password);
                            $id = 'null';
                            if (isset($_COOKIE['names']) && $_COOKIE['names'] != '') {
                                $id = $_COOKIE['names'];
                            }

                            for ($i = 1; $i < 10; $i++) {
                                $query3 = 'SELECT * FROM `the_orders` WHERE id=' . $i . ' AND user_add=' . $id . '';
                                $responsiveness3 = $db->prepare($query3);
                                $responsiveness3->execute();
                                $var3 = $responsiveness3->fetchAll();
                                $stutes = '';
                                $order_numder = '';
                                foreach ($var3 as $key => $values) {
                                    $order_numder = $values[0];
                                    $stutes = $values[7];
                                }
                                if ($stutes == '') {
                                    $stutes = 'قيد التنفيذ';
                                } else {
                                    $stutes = 'تم التوصيل';
                                }

                                if ($order_numder != '') {
                                    echo "
     <div class='order p-2 my-2'>
         <div class='row'>
             <div class='col'>" .
                                        $order_numder .
                                        "</div>
             <div class='col'>" .
                                        $stutes .
                                        "</div>
            <form class='col'>
                <input type='hidden' name='order_id' value=' " .
                                        $order_numder .
                                        "' >
                <input type='submit' class='btn btn-primary' name='del' value='ok' >
            </form>
         </div>
     </div>
            ";
                                }
                            }
                        } catch (PDOException $i) {
                            echo $i;
                        }

                    @endphp

                </div>
                <!-- end tabbody -->
            </div>
        </div>
    </section>
    <!-- end profile -->

@stop

@php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['del'] == 'ok') {
        $db_info = 'mysql:host=localhost;dbname=myshop';
        $db_user = 'root';
        $db_password = '';
        try {
            $db = new PDO($db_info, $db_user, $db_password);
            $deleat = $_POST['order_id'];

            if ($order_id != '') {
                $quer = 'DELETE FROM `the_orders` WHERE id=' . $deleat . ';';
                $responsivene = $db->prepare($quer);
                $responsivene->execute('ok');
            }
        } catch (PDOException $i) {
            echo $i;
        }
    }
@endphp
