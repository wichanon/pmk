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
                <h1 class="title_text pl-3 d-inline-block">วิจัย</h1>
                <a href="<?=base_url().'../'.$data['file']?>" download><button type="button" class="btn btn-primary d-none d-lg-inline-block float-right">ดาวน์โหลดเอกสาร</button></a>
            </div>
        </div>
    </div>

    <section class="pt-lg-2 pt-1 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-lg-3 mt-1 pb-3">
                    <h3><?=$data['name'];?></h3>
                    <h5><?=$data['create_datetime'];?></h5>
                    <h5><?=$data['detail'];?></h5>
                </div>
                <div class="col-12 mb-5" style="height: 400px; overflow: hidden;">
                        <img class="img-fluid" style="width: 100%;" src="<?=base_url().'../'.$data['image']?>" alt="">
                </div>
               <div class="col-12">
                
                    <h5 style="width: 100%; height: 50px; padding: 15px; background-color: #F1F4FA;">Abstract</h5>
                    <p style="padding-left: 30px;"><?=$data['abstract'];?></p>
                    <h5 style="width: 100%; height: 50px; padding: 15px; background-color: #F1F4FA;">Introduction</h5>
                    <p style="padding-left: 30px;"><?=$data['introduction'];?></p>
               </div>
            </div>
        </div>
    </section>


    <div class="w-100 d-flex justify-content-center align-items-center pt-2 pb-2 d-lg-none position-fixed btn_register_seminar">
            <a href="<?=base_url().'../'.$data['file']?>"><button type="button" class="btn btn-primary">ดาวน์โหลดเอกสาร</button></a>
        </div>
<?php $this->load->view('footer'); ?>
</body>

</html>