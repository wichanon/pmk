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
                
                <div class="col-12 mb-5 mt-5" style="height: 400px; overflow: hidden;">
                        <img class="img-fluid" src="<?=base_url().'../'.$data['image']?>" alt="">
                </div>
                <div class="col-12 mt-3 pb-3">
                        <h3><?=$data['name'];?></h3>
                        <div class="line mb-2 mt-3"></div>
                        <h5><?=$data['create_datetime'];?></h5>
                    </div>
               <div class="col-12 pl-5 pr-5">
                   <p><?=$data['detail'];?></p>
                   <img class="img-fluid mb-3" src="https://picsum.photos/1200/400" alt="">
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit obcaecati aut impedit quaerat neque, sed quia. Perspiciatis sequi vel quasi magnam, a voluptatem quod ad saepe quo. Dolor, quos deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum animi aliquam iure odit voluptate vitae dolor, voluptas recusandae nemo illo accusantium asperiores. A esse temporibus minus necessitatibus, obcaecati harum illum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, assumenda eveniet. Exercitationem tempora soluta, temporibus facere qui placeat praesentium doloremque mollitia rerum quia suscipit dignissimos! Libero sequi in iste debitis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate laboriosam, reiciendis ipsa ut aut tenetur sint quidem praesentium odit voluptatibus soluta illum. Expedita soluta iste perspiciatis consectetur ad nesciunt officiis?</p>
                </div>        

                <div class="offset-9 col-3 pl-5 pr-5 mt-5">
                        <p><b>Lorem ipsum,</b> dolor sit amet consectetur adipisicing </p>
                    </div>
            </div>
        </div>
    </section>


<?php $this->load->view('footer'); ?>
</body>

</html>