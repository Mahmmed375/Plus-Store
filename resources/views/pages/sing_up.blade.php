
@php
$db_info ="mysql:host=localhost;dbname=myshop";
$db_user ="root";
$db_password ="";
$test;
if ($_SERVER['REQUEST_METHOD']=='POST') {


            $error= array();

            $file_name = strtolower($_FILES['img']['name']);
            $file_type = $_FILES['img']['type'];
            $file_size = $_FILES['img']['size'];
            $file_tmp = $_FILES['img']['tmp_name'];
            $file_error = $_FILES['img']['error'];

            $allowed_extensions = array('jpg','png','gif','jpeg');
            $imge_extensions = explode('.',$file_name);
            $imge_extensions = strtolower(end($imge_extensions));
            

            if ($file_error == 4) {
                
                $error[]= '<div> There No File uploaded</div>';
                
            }else{
                
                if ($file_size > 1000000) {
                    $error[]= '<div> File cant Be More Then  10000 kp Youer File Size is '.$file_size.' </div>';
                }
                if (!in_array($imge_extensions,$allowed_extensions)) {
                
                    $error[]= '<div> File is Not valid </div>';
                }

            }
            if (empty($error)) {
                
                    move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT']."/../public/user_img/".$file_name);
                    echo "prodec uploade";
                        
                try {
                    $db = new PDO($db_info,$db_user,$db_password);
                    $name_form_html= @ $_POST["name"];
                    $password_form_html = @ $_POST["password"];
                    $password2_form_html = @ $_POST["password2"];
                    $email_form_html = @ $_POST["email"];
                    $query="SELECT name FROM `info` WHERE name='".$name_form_html."'";
                    

                        $responsiveness2 =$db->prepare($query);
                        $responsiveness2->execute();
                        $var = $responsiveness2->fetchAll();

                        foreach($var as $key => $value ) { $name_from_db =$value[0]; }

                    if ($name_form_html != "" && $password_form_html != "" ) { 

                            if ($name_form_html != @$name_from_db) {

                                    $query2="INSERT INTO `user` VALUES ('null','".$name_form_html."', '".$email_form_html."', '".$password2_form_html."','".$file_name."');";
                                    $responsiveness =$db->prepare($query2);
                                    $responsiveness->execute();
                                    $query3="SELECT id FROM `user` WHERE name='".$name_form_html."'";
                                    $responsiveness3 =$db->prepare($query3);
                                    $responsiveness3->execute();
                                    $var3 = $responsiveness3->fetchAll();
                                    $n="";
                            foreach($var3 as $key => $values ) {

                                    $n = $values[0];
                                    setcookie("names", $n);
                                    header('location:/profile');
                                    exit();
                                            }

                                }else{
                                    $test = "you are asing after thit";
                                }
                        }else {
                            $test="pleas feld this filed";
                        }


                } catch (PDOException $i) { 
                        echo $i;
                    };
                }

            }
@endphp    

@extends('layout.master')
@section('titl')
   {{$page_titl}}
@stop

@section('body')


<!-- start signup -->
<section class="signup">
    <div class="container">
        <div class="form">
            <div class="row justify-content-md-center">
                <div class="col col-lg-6 ">
                    <h5 class="titil text-center">انشاء حساب</h5>
                    <form  method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="form-group p-4">
                            <p style="color: blue;text-aling:center;"><?php echo @$test; ?></p>
                            <label for="name">اسم مستخدم</label>
                            <input type="text" class="form-control"  maxlength="15" minlength="12" name="name" id="name"
                                aria-describedby="emailHelp" placeholder="Name" required>

                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp" placeholder="email" required>

                            <label for="img">صورة ملفك الشخصية</label>
                            <input type="file" class="form-control" name="img" id="img"
                                aria-describedby="emailHelp" placeholder="img" required>

                            <label for="password1">كلمة المرور</label>
                            <input type="password" maxlength="20" minlength="10" class="form-control" name="password" id="password1" placeholder="password"
                                required>

                            <label for="password2">اعادة كلمة المرور</label>
                            <input type="password" maxlength="20" minlength="10" class="form-control" name="password2" id="password2" placeholder="password"
                                required>

                            <input type="submit" class="btn btn-primary" value="انشاء حساب">

                            
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- end  signup -->

@stop



