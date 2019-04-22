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
                <h1 class="title_text pl-3 d-inline-block">ภาพกิจกรรม</h1>
            </div>
        </div>
    </div>

    <section class="news pt-2 pb-5">
        <div class="container">
            <div class="row">
                <?php $i=1; foreach ($list as $key => $value): ?>
                <div class="col-lg col-12 mb-lg-0 mb-4">
                    <div class="card card_hover container-fluid p-0">
                        <div class="row m-0">
                            <img class="card-img-top col-lg-12 col-6 image_mini p-0" src="<?=base_url().'../'.$value['image']?>"
                                alt="">
                            <div class="card-body col-lg-12 col-6 -">
                                <h4 class="card-title"><?=$value['name']?></h4>
                                <p class="card-text mb-2"><?=$value['detail']?></p>
                                <label for="" class="float-right m-0">Tag: <span
                                        class="text-info"><strong><?=$value['tag']?></strong></span></label>aas
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php $this->load->view('footer'); ?>
</body>

</html>