@extends('layout.master')
@section('body')
    <!-- sart sell from car -->
    <section class="sell-from-car">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-6 my-3 ">
                    <h5 class="titil text-center">الشراء</h5>
                    <form method="POST">
                        <div class="form-group p-4">
                            <input type="hidden" name="order_id" class="form-control" id=""
                                aria-describedby="emailHelp" required>
                            <input type="hidden" name="id_castem" class="form-control" id="" required>
                            <label for="location">مكان التسليم</label>
                            <input type="text" name="location" class="form-control" id="" required>
                            <label for="location">رقم التواصل</label>
                            <input type="number" name="contect" class="form-control" id="" required>
                            <label for="time">تاريخ استخراج البطاقة</label>
                            <input type="date" name="time" class="form-control" id="" required>
                            <label for="time">تاريخ انتهاء البطاقة</label>
                            <input type="date" name="time" class="form-control" id="" required>
                            <label for="numde_for_contect">رقم البطاقة</label>
                            <input type="number" name="numde_for_contect" class="form-control" id="" required>
                            <label for="numde_for_contect">الرقم السري</label>
                            <input type="number" name="numde_for_contect" class="form-control" id="" required>

                            <button type="submit" class="btn btn-primary">شراء</button>

                            <div class="forg">
                                <a href="/sing_up">انشاء حساب</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end sell from car -->
@stop

@php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db_info = 'mysql:host=localhost;dbname=myshop';
        $db_user = 'root';
        $db_password = '';
        $location = $_POST['location'];
        $contect = $_POST['contect'];

        try {
            $db = new PDO($db_info, $db_user, $db_password);
            $user_id = '';
            $prodect_id = '';
            if (empty($_COOKIE['names'])) {
                $user_id = 0;
            } else {
                $user_id = $_COOKIE['names'];
            }
            if (empty($_COOKIE['s'])) {
                $prodect_id = 0;
            } else {
                $prodect_id = $_COOKIE['s'];
            }
            $time = date('y.m.d');

            $get_info = 'SELECT user_id FROM `prodect` WHERE id=' . $prodect_id . ';';
            $info = $db->prepare($get_info);
            $info->execute();
            $informtion = $info->fetchAll();
            $user_add = '';

            foreach ($informtion as $key => $value) {
                $user_add = $value[0];
            }

            $query = 'INSERT INTO `the_orders` VALUES (NULL, ' . $prodect_id . ', ' . $user_id . ',"' . $time . '","' . $location . '","' . $contect . '","' . $user_add . '","");';
            $responsiveness2 = $db->prepare($query);
            $responsiveness2->execute();
            header('location:/');
            exit();
        } catch (PDOException $i) {
            echo $i;
        }
    }
@endphp



<?php


?>