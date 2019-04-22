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
                <h1 class="title_text pl-3 d-inline-block">บทความสุขภาพ</h1>
            </div>
        </div>
    </div>

    <section class="news pt-2 pb-5">
            <div class="container">
                <div class="row">
                    <?php $i=1; foreach ($list as $key => $value): ?>
                        <div class="col-lg-3 col-12 mb-lg-0 mb-4 mt-3">
                                <div class="card card_hover container-fluid p-0">
                                    <div class="row m-0">
                                        <div class="card-img-top col-lg-12 col-6 image_mini p-0" style="background-image: url('<?=base_url().'../'.$value['image']?>')"></div>
                                        <div class="card-body col-lg-12 col-6">
                                            <h4 class="card-title" style="font-size: 18px;"><?=$value['name']?></h4>
                                            
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