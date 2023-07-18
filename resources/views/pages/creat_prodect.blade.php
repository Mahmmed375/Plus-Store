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


                        @if (!empty($_COOKIE['names']))
                            <h5 class='titil text-center'>اضافة منتج</h5>
                            <form action='/creat' method='POST' enctype='multipart/form-data'>
                                @csrf
                                <div class='form-group p-4'>
                                    <label for=''>اسم المنتج</label>
                                    <input type='text' class='form-control' maxlength='80' minlength='10'
                                        name='prodect_name' id='' aria-describedby='emailHelp'
                                        placeholder='Prodect Name' required>
                                    <label for=''>وصف المنتج</label>
                                    <input type='text' class='form-control' minlength='15' name='prodect_des'
                                        id='' aria-describedby='emailHelp' placeholder='Prodect description'
                                        required>
                                    <label for=''>صورة المنتج</label>
                                    <input type='file' class='form-control' name='file' id=''
                                        placeholder='Prodect Img' required>
                                    <label for=''>سعر المنتج</label>
                                    <input type='number' class='form-control' name='prise' id=''
                                        placeholder=' Prodect Preues' required>
                                    <label for=''>الخصم</label>
                                    <input type='number' class='form-control' name='discont' id=''
                                        placeholder='Prodect Desconet' required>
                                    <div class='form-grou'>
                                        <label for='typ'>نوع النتج</label>
                                        <select class='form-control' id='typ' name='typ'>
                                            <option></option>
                                            <option value='kids'>اطفالي</option>
                                            <option value='women'>نسائى</option>
                                            <option value='men'>رجالي</option>
                                            <option value='school_supplies'>مستلزم مدرسي</option>
                                            <option value='Home_Appliances'>مستلزم منزلية</option>
                                            <option value='Electronic'>جهاز الاكتروني</option>
                                            <option value='agricultural_tools'>اداء زراعية</option>
                                            <option value='cars'> قسم السيارات</option>
                                            <option value='Motorcycles'>قسم الدرجات النارية</option>
                                            <option value='bicycles'>قسم الدرجات الهوئية</option>
                                            <option value='Offers'>العروض و التخفيضات</option>

                                        </select>
                                    </div>
                                    <div class='form-grou'>
                                        <label for='typ2'>التصنيف</label>
                                        <select class='form-control' id='typ2' name='typ2'>
                                            <option></option>

                                        </select>
                                    </div>
                                    <button type='submit' class='btn btn-primary'>اضافة منتج</button>
                                </div>
                            </form>
                        @else
                            <form action='/creat' method='POST' enctype='multipart/form-data'>
                                @csrf
                                <div class='form-group p-4'>
                                    <label for=''>ناسف هذاه الميزة متحة فقط للاشخاصة المسجلين في الموقع</label>
                                    <div class='forg'>
                                        <a href='/'>رجوع</a>
                                        <a href='/sing_up'>انشاء حساب</a>
                                    </div>
                                </div>

                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end creat product -->

@stop
