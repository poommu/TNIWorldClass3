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
    <link href="css/gallerystyle.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/wc3gal.js"></script>
</head>
<body onload="myfunction()">
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
    <img id="gbg" class="l" src="images/GalleryPage/galver2/ver2/gall_bg.png">
    <img id="lleft" class="l" src="images/GalleryPage/galver2/ver2/gall_lpillar_left2-01.png" onclick="hidemobilemenu()">
    <img id="lright" class="l" src="images/GalleryPage/galver2/ver2/gall_lpillar_right2-01.png" onclick="hidemobilemenu()">
    <img id="galarrowleft" class="l" src="images/GalleryPage/galver2/ver2/gall_arrow_left.png">
    <img id="galarrowright" class="l" src="images/GalleryPage/galver2/ver2/gall_arrow_right.png">
    <div id="imgslide">
        <img id="galframe" class="l" src="images/GalleryPage/galver2/ver2/gall_frame.png" onclick="hidemobilemenu()">
        <div id="outimg">
            <img src="images/Slideimg/img1.jpg" id="img">
        </div>
        <div id="left_holder" onmouseover="showleft()" onmouseleave="hideleft()"><img class="left" src="images/Slideimg/arrow-left.svg" onclick="slide(-1)"></div>
        <div id="right_holder" onmouseover="showright()" onmouseleave="hideright()"><img class="right" src="images/Slideimg/arrow-right.svg" onclick="slide(1)"></div>
    </div>
</div>
</body>
</html>