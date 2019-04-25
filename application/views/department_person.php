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
                <?php  $i=1; foreach ($structure as $key => $value): ?>
                <?php if($i==1){ ?>
                <h3><?=$value['department']?></h3>
                <?php $i++ ?>
                <?php } endforeach ?>
            </div>
        </div>
    </div>

    <section>
        <div class="container pb-5">
            <div class="row">
                <?php  $i=1; foreach ($structure as $key => $value): 
                    if($value['role'] == "แพทย์ที่ปรึกษา" && $i ==1){ ?>
                        <div class="col-12 mt-5 pb-3">
                            <h4>แพทย์ที่ปรึกษา</h4>
                        </div>
                    <?php $i++; ?>
                <?php  } endforeach ?>
                <?php  $i=1; foreach ($structure as $key => $value): ?>
                <?php  if($value['role'] == "แพทย์ที่ปรึกษา"){ ?> 
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="<?=base_url().'../'.$value['image']?>" alt="">
                    </div>
                    <h4><?=$value['name']?></h4>
                    <p><?=$value['rank']?></p>
                    <p>วุฒิการศึกษา :<?=$value['education']?></p>
                </div>
                <?php } endforeach ?>
                <?php  $i=1; foreach ($structure as $key => $value): 
                if($value['role'] == "อาจารย์แพทย์" && $i ==1){ ?>
                <div class="col-12 mt-5 pb-3">
                    <h4>อาจารย์แพทย์</h4>
                </div>
                <?php $i++; ?>
                <?php  } endforeach ?>
                <?php  $i=1; foreach ($structure as $key => $value): ?>
                <?php  if($value['role'] == "อาจารย์แพทย์"){ ?> 
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="<?=base_url().'../'.$value['image']?>" alt="">
                    </div>
                    <h4><?=$value['name']?></h4>
                    <p><?=$value['rank']?></p>
                    <p>วุฒิการศึกษา :<?=$value['education']?></p>
                </div>
                <?php } endforeach ?>
                <?php  $i=1; foreach ($structure as $key => $value): 
                if($value['role'] == "เจ้าหน้าที่" && $i ==1){ ?>
                <div class="col-12 mt-5 pb-3">
                    <h4>เจ้าหน้าที่</h4>
                </div>
                <?php $i++; ?>
                <?php  } endforeach ?>
                <?php  $i=1; foreach ($structure as $key => $value): ?>
                <?php  if($value['role'] == "เจ้าหน้าที่"){ ?> 
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="<?=base_url().'../'.$value['image']?>" alt="">
                    </div>
                    <h4><?=$value['name']?></h4>
                    <p><?=$value['rank']?></p>
                    <p>วุฒิการศึกษา :<?=$value['education']?></p>
                </div>
                <?php } endforeach ?>
            </div>
        </div>
    </section>


<?php $this->load->view('footer'); ?>
</body>

</html>