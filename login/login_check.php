<?php
/**
 *  check ค่า email ว่าเป็นค่า ว่าง หรือป่าว
 */

if(isset($_POST['email'])){

    //เก็บค่าตัวแปล email ที่ส่งมาจาก form ใส่ในตัวแปร $email
    $email = $_POST['email'];

    /**
     * check ค่า password กับ email ว่าเป็นค่า ว่าง หรือป่าว
     */

    if(isset($_POST['password']) && $email != ''){

        //เก็บค่าตัวแปล password ที่ส่งมาจาก form ใส่ในตัวแปร $password
        $password = $_POST['password'];

        /**
         * ทำการ require connect database
         */

        require '../includes/connect_db.php';

        /**
         * นำ $email กับ $password มาเข้า 
         * [ function ] 
         * 1.trim ตัดช่องว่างในข้อความที่ส่งมา
         * 2.mysqli_real_escape_string ป้องกัน sql injection
         * 3.strip_tags ตัด html ออกจากข้อความ
         */

        $email = strip_tags(mysqli_real_escape_string($connect, trim($email)));
        $password = strip_tags(mysqli_real_escape_string($connect, trim($password)));
    
        /**
         * ทำการ SELECT Database จาก ฐานข้อมูล
         */

        $login_query = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");

            /**
             * mysqli_num_rows($login_query)>0
             * นำค่าที่ query จาก $login_query ได้มาทำการนับ row ใน ฐานข้อมูล
             */

            if(mysqli_num_rows($login_query) > 0){

                //นำ $login_query มาทำเป็น array
                $login_row = mysqli_fetch_array($login_query);

                //นำ password ที่ query ออกมา มาใส่ในตัวแปร $password_hash
                $password_hash = $login_row['password'];

                /**
                 * ทำการ check password 
                 * นำค่าที่ user กรอกผ password ผ่าน form มาตรวจสอบรหัส
                 */

                if(password_verify($password,$password_hash)){

                    /**
                     * ถ้า password ตรงกับ user ที่กรอกเข้ามา
                     * จะเข้า เงื่อนไข if
                     */
                    session_start();
                    $smg = "Login สำเสร็จ!";
                    $login_status->id = $login_row['id'];
                    $login_status->email = $login_row['email'];
                    $login_status->name = $login_row['firstname'];
                    $_SESSION['login'] = json_encode($login_status);
                    header('Location: ../main.php');
                    exit();
                }else{

                    /**
                     * ถ้า password ไม่ถูกต้องจะทำการส่งค่า $smg เป็น string 
                     * และทำการ exit(); เพื่อหยุดการทำงาน
                     */

                    $smg = "Login ล้มเหลว!";
                    header('Location: index.html');
                    exit();
                }
            }else{
                echo '<h1>อีเมลไม่ถูกต้อง</h1>';
                exit();
            }
    }else{
        echo '<h1>ไม่ได้กรอก email หรือ password</h1>';
        exit();
    }
}else{
    echo '<h1>ไม่ได้กรอก email</h1>';
    exit();
}


