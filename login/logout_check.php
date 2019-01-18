<?php
    //เปิดใช้ session
    session_start();
    // ลบ session ออกทั้งหมด
    session_destroy();
    // วิ่งไปหน้า login
    header("location:../index.php");