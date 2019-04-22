<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>
    
    <section class="gray_background pb-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="title_text pl-3 d-inline-block">Link</h1>
                </div>
                <?php $i=1; foreach ($list as $key => $value): ?>
                <div class="col-12 row_link pt-4 pb-4 mb-2">
                    <div class="row">
                        <div class="col-1 d-flex justify-content-center align-items-center"><?=$i ?></div>
                        <a href="https://<?=$value['url']?>" target='_blank'><div class="col-11"><?=$value['name']?></div></a>
                    </div>
                </div>
                <?php $i++ ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>
</body>

</html>