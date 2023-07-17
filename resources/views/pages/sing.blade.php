@php
    $ok;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db_info = 'mysql:host=localhost;dbname=myshop';
        $db_user = 'root';
        $db_password = '';
        $html_name = @$_POST['name'];
        $password = @$_POST['password'];

        try {
            $db = new PDO($db_info, $db_user, $db_password);
            $get_info = "SELECT * FROM `user` WHERE name='" . $html_name . "';";
            $info = $db->prepare($get_info);
            $info->execute();
            $informtion = $info->fetchAll();
            foreach ($informtion as $keys => $value) {
                $name = $value[1];
                $passwords = $value[3];
                if ($name == $html_name) {
                    if ($password == $passwords) {
                        setcookie('names', $value[0]);
                        header('location:/profile');
                        exit();
                    } else {
                        $ok = 'خطاء في كلمة المرور';
                    }
                } else {
                    $ok = 'انت غير مسجل ';
                }
            }
        } catch (PDOException $i) {
            echo $i;
        }
    }
@endphp

@extends('layout.master')

@section('body')
    <!-- start signup -->
    <section class="signup">
        <div class="container">
            <div class="form">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-6 ">
                        <h5 class="titil text-center">تسجيل االدخول</h5>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group p-4">
                                <p style="color:rgba(200, 255, 0, 0.925);"><?php echo @$ok; ?></p>
                                <label for="">اسم مستخدم</label>
                                <input type="text" class="form-control" maxlength="15" minlength="12" name="name"
                                    id="" aria-describedby="emailHelp" placeholder="Name" required>
                                <label for="">كلمة المرور</label>
                                <input type="password" class="form-control" maxlength="20" minlength="10" name="password"
                                    id="" placeholder="password" required>
                                <button type="submit" class="btn btn-primary">تسجيل االدخول</button>
                                <div class="forg">
                                    <a href="/">نسيت كلمة المرور</a>
                                    <a href="/sing_up">انشاء حساب</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end  signup -->




@stop
