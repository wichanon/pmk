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
                <h1 class="title_text pl-3 d-inline-block">สมัครสัมมนา</h1>
                <button type="button"
                    class="btn btn-primary d-none d-lg-inline-block float-right">ตรวจสอบสถานะการลงทะเบียน</button>
            </div>
        </div>
    </div>

    <section class="seminar pt-2 pb-lg-5 pb-4">
        <div class="container">
            <div class="row p-lg-0 pl-1 pr-1">
                <?php $i=1; foreach ($seminar as $key => $value): ?>
                <div class="col-lg-4 col-6 mb-lg-4 mb-2 pl-1 pr-1 pl-lg-3 pr-lg-3">
                    <a href="<?=base_url().'seminar/view_detail/'.$value['id']?>">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url().'../'.$value['image']?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?=$value['name']?></h4>
                                <p class="card-text" style="height: 46px; overflow: hidden;"><?=$value['detail']?></p>
                            </div>
                        </div>
                </div>
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <div class="w-100 d-flex justify-content-center align-items-center pt-2 pb-2 d-lg-none btn_register_seminar position-fixed">
        <button type="button" class="btn btn-primary">ตรวจสอบสถานะการลงทะเบียน</button>
    </div>
<?php $this->load->view('footer'); ?>

</body>

</html>