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
            <div class="col-12 mb-4">
                <h1 class="title_text pl-3 d-inline-block">ติดต่อเรา</h1>
            </div>
        </div>
    </div>


    <section class="pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-5 mb-4">
                    <img class="img-fluid" src="https://picsum.photos/1250/400" alt="">
                    <label for="" class="mt-5  d-none d-lg-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus
                        doloremque inventore quas!</label>
                </div>
                <div class="col-lg-6 col-12 pl-lg-5 pl-4 pr-4">
                    <div class="form-group">
                        <label for="">*หัวเรื่อง</label>
                        <div class="md-form mt-2">
                            <input type="text" id="materialTitle" class="form-control">
                            <label for="materialTitle">หัวเรื่อง</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 pl-4 pr-4 pr-lg-5">
                    <div class="form-group">
                        <label for="">*Email</label>
                        <div class="md-form mt-2">
                            <input type="text" id="materialEmail" class="form-control">
                            <label for="materialEmail">Email</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 pl-lg-5 pl-4 pr-4">
                    <div class="form-group">
                        <label for="">*รายละเอียด</label>
                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>

                <div class="col-lg-6 col-12 pl-4 pr-4 pr-lg-5">
                    <div class="form-group">
                        <label for="">*ข้อความตามภาพ</label>
                        <div class="md-form mt-2">
                            <input type="text" id="materialPic" class="form-control">
                            <label for="materialPic">ข้อความตามภาพ</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 pt-lg-5 pt-3 d-flex justify-content-center align-items-center search_btn mt-3">
                    <button type="button" class="rounded btn btn-primary mr-3 grey darken-2">ยกเลิก</button>
                    <button type="button" class="rounded btn btn-primary ml-3 blue">ส่ง</button>
                </div>

                <div class="col-lg-8 col-12 pt-5 mt-lg-5 mt-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-4 col-12 pt-lg-5 pt-2 mt-5">
                        <h3 class="title_text_down d-inline-block">สถานที่ตั้ง</h3>
                        <p class="mt-4">กองอายุรกรรมโรงพยาบาลพระมงกุฎเกล้า<br>
                        อาคารเฉลิมพระเกียรติ 6 รอบ พระชนมพรรษา ชั้น 3 <br>
                        โรงพยาบาลพระมงกุฎเกล้า 315 ถนนราชวิถี <br>
                        เขตราชเทวี กรุงเทพฯ 10400 <br>
                        <br>
                        โทร : 0-2354-9085 <br>
                              0-2644-7471</p>
                </div>
            </div>
        </div>
    </section>




<?php $this->load->view('footer'); ?>
</body>

</html>