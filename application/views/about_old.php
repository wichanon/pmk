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
                <h1 class="title_text pl-3 d-inline-block">สมาคมศิษย์เก่า</h1>
                <h5 class="float-right collapsed" data-toggle="collapse" data-target="#search_name"
                    aria-controls="article" aria-expanded="false">ค้นหารายชื่อ <i class="fas fa-caret-down"></i></h5>
            </div>
        </div>
    </div>

    <section class="history_gray_background collapse d-lg-block" id="search_name">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-12 mb-lg-4 mb-2">
                    <h3>ค้นหารายชื่อ</h3>
                </div>
                <div class="offset-lg-2 col-lg-5 col-12">
                    <div class="md-form">
                        <input type="text" id="materialLoginFormName" class="form-control">
                        <label for="materialLoginFormName">ชื่อ / นามสกุล</label>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="form-group">
                        <label for="">ปี</label>
                        <select class="form-control" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center search_btn mt-lg-3 mt-2">
                    <button type="button" class="rounded  btn btn-primary mr-3 grey darken-2">ดูรายชื่อทั้งหมด</button>
                    <button type="button" class="rounded  btn btn-primary ml-3 blue">ค้นหา</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-lg-5 pt-3">
            <div class="row">
                <div class="col-12">
                    <h3>รายชื่อทั้งหมด</h3>
                </div>
            </div>
        </div>
        <div class="history_gray_background pt-3 pb-3">
            <div class="container">
                <?php $i=1; foreach ($list as $key => $value): ?>
                <div class="row">
                    <div class="col-lg-2 col-4">
                        <img style="width: 150px" src="<?=base_url().'../'.$value['image']?>"" alt="" class="w-100">
                    </div>
                    <div class="col-lg-10 col-8">
                        <div class="container-fluid p-0 h-100">
                            <div class="row h-100">
                                    <div class="col-lg-2 d-lg-flex  d-block justify-content-center align-items-center">
                                            <h5><?=$value['name']?></h5>
                                        </div>
                                        <div class="col-lg-2 col-2 d-lg-flex d-block justify-content-center align-items-center">
                                            <h5><?=$value['generation']?></h5>
                                        </div>
                                        <div class="col-lg-2 col-2 d-lg-flex d-block justify-content-center align-items-center">
                                            <h5><?=$value['year']?></h5>
                                        </div>
                                        <div class="col-lg-2 d-lg-flex d-block justify-content-center align-items-center">
                                            <h5><?=$value['branch']?></h5>
                                        </div>
                                        <div class="col-lg-2 d-lg-flex d-block justify-content-center align-items-center">
                                            <h5><?=$value['present']?></h5>
                                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>


        <div class="d-flex justify-content-center align-items-center  mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <?php $this->load->view('footer'); ?>
</body>

</html>