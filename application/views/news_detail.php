<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>

    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                
                <div class="col-12 mb-5 mt-5">
                        <img class="img-fluid" src="<?=base_url().'../'.$data['image']?>" alt="">
                </div>
                <div class="col-12 mt-3 pb-3">
                        <h3><?=$data['name'];?></h3>
                        <div class="line mb-2 mt-3"></div>
                        <h5><?=$data['create_datetime'];?></h5>
                    </div>
               <div class="col-12 pl-5 pr-5">
                   <p><?=$data['detail'];?></p>
               </div>
               <div class="offset-9 col-3 pl-5 pr-5">
                    <p><b><?=$data['author'];?></b> <?=$data['author_detail'];?> </p>
                </div>
               <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                   <a href="<?=base_url().'../'.$data['file']?>" download><button type="button" class="btn btn-primary">ดาวน์โหลดเอกสาร</button></a>
               </div>
            </div>
        </div>
    </section>


<?php $this->load->view('footer'); ?>
</body>

</html>