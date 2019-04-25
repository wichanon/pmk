<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
<?php $this->load->view('menubar'); ?>
    <div class="container pt-lg-5 pt-4 mt-2">
        <div class="row">
            <div class="col-12 mb-lg-4 mb-3">
                <h1 class="title_text pl-3">โครงสร้างบุคลากร</h1>
            </div>
        </div>
    </div>

    <section>
        <div class="container about_person pt-lg-4 pt-3 pb-4 pb-lg-5">
            <div class="row">
                <?php $i=1; foreach ($list as $key => $value): 
                if($value['is_director'] == 1) {  ?>
                <div class="col-lg-3 col-12 pb-lg-0 pb-5">
                    <div class="image_person d-flex justify-content-center align-items-center mb-3">
                        <img style="width: 250px" src="<?=base_url().'../'.$value['image']?>" alt="">
                    </div>
                    <h4><?=$value['name']?></h4>
                    <p><?=$value['rank']?></p>
                    <p>แผนก : <?=$value['department']?></p>
                </div>
                <?php } endforeach ?>
            </div>
        </div>
    </section>

    
    
<?php $this->load->view('footer'); ?>
</body>

</html>