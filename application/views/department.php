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
                <h1 class="title_text pl-3">แผนก</h1>
            </div>
        </div>
    </div>

    <section>
        <div class="container  pt-lg-5 pt-3 pb-lg-5 pb-3">
            <div class="row">
                <?php $i=1; foreach ($list as $key => $value): ?>
                <?php if($value['main'] == 1 ){ ?>
                <a href="<?=base_url().'department/view_detail/'.$value['id']?>" class="col-12 mb-lg-5 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="rounded-circle" style="width: 30%" src="<?=base_url().'../'.$value['image']?>" alt="">
                        <h4 class="mt-3"><?=$value['name']?></h4>
                        <p><?=$value['name_eng']?></p>
                    </div>
                </a>
                <?php } endforeach ?>
                <?php $i=1; foreach ($list as $key => $value): ?>
                <?php if($value['main'] == 0 ){ ?>
                <a href="<?=base_url().'department/view_detail/'.$value['id']?>" class="col-lg-3 col-6 department_title_mini mb-lg-5 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="rounded-circle" style="width: 80%" src="<?=base_url().'../'.$value['image']?>" alt="">
                        <h4 class="mt-3"><?=$value['name']?></h4>
                        <p><?=$value['name_eng']?></p>
                    </div>
                </a>
                <?php } endforeach ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('footer'); ?>
</body>

</html>