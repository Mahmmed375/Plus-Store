@extends('layout.master')
@section('titl')
    {{ $page_titl }}
@stop
@section('body')
    <!-- start creat product -->
    <section class='creat-pro'>
        <div class='container'>
            <div class='form'>
                <div class='row justify-content-md-center'>
                    <div class='col col-lg-6 '>

                        <?php
                        if (!empty($_COOKIE['names'])):
                            echo "<h5 class='titil text-center'>اضافة منتج</h5> <form action='/creat' method='POST' enctype='multipart/form-data'> <div class='form-group p-4'> <label for=''>اصم المنتج</label> <input type='text' class='form-control' maxlength='17' minlength='10' name='prodect_name' id='' aria-describedby='emailHelp' placeholder='Prodect Name' required>  <label for=''>وصف المنتج</label> <input type='text' class='form-control' minlength='15' name='prodect_des' id='' aria-describedby='emailHelp' placeholder='Prodect description' required> <label for=''>صورة المنتج</label> <input type='file' class='form-control' name='file' id='' placeholder='Prodect Img' required> <label for=''>سعر المنتج</label> <input type='number' class='form-control' name='prise' id='' placeholder=' Prodect Preues' required> <label for=''>الخصم</label> <input type='number' class='form-control' name='discont' id='' placeholder='Prodect Desconet' required> <div class='form-grou'> <label for='typ'>تصنيف المنتج</label> <select class='form-control' id='typ' required name='typ'> <option value='electronic'>الاكترونيات </option> <option value='fashion'>الموصة</option> <option value='Home_Appliances'>الاجهزةالمنزليه</option> <option value='phone'>هواتف</option> <option value='today_offers'>today offers</option> </select> </div> <button type='submit' class='btn btn-primary'>اضافة منتج</button> </div> </div> ";
                        else:
                            echo " <form action='/creat' method='POST' enctype='multipart/form-data'>   <div class='form-group p-4'> <label for=''>ناسف هذاه الميزة متحة فقط للاشخاصة المسجلين في الموقع</label><div class='forg'><a href='/'>رجوع</a><a href='/sing_up'>انشاء حساب</a></div> </div>                                                                                                                                                    ";
                        endif;
                        ?>
                        @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end creat product -->

@stop
