<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $i=1; foreach ($slideshow as $key => $value): 
            if($i == 1 ){
            ?>
                <div class="carousel-item active" style="background-image: url('<?=base_url().'../'.$value['image']?>');">
                </div>
            <?php $i++; }else{ ?>
            <div class="carousel-item" style="background-image: url('<?=base_url().'../'.$value['image']?>');"></div>
            <?php }endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="new  pt-lg-4 pb-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-3 mt-lg-3">
                    <h1 class="title_text pl-3">ข่าว</h1>
                </div>
                <?php $i=1; foreach ($news as $key => $value): 
                if($i == 1 ){ ?>
                <div class="col-lg-6 col-12 big_box pr-lg-1 mb-lg-0 mb-3 big_box_first">
                    <div class="box_content shadow_box">
                        <div style="background-image: url('<?=base_url().'../'.$value['image']?>')" class="image_content"></div>
                        <div class="box_content_detail p-3">
                            <h5><?=$value['name']?></h5>
                            <p><?=$value['detail']?></p>
                        </div>
                    </div>
                </div>
                <?php $i++;  ?>
                <div class="col-lg-6 col-12 big_box">
                    <div class="container-fluid pr-lg-0">
                        <div class="row">
                            <?php }else if($i<6){ ?>
                            <div class="col-6 pl-0 pr-2 pb-2">
                                <div class="box_content shadow_box"><img src="<?=base_url().'../'.$value['image']?>"
                                        class="img-fluid" alt="Responsive image">
                                    <div class="box_content_detail p-3">
                                        <h5><?=$value['name']?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                            <?php }endforeach ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="register_online pt-lg-5 pb-lg-5 pt-4 pb-4 gray2_background">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-3">
                    <h1 class="title_text pl-3 d-inline-block">สมัครออนไลน์</h1>
                    <button type="button"
                        class=" rsubold btn btn-primary d-none d-lg-inline-block float-right color_blueSky border-0 pt-3 pr-4 pl-4 pb-3">ตรวจสอบสถานะลงทะเบียน</button>
                </div>

                <div class="col-12 d-block d-lg-none">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid p-0">
                                    <div class="row m-0">
                                        <?php $i=1; foreach ($seminar as $key => $value): 
                                        if($i <3){?>
                                        <div class="col-6 p-1">
                                            <div class="card shadow_box border-0">
                                                <div class="card-img-top"
                                                    style="background-image: url('<?=base_url().'../'.$value['image']?>')"></div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?=$value['name']?></h4>
                                                    <label for="" class="p-0 m-0 text-muted"><i
                                                            class="far fa-calendar-alt"></i> : <?=$value['create_datetime']?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++ ?>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="container-fluid p-0">
                                    <div class="row m-0">
                                        <?php }else if($i>2 && $i<5) { ?>
                                        <div class="col-6 p-1">
                                            <div class="card shadow_box border-0">
                                                <div class="card-img-top"
                                                    style="background-image: url('<?=base_url().'../'.$value['image']?>')"></div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?=$value['name']?></h4>
                                                    <label for="" class="p-0 m-0 text-muted"><i
                                                            class="far fa-calendar-alt"></i> : <?=$value['create_datetime']?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators mt-3 mb-3 position-relative">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                    </div>

                </div>
                <?php $i=1; foreach ($seminar as $key => $value): 
                if($i <5){?>
                <div class="col-3 d-lg-block d-none">
                    <div class="card shadow_box border-0">
                        <img class="card-img-top" src="<?=base_url().'../'.$value['image']?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?=$value['name']?></h4>
                            <label for="" class="p-0 m-0 text-muted"><i class="far fa-calendar-alt"></i> : <?=$value['create_datetime']?></label>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
                <?php  } endforeach ?>
                
                <div class="col-12 mt-2 d-flex justify-content-center align-items-center d-lg-none">
                    <button type="button"
                        class="rsubold btn btn-primary color_blueSky border-0 pt-3 pr-4 pl-4 pb-3">ตรวจสอบสถานะลงทะเบียน</button>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-lg-5 pb-lg-5 pt-4 pb-4 academic">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-3">
                    <h1 class="title_text pl-3">วิชาการและประกันคุณภาพ</h1>
                </div>
                <?php $i=1; foreach ($article_technical as $key => $value): 
                if($i <4){?>
                <div class="col">
                    <div class="card card_hover">
                        <img class="card-img-top" src="<?=base_url().'../'.$value['image']?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?=$value['name']?></h4>
                            <p class="card-text"><?=$value['detail']?></p>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
                <?php  } endforeach ?>
                
            </div>
        </div>
    </section>

    <section class="advertise pt-lg-5 pb-lg-5 pt-4 pb-4 gray2_background">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-3">
                    <h1 class="title_text pl-3">ประชาสัมพันธ์</h1>
                </div>
                <?php $i=1; foreach ($publicrelations as $key => $value): 
                if($i <5){?>
                <div class="col-lg-6 col-12">
                    <div class="card mb-3 card_long_shadow">
                        <div class="row no-gutters h-100 m-0">
                            <div class="col-lg-4 col-5 h-100">
                                <div class="advertise_img" style="background-image: url('<?=base_url().'../'.$value['image']?>')">
                                </div>
                            </div>
                            <div class="col-lg-8 col-7 h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$value['name']?></h5>
                                    <p class="card-text d-lg-block d-none"><?=$value['detail']?></p>
                                    <p class="card-text p_mobile d-block d-lg-none"><?=$value['detail']?></p>
                                    <p class="card-text"><small class="text-muted"><?=$value['modified_datetime']?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
                <?php  } endforeach ?>
            </div>
        </div>
    </section>
    <section class="person pt-5 pb-5">
        <div class="container">
            <div class="row">
                <?php $i=1; foreach ($department as $key => $value): 
                if($i <2){?>
                <div class="col-lg col-12">
                    <div class="card border-0">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                                <img src="<?=base_url().'../'.$value['image']?>" class="card-img rounded-circle" alt="...">
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$value['name_eng']?></h5>
                                    <p class="card-text"><small class="text-muted"><?=$value['name']?></small></p>
                                    <p class="card-text"><?=$value['detail']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php }  endforeach ?>
                <?php $i=1; foreach ($about_structure as $key => $value): 
                if($i <2){?>
                <div class="col-lg col-12">
                    <div class="card border-0">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                                <img style="width: 100%; height: 180px; margin-top: 30px;" src="<?=base_url().'../'.$value['image']?>" class="card-img rounded-circle" alt="...">
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="card-body">
                                    <h5 class="card-title" style="margin-top: 65px;"><?=$value['name']?></h5>
                                    <p class="card-text"><?=$value['rank']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php }  endforeach ?>
            </div>
        </div>
    </section>
    <section class="pt-lg-5 pb-lg-5 pt-4 pb-4 gray2_background research">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-3">
                    <h1 class="title_text pl-3">วิจัย</h1>
                </div>
                <?php $i=1; foreach ($research as $key => $value): 
                if($i <4){?>
                <div class="col-lg col-12 mb-lg-0 mb-4">
                    <div class="card card_hover container-fluid p-0">
                        <div class="row">
                            <img class="card-img-top col-12" style="height: 300px;" src="<?=base_url().'../'.$value['image']?>" alt="">
                            <div class="card-body col-12">
                                <h4 class="card-title"><?=$value['name']?></h4>
                                <p class="card-text" style="width: 100%; overflow: hidden;">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php }  endforeach ?>
            </div>
        </div>
    </section>

    <section class="pt-lg-5 pb-lg-5 pt-4 pb-4 event">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-3">
                    <h1 class="title_text pl-3">ภาพกิจกรรม</h1>
                </div>
                <?php $i=1; foreach ($activity_images as $key => $value): 
                if($i <4){?>
                <div class="col-lg col-12 mb-lg-0 mb-4">
                    <div class="card card_hover container-fluid p-0">
                        <div class="row m-0">
                            <img class="card-img-top col-lg-12 col-6 image_mini p-0" style="height: 250px;" src="<?=base_url().'../'.$value['image']?>"
                                alt="">
                            <div class="card-body col-lg-12 col-6">
                                <h4 class="card-title"><?=$value['name']?></h4>
                                <p class="card-text mb-2"><?=$value['detail']?></p>
                                <div class="w-100 "></div>
                                <label for="" class="float-right m-0">Tag: <span
                                        class="text-info"><strong><?=$value['tag']?></strong></span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php }  endforeach ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('footer'); ?>

</body>

</html>