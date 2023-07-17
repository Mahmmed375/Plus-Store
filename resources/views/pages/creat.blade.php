@php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error = [];

        $file_name = strtolower($_FILES['file']['name']);
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_error = $_FILES['file']['error'];

        $allowed_extensions = ['jpg', 'png', 'gif', 'jpeg'];
        $imge_extensions = explode('.', $file_name);
        $imge_extensions = strtolower(end($imge_extensions));
        echo $imge_extensions;

        if ($file_error == 4) {
            $error[] = '<div> There No File uploaded</div>';
        } else {
            if ($file_size > 1000000) {
                $error[] = '<div> File cant Be More Then  10000 kp Youer File Size is ' . $file_size . ' </div>';
            }
            if (!in_array($imge_extensions, $allowed_extensions)) {
                $error[] = '<div> File is Not valid </div>';
            }
        }
        if (empty($error)) {
            move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . '/../public/img/' . $file_name);
            echo 'prodec uploade';

            $db_info = 'mysql:host=localhost;dbname=myshop';
            $db_user = 'root';
            $db_password = '';
            print_r(@$_FILES['prodect_img']);
            try {
                $db = new PDO($db_info, $db_user, $db_password);
                $prodect_name = @$_POST['prodect_name'];
                $prodect_des = @$_POST['prodect_des'];
                $prise = @$_POST['discont'];
                $discont = @$_POST['prise'];
                $typ = @$_POST['typ'];
                $user_id = $_COOKIE['names'];
                $time = date('y.m.d');

                if ($prodect_name != '' && $file_name != '') {
                    $query = "INSERT INTO `prodect`  VALUES (NULL, '" . $prodect_name . "', '" . $prodect_des . "','" . $file_name . "','" . $prise . "','" . $discont . "','" . $typ . "' ,'" . $user_id . "','" . $time . "');";
                    $responsiveness2 = $db->prepare($query);
                    $responsiveness2->execute();
                    header('location:/');
                    exit();
                } else {
                    $worring = 'fil this filed ';
                }
            } catch (PDOException $i) {
                echo $i;
            }
        }
    }

@endphp
