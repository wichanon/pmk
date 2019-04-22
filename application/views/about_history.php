<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <div class="menu_mobile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pt-4 pb-4 pl-4 pr-4 top_bar">
                    <button type="button" name="" id="" class="btn btn-primary pl-5 pr-5">เข้าสู่ระบบ</button>
                    <div class="float-right d-flex justify-content-center align-items-center h-100 close_menu-mobile"><i
                            class="fas fa-times"></i></div>
                </div>
                <div class="col-12 pl-0 pr-0 main_menu_mobile">
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5">
                        <h4 class="m-0">หน้าแรก</h4>
                    </div>
                    <div class="menu_mobile_item w-100  collapsed" data-toggle="collapse" data-target="#about"
                        aria-controls="about" aria-expanded="false">
                        <div class="menu_mobile_item active w-100 pt-4 pb-4 pl-5">
                            <h4 class="m-0 d-inline-block">เกี่ยวกับ</h4>
                            <div class="float-right pr-5"><i class="fas fa-caret-down"></i></div>
                        </div>
                        <div class="w-100  submenu_mobile_item collapse" id="about">
                            <div class="active w-100  pt-4 pb-4 pl-5">
                                <h4 class="pl-5 m-0 d-inline-block">ประวัติภาควิชา</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 pl-5 d-inline-block">โครงสร้างบุคลากร</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 pl-5 d-inline-block">สมาคมศิษย์เก่า</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5">
                        <h4 class="m-0">แผนก</h4>
                    </div>
                    <div class="menu_mobile_item w-100 collapsed" data-toggle="collapse" data-target="#register"
                        aria-controls="register" aria-expanded="false">
                        <div class="w-100  pt-4 pb-4 pl-5">
                            <h4 class="m-0 d-inline-block">สมัครออนไลน์</h4>
                            <div class="float-right pr-5"><i class="fas fa-caret-down"></i></div>
                        </div>
                        <div class="w-100 pl-5 submenu_mobile_item collapse" id="register">
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">สมัครสัมมนา</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">สมัครวิชาเลือก (Elective)</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">ตรวจสอบสถานะลงทะเบียน</h4>
                            </div>
                        </div>

                    </div>
                    <div class="menu_mobile_item w-100 collapsed" data-toggle="collapse" data-target="#article"
                        aria-controls="article" aria-expanded="false">
                        <div class="w-100 pt-4 pb-4 pl-5">
                            <h4 class="m-0 d-inline-block">บทความ</h4>
                            <div class="float-right pr-5"><i class="fas fa-caret-down"></i></div>
                        </div>
                        <div class="w-100 pl-5 submenu_mobile_item collapse" id="article">
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">ข่าววิชาการ</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">บทความสุขภาพ</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">ดาวน์โหลดทั่วไป</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5">
                        <h4 class="m-0">ภาพกิจกรรม</h4>
                    </div>
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5">
                        <h4 class="m-0">คลินิกนอกเวลา</h4>
                    </div>
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5">
                        <h4 class="m-0">ติดต่อเรา</h4>
                    </div>
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5">
                        <h4 class="m-0">ลิงค์ที่เกี่ยวข้อง</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('menubar'); ?>
    <div class="container pt-lg-5 pt-4">
        <div class="row">
            <div class="col-12 mb-lg-3 mb-2">
                <h1 class="title_text pl-3">ประวัติภาควิชา</h1>
            </div>
        </div>
    </div>

    <section class="pt-lg-5 pt-4 pb-4 pb-lg-5 history_detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="img_box"></div>
                </div>
                <div class="col-lg-6 col-12">
                    <h3 class="mt-lg-0 mt-4">Lorem ipsum dolor sit amet, consectetur adipisi</h3>
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-lg-5 pt-4 pb-4 pb-lg-5 history_detail history_gray_background">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-6 col-12">
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="img_box"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-lg-5 pt-4 pb-4 pb-lg-5 history_detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="img_box"></div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-lg-5 pt-4 pb-4 pb-lg-5 history_detail history_gray_background">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pl-5 pr-5">
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Aliquid numquam asperiores quaerat! Placeat et maiores expedita odit
                        perspiciatis libero eos perferendis ut? Vitae at quam possimus reiciendis velit? Fugiat, iste!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-lg-5 pt-4 pb-4 pb-lg-5 history_detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="img_box"></div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                    <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque. Quo
                        nobis, magni dicta maiores delectus fugit debitis est dolorum assumenda eum commodi quisquam
                        illo, repudiandae dolore molestiae nostrum doloremque.</p>
                </div>

                <div class="col-12 image_only mt-lg-3 pt-lg-5 mt-3">
                        <div class="img_box" style="background-image: url('https://picsum.photos/750')"></div>
                </div>
                <div class="col-12 text-center pt-lg-4 mb-lg-4 pt-3 mb-3">
                      <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ad diatis eligendi laborum eaque.</label>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-5 rsubold">
        <div class="container pt-lg-5 pt-0">
            <div class="row">
                <address class="col-lg col-12">
                    <h3>กองอายุรกรรมโรงพยาบาลพระมงกุฎเกล้า</h3>
                    <p class="mb-4">อาคารเฉลิมพระเกียรติ 6 รอบ พระชนมพรรษา ชั้น 3 โรงพยาบาลพระมงกุฎเกล้า<br />
                        315 ถนนราชวิถี เขตราชเทวี กรุงเทพฯ 10400 <br />
                        <i style=" transform: scaleX(-1);" class="fas fa-phone mr-2 ml-2 mt-3"></i>0-2763-3280<br />
                        <i style=" transform: scaleX(-1);" class="fas fa-phone mr-2 ml-2 mt-2"></i>0-2763-3278</p>

                    <i class="fab fa-facebook h1"></i>
                    <i class="fab fa-youtube h1 ml-3 mr-3"></i>
                    <i class="fab fa-line h1"></i>
                </address>
                <div class="col d-lg-block d-none">
                    <p><small>เว็บไซต์อย่างเป็นทางการของกองอายุรกรรม โรงพยาบาลพระมงกุฎเกล้า<br />
                            สงวนลิขสิทธิ์ พ.ศ. ๒๕๕๔-๒๕๕๕<br />
                            กองอายุรกรรม โรงพยาบาลพระมงกุฎเกล้า<br />
                            ออกแบบและดูแลโดย พ.อ. กิตติ บูรณวุฒิ</small></p>
                    <p class="pt-4"><small>Official Website of Department of Medicine, Phramongkutklao Hospital<br />
                            Copyright © 2011-2012<br />
                            Department of Medicine, Phramongkutklao Hospital - All Rights Reserved<br />
                            Developed and maintained by COL Kitti Buranawuti</small></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script type="text/javascript" src="<?=base_url()?>../js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?=base_url()?>../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?=base_url()?>../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?=base_url()?>../js/mdb.min.js"></script>
<script>
        $(document).ready(function () {
            $(".menu-mobile").click(function () {
               $(".menu_mobile").addClass("active");
            });

            $(".close_menu-mobile").click(function () {
               $(".menu_mobile").removeClass("active");
            });


            
        });
    </script>

</body>

</html>