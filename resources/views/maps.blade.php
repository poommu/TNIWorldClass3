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
    <link href="css/mapstyle.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/wc3map.js"></script>
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
    <img id="mbg" src="images/maps/ComeTNI/chariotv2_BG-01.png">
    <img id="mfro" src="images/maps/ComeTNI/chariotv2_front-01.png">
    <img id="mhor" src="images/maps/ComeTNI/chariotv2_horsefront-01.png" onclick="hidemobilemenu()">
    <img id="min" src="images/maps/ComeTNI/chariotv2_insidekemtis-01.png">
    <img id="mke" src="images/maps/ComeTNI/chariotv2_kemtis-01.png">
    <img id="mkeb" src="images/maps/ComeTNI/chariotv2_kemtis_bigcir-01.png">
    <img id="mkes" src="images/maps/ComeTNI/chariotv2_kemtis_smallcir-01.png">
    <img id="mstar" src="images/maps/ComeTNI/chariotv2_star-01.png">
    <div class="showmap" onclick="showmap()"></div>
    <div class="mapblock">
       <center>
            <b>
                <u>
                    วิธีการมาค่าย
                </u>
            </b>
        </center>
        <br>
        <b>ที่ตั้ง</b> : สถาบันเทคโนโลยีไทย-ญี่ปุ่น 1771/1 ซ.พัฒนาการ 37 ถนนพัฒนาการ แขวงสวนหลวง เขตสวนหลวง กรุงเทพฯ 10250
        <br>
        <br>
        <b>เดินทางด้วยรถไฟฟ้า</b> : ลง BTS สถานีเอกมัย ต่อรถประจำทางสาย 133 จากวัดธาตุทอง ลงที่ป้าย <b>หน้าซอยพัฒนาการ 37</b>
        <br>
        <br>
        <b>เดินทางด้วยรถไฟฟ้ามหานคร</b> : ลง MRT สถานีเพชรบุรี ต่อรถประจำทางสาย 11 , 206 บนถนนเพชรบุรีตัดใหม่ ลงที่ป้าย <b>หน้าซอยพัฒนาการ 37</b>
        <br>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6739403201254!2d100.62603131483029!3d13.738179990356247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d61d1a422f1e1%3A0xec8b5f1d5edf5da!2z4Liq4LiW4Liy4Lia4Lix4LiZ4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LmE4LiX4LiiLeC4jeC4teC5iOC4m-C4uOC5iOC4mSBUaGFpLU5pY2hpIEluc3RpdHV0ZSBvZiBUZWNobm9sb2d5!5e0!3m2!1sth!2sth!4v1501232254705" id="googlemap" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="backmapblock" onclick="hidemap()"></div>
</div>
</body>
</html>