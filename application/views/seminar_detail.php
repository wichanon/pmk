<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 mb-lg-4 mb-3">
                <h1 class="title_text pl-3 d-inline-block">สมัครออนไลน์</h1>
                <a href="<?=base_url().'seminar/register_online/'.$data['id']?>"><button type="button" class="btn btn-primary d-none d-lg-inline-block float-right">ลงทะเบียนสัมมนา</button></a>
            </div>
        </div>
    </div>

    <section class="pt-lg-2 pt-1 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-lg-3 mt-1 pb-3">
                    <h3><?=$data['name'];?></h3>
                    <h5><?=$data['create_datetime'];?></h5>
                </div>
                <div class="col-12 mb-5" style="height: 400px; overflow: hidden;">
                        <img class="img-fluid" style="width: 100%;" src="<?=base_url().'../'.$data['image']?>" alt="">
                </div>
               <div class="col-12">
                <?php if($data['detail'] != "") {?>
                    <h5>รายละเอียด :</h5>
                    <p style="padding-left: 30px;"><?=$data['detail'];?></p>
                <?php } ?>
                <?php if($data['objective'] != "") {?>
                    <h5>วัตถุประสงค์ :</h5>
                    <p style="padding-left: 30px;"><?=$data['objective'];?></p>
                <?php } ?>
                <?php if($data['long_term'] != "") {?>
                    <h5>ระยะเวลา :</h5>
                    <p style="padding-left: 30px;"><?=$data['long_term'];?></p>
                <?php } ?>
                <?php if($data['location'] != "") {?>
                    <h5>สถานที่ :</h5>
                    <p style="padding-left: 30px;"><?=$data['location'];?></p>
                <?php } ?>
                <?php if($data['format'] != "") {?>
                    <h5>รูปแบบ :</h5>
                    <p style="padding-left: 30px;"><?=$data['format'];?></p>
                <?php } ?>
                <?php if($data['regis_fee'] != "") {?>
                    <h5>ค่าลงทะเบียน :</h5>
                    <p style="padding-left: 30px;"><?=$data['regis_fee'];?></p>
                <?php } ?>

                    <h5>ช่องทางการชำระเงินในระบบลงทะเบียนออนไลน์ :</h5>
                    <p style="padding-left: 30px;">1. บัตรเครดิต<br>
                        ชำระเงินด้วยบัตรเครดิตผ่านระบบ PayPal กรณีจ่ายบัตรเครดิต PayPal หักค่าธรรมเนียม 4.26% <br>
                        มูลนิธิจะออกใบเสร็จเป็นจำนวนเงินหลังหักค่าธรรมเนียมแล้วให้<br>
                        2. โอนเงิน<br>
                        โอนเงินเข้าบัญชีธนาคารทหารไทย สาขาโรงพยาบาลพระมงกุฎเกล้า<br>
                        เลขที่บัญชี: 038-7-36250-2  ชื่อบัญชี: มูลนิธิเพื่อกองอายุรกรรม รพ.รร.6 (อบรมระยะสั้น)<br>    
                        เสร็จแล้ว ถ่ายภาพสลิปการโอนเงิน และอัพโหลดภาพเข้าสู่ระบบลงทะเบียนออนไลน์<br>
                        3. ชำระเงินสด<br>
                        มาชำระที่ น.ส. เกวลี ฤกษ์ดี (เฟิร์น) <br>
                        315 ภาควิชาอายุรศาสตร์ ชั้น 3 อาคารเฉลิมพระเกียรติ 6 รอบ พระชนมพรรษา โรงพยาบาลพระมงกุฎเกล้า <br>
                        ถนนราชวิถี แขวงทุ่งพญาไท เขตราชเทวี 10400<br>
                        โทรศัพท์: 063-182-5144   โทรสาร: 02-354-9085   E-mail: pmkmed.boardreview@gmail.com<br>
                    </p>
                    <h5>ช่องทางการส่งใบลงทะเบียนและหลักฐานการโอนเงินมาทางอื่น :</h5>
                    <p style="padding-left: 30px;">กรุณาส่งใบสมัคร พร้อมหลักฐานการโอนเงินเข้าบัญชีธนาคารทหารไทย สาขาโรงพยาบาลพระมงกุฎเกล้า<br>
                        เลขที่บัญชี: 038-7-36250-2   ชื่อบัญชี: มูลนิธิเพื่อกองอายุรกรรม (อบรมระยะสั้น)<br>
                        มาที่:<br>
                        น.ส. เกวลี ฤกษ์ดี (เฟิร์น) <br>
                        315 ภาควิชาอายุรศาสตร์ ชั้น 3 อาคารเฉลิมพระเกียรติ 6 รอบ พระชนมพรรษา <br>
                        โรงพยาบาลพระมงกุฎเกล้า <br>
                        ถนนราชวิถี  แขวงทุ่งพญาไท  เขตราชเทวี 10400<br>
                        โทรศัพท์: 063-182-5144   โทรสาร: 02-354-9085  E-mail: pmkmed.boardreview@gmail.com<br>
                    </p>
               </div>
            </div>
        </div>
    </section>


    <div class="w-100 d-flex justify-content-center align-items-center pt-2 pb-2 d-lg-none position-fixed btn_register_seminar">
            <button type="button" class="btn btn-primary">ลงทะเบียนสัมมนา</button>
        </div>
<?php $this->load->view('footer'); ?>
</body>

</html>