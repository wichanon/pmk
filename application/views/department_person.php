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
                <div class="col-12 mt-5 pb-3">
                    <h4>ไวกิ้งแรลลีพาเหรดอิเหนา</h4>
                </div>
                <?php  $i=1; foreach ($structure as $key => $value): ?>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="<?=base_url().'../'.$value['image']?>" alt="">
                    </div>
                    <h4><?=$value['name']?></h4>
                    <p><?=$value['rank']?></p>
                </div>
                <?php endforeach ?>
                
                <div class="col-12 mt-5 pb-3">
                    <h4>ไวกิ้งแรลลีพาเหรดอิเหนา</h4>
                </div>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="https://picsum.photos/250" alt="">
                    </div>
                    <h4>test</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. T.</p>
                </div>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="https://picsum.photos/250" alt="">
                    </div>
                    <h4>test</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. T.</p>
                </div>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="https://picsum.photos/250" alt="">
                    </div>
                    <h4>test</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. T.</p>
                </div>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="https://picsum.photos/250" alt="">
                    </div>
                    <h4>test</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. T.</p>
                </div>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="https://picsum.photos/250" alt="">
                    </div>
                    <h4>test</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. T.</p>
                </div>
                <div class="col-3">
                    <div class="image_person mb-3">
                        <img src="https://picsum.photos/250" alt="">
                    </div>
                    <h4>test</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. T.</p>
                </div>
            </div>
        </div>
    </section>


<?php $this->load->view('footer'); ?>
</body>

</html>