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
                <h1 class="title_text pl-3 d-inline-block">คลินิกนอกเวลา</h1>
                <a href="<?=base_url().'../uploads/clinic/clinic.jpg'?>" download><button type="button" class="btn btn-primary d-inline-block float-right">ดาวน์โหลดเอกสาร</button></a>
            </div>
        </div>
    </div>

    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3 pb-3">
                    <h3>คลินิกนอกเวลา โรงเพยาบาลพระมงกุฎเกล้า ชั้น 1 ตึกเฉลิมพระเกียรติ</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img style="width: 100%;" src="<?=base_url().'../uploads/clinic/clinic.jpg'?>" alt="">
                </div>
            </div>
        </div>
    </section>


<?php $this->load->view('footer'); ?>
</body>

</html>