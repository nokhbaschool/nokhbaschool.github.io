<?php
// check if user is coming from a request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = filter_var ($_POST ['username'] , FILTER_SANITIZE_STRING) ;
    $mail = filter_var ($_POST ['email'] , FILTER_SANITIZE_EMAIL) ;
    $cell = filter_var ($_POST ['cellphone'] , FILTER_SANITIZE_NUMBER_INT) ;
    $msg  = filter_var ($_POST ['message'] , FILTER_SANITIZE_STRING);
//creating array of errors
$formErrors = array();
if (strlen($user) <= 5){
    $formErrors[] = ' اكتب اسمك الكامل ';
}
if (strlen($msg) <= 10){
    $formErrors[] =  'اكتب رسالة من أكثر من 10 حروف '   ;
}
//if there are no errors send the email
$header = 'From ' . $mail . '\r\n';
if (empty($formErrors)){
    mail('oseddiki26@gmail.com', 'Contact Us', $msg , $header);
    $user = '';
    $mail = '';
    $cell = '';
    $msg = '';

    $success = '<div class = "alert alert-success">تم استلام رسالتك , سيتم الاجابة عنك قريبا </div>';
}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PRIVATE SCHOOL - E'NOKHBA </title>
    <script type="text/javascript" src="../js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="../css/callus.css">  
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">    
    <link rel="shortcut icon" href="../images/LOGO.jpg">  

</head>
<body>
        <nav>
            <div class="page-header">
                <img class="call-us" src="../images/call.png" alt="call here">
                <a href="tel:0561885758">0672 30 36 72</a>   <a href="tel:023827707">0664 16 73 09</a></div>
        
            <div class="header_mid_inner">
            <ul>
                <a href="../html/main.html"><img class="logo" src="../images/LOGO.jpg" alt="مدرسة النخبة الخاصة"></a>
                <li><a class="outside" href="#">عن النخبة الخاصة</a>
                    <ul class="inside" id="inside1">
                        <li><a href="#">رسالتنا</a></li>
                        <li><a href="#">رؤيتنا</a></li>
                        <li><a href="#">قيمنا</a></li>
                        <li><a href="#">أولوياتنا</a></li>
                        <li><a href="#">المرافق و الهياكل</a></li>
                    </ul>
                </li>
                <li><a class="outside" href="#">النظام التعليمي</a>
                    <ul class="inside " id="inside2" >
                        <li><a href="../html/nidam/minhaj.html">المنهاج التعليمي</a></li>
                        <li><a href="../html/nidam/atware.html">الأطوار التعليمية </a></li>
                        <li><a href="../html/nidam/haia.html">الهيئة التدريسية </a></li>
                    </ul>
                </li>
                <li><a class="outside" href="#">الحياة المدرسية</a>
                    <ul class="inside " id="inside3">
                        <li><a href="../css/hayat/gallery.css">معرض الصور</a></li>
                        <li><a href="#">نوادي مدرسية </a></li>
                        <li><a href="../html/hayat/daam.html">الدعم النفسي </a></li>
                        <li><a href="../html/hayat/mwasalat.html"> نقل ومواصلات</a></li>
                    </ul>
                </li>
                <li><a class="outside" href="#">القبول والتسجيل</a>
                    <ul class="inside " id="inside4">
                        <li><a href="../html/tasjile/gobol.html">سياسة القبول </a></li>
                        <li><a href="../html/tasjile/tasjil.html">التسجيل </a></li>
                    </ul>
                </li>
                <li><a class="outside" href="#">الأخبار والفعاليات</a></li>
                <li><a class="outside" href="#"> المنصة الرقمية</a></li>
                <li><a class="outside" href="../html/callus.php"> اتصل بنا</a></li>
            </ul></nav></div>
            <!-- section... -->
            <section>
                <div class="form-container">
                    <h1>تواصل معنا </h1>
                    <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <?php if (! empty($formErrors)) { ?>
                        <div class ="alert alert-danger alert-dismissible" role="start">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            </button>
                            <?php  
                                foreach($formErrors as $error){
                                    echo $error . '<br>' ;
                                }
                            ?>
                            </div>
                            <?php } ?>
                            <?php if(isset($success)) {echo $success ;}  ?>


                            <div class="form-group">
                        <input class="username form-control" type="text" name="username" placeholder="الاسم واللقب " value="<?php if(isset($user)){echo $user;} ?>">
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                أدخل اسمك الكامل ! 
                            </div>
                        </div>



                            <div class="form-group">
                        <input class="email form-control"  type="email" name="email" placeholder=" البريد الالكتروني "value="<?php if(isset($mail)){echo $mail;} ?>">
                            <span class="asterisx">*</span>
                        <div class="alert alert-danger custom-alert">
                            ادخل بريدك اللكتروني
                        </div>
                        </div>



                            <div class="form-group">
                        <input class="form-control"  type="text" name="cellphone" placeholder=" رقم الهاتف " value="<?php if(isset($cell)){echo $cell;} ?>">
                            <div class="form-group">


                        <textarea class="message form-control"  name="message" placeholder="أكتب رسالتك !"> <?php if (isset($msg)){echo $msg;} ?> </textarea>
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                الرسالة يجب أن تفوق العشرة حروف
                            </div>
                            </div>

                        <input class="btn btn-success"  type="submit" value="أرسل">

                            </div>
                    </form>
                    
                </div>


            </section>

            <!-- footer... -->
            <footer>
                <div class="footer-container">
                    <div class="links">
                        <h1>روابط مفيدة</h1>
                        <ul>
                        <li><a href="../html/hayat/gallery.html">معرض الصور</a></li>
                            <li><a href="#"> الأخبار والفعاليات</a></li>
                            <li><a href="../html/tasjile/gobol.html"> سياسة القبول</a></li>
                            <li><a href="../html/tasjile/tasjil.html"> التسجيل</a></li>
                            <li><a href="../html/callus.php"> اتصل بنا</a></li>
                        </ul>
                    </div>
                    <div class="connection">
                        <h1>معلومات الاتصال</h1>
                        <div class="address">
                            <h2>العنوان</h2>
                            <p>حي بن ربيح الجلفة</p>
                        </div>
                        <div class="phone">
                            <h2>الهاتف</h2>
                            <p>0672303672  -  0664157309</p>
                        </div>
                        <div class="gmail">
                            <h2>البريد الالكتروني</h2>
                            <p><a href="#">oseddiki66@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="location">
                        <h1>موقعنا</h1>
                    </div>
                </div>
                <div class="page-end">
                    <div class="end-page-logo">
                        <img src="../images/LOGO.jpg">
                    </div>
                    <div class="social-media">
                        <a href="#"> facebook<img src="../images/fb.png" ></a>
                        <a href="#"> instagram<img src="../images/insta.png" ></a>
                    </div>
                </div>
            </footer>


            <script type="text/javascript" src="../js/jquery-3.6.0.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/fontawesome.min.js"></script>
            <script type="text/javascript" src="../js/callus.js"></script>
            


</body>
</html>
    