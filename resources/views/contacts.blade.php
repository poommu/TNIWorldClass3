<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TNI World Class #3 || Thai-Nichi Institute of Technology</title>
    <meta name="description" content="โครงการที่มอบโอกาสให้นักเรียนที่มีผลการเรียนดี มีเกรดเฉลี่ยนสะสม 3.25 ขึ้นไป
    สมัครเข้าร่วม เพื่อรับทุนการศึกษา 100% พร้อมทุนแลกเปลี่ยนในต่างประเทศจาก สถาบันเทคโนโลยีไทย-ญี่ปุ่น
    สร้างโอกาสในการศึกษาต่อและรับทุนการศึกษาจากต่างประเทศในอนาคต">
    <meta name="keyword" content="TNI, TNI World Class, World Class, Camp, World Class Camp, Thai-Nichi Institute Of Technology, Sakura Camp">
    <link rel="icon" type="image/x-icon" href="/images/Logo_new/logo_facev4-01-01.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="TNI World Class #3">
    <meta property="og:url" content="https://tniworldclass.com/">
    <meta property="og:image" content="/images/WC3_poster.png">
    <link href="css/contacts.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/wc3contacts.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
</head>
<body onload="load()">
<div class="screen">
    <div class="menu">
        <div class="menu-center">
            <ul id="menu">
                <a href="schedule"><li class="menu-items">กำหนดการ</li></a>
                <a href="gallery"><li class="menu-items">ภาพกิจกรรม</li></a>
                <a href="/"><li id="menu-main" class="menu-items menu-logo">
                        <img src="images/Logo_new/button-01.png" class="img-logo" alt="TNI World Class">
                    </li></a>
                <a href="faq"><li class="menu-items">คำถามที่พบบ่อย</li></a>
                <a href="contacts"><li class="menu-items">ติดต่อเรา</li></a>
            </ul>
        </div>
        <div class="menu-mobile animated fadeInDown" id="menu-mobile">
            <ul id="menu-slide">
                <a href="schedule"><li>กำหนดการ</li></a>
                <a href="gallery"><li>ภาพกิจกรรม</li></a>
                <a href="/" onclick="hidemobilemenu()"><li>TNI World Class</li></a>
                <a href="faq"><li>คำถามที่พบบ่อย</li></a>
                <a href="contacts"><li>ติดต่อเรา</li></a>
            </ul>
            <img src="images/Logo_new/button-01.png" class="img-logo-mobile" id="img-logo-mobile" alt="TNI World Class" onclick="showmobilemenu()">
        </div>
    </div>
    <img id="cbg" src="images/edit/cont_bg.png">
    <img id="clight" src="images/ContactPage/cont_light.png" onclick="hidemobilemenu()">
    <img id="clound1" src="images/edit/cont_stupidC1.png">
    <img id="clound2" src="images/edit/cont_stupidC2.png" onclick="hidemobilemenu()">
    <img id="clound3" src="images/edit/cont_stupidC3.png">
    <img id="clound4" src="images/ContactPage/clound/cont_stupidC4.png">
    <img id="clound5" src="images/ContactPage/clound/cont_stupidC5.png">
    <img id="clound6" src="images/ContactPage/clound/cont_stupidC6.png">
    <img id="contact" src="images/edit/cont_contact1.png">
    <img id="contacthover" src="images/edit/cont_contact2.png">
    <div class="showcontact" onmouseover="mouseoverfinction()" onmouseout="mouseleavefinction()" onclick="showcontact()"></div>
    <div class="contactblock">
        <p>
            <b>
                <u>
                    <center>
                        ติดต่อเรา
                    </center>
                </u>
                <br>
            </b>
        <table border="0" style="margin: auto;">
            <tr>
                <td>พี่เซิง&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>081-750-2623</td>
            </tr>
            <tr>
                <td>พี่มายด์&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>086-057-7217</td>
            </tr>
            <tr>
                <td>Facebook&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><a href="https://fb.me/TNIWorldClass" target="_blank">TNI World Class</a></td>
            </tr>
        </table>
        </p>
    </div>
    <div class="backcontactblock" onclick="hidecontact()"></div>
</div>
</body>
</html>