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
                    <div class="menu_mobile_item w-100 collapsed" data-toggle="collapse" data-target="#about"
                        aria-controls="about" aria-expanded="false">
                        <div class="w-100 pt-4 pb-4 pl-5">
                            <h4 class="m-0 d-inline-block">เกี่ยวกับ</h4>
                            <div class="float-right pr-5"><i class="fas fa-caret-down"></i></div>
                        </div>
                        <div class="w-100 pl-5 submenu_mobile_item collapse" id="about">
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">ประวัติภาควิชา</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">โครงสร้างบุคลากร</h4>
                            </div>
                            <div class="w-100  pt-4 pb-4 pl-5">
                                <h4 class="m-0 d-inline-block">สมาคมศิษย์เก่า</h4>
                            </div>
                        </div>
                    </div>
                    <div class="menu_mobile_item w-100 pt-4 pb-4 pl-5 active">
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


    <div class="container pt-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="title_text pl-3">แผนก</h1>
            </div>
        </div>
    </div>

    <section>
        <div class="container  pt-lg-5 pt-3 pb-lg-5 pb-3">
            <div class="row">
                <?php $i=1; foreach ($list as $key => $value): ?>
                <?php if($value['main'] == 1 ){ ?>
                <div class="col-12 mb-lg-5 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="rounded-circle" style="width: 30%" src="<?=base_url().'../'.$value['image']?>" alt="">
                        <h4 class="mt-3"><?=$value['name']?></h4>
                        <p><?=$value['name_eng']?></p>
                    </div>
                </div>
                <?php } endforeach ?>
                <?php $i=1; foreach ($list as $key => $value): ?>
                <?php if($value['main'] == 0 ){ ?>
                <div class="col-lg-3 col-6 department_title_mini mb-lg-5 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="rounded-circle" style="width: 80%" src="<?=base_url().'../'.$value['image']?>" alt="">
                        <h4 class="mt-3"><?=$value['name']?></h4>
                        <p><?=$value['name_eng']?></p>
                    </div>
                </div>
                <?php } endforeach ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('footer'); ?>

    
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