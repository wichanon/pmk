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
            <div class="col-12 mb-4 d-flex align-items-center">
                <h1 class="title_text pl-3 d-inline-block">สมัครออนไลน์ (Elective)</h1>
            </div>
        </div>
    </div>

    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3 pb-3">
                    <h3>ลงทะเบียนฝึกงาน</h3>
                </div>
                <div class="col-12 pl-5 pr-5">
                    <div class="text-center mb-5">
                        <h2>แบบฟอร์มการลงทะเบียน</h2>
                        <h4>กรุณากรอกข้อมูลที่มีเครื่องหมาย (*) ให้ครบถ้วน</h4>
                    </div>

                    <div class="container-fluid pl-5 pr-5">
                        <div class="row">
                            <div class="col-6 mb-4">
                                <div class="form-group">
                                    <label for="">*ชื่อ - นามสกุล</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="form-group pt-2">
                                    <label for=""></label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <label for="">*เพศ</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="" id="" value="checkedValue"
                                            checked>
                                        ชาย
                                    </label>
                                    <label class="form-check-label ml-5">
                                        <input type="radio" class="form-check-input" name="" id="" value="checkedValue">
                                        หญิง
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">*email</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">เบอร์โทรศัพท์(มือถือ)</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">*แผนกที่ต้องการฝึกงาน</label>
                                    <div class="col-4 p-0">
                                        <select class="custom-select" name="" id="">
                                            <option selected>Select one</option>
                                            <?php $i=1; foreach ($department as $key => $value): ?>
                                            <option value="<?=$value['name']?>"><?=$value['name']?></option>
                                        <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">*วันที่เริ่มฝึกงาน</label>
                                    <div class="col-4 p-0">
                                        <select class="custom-select" name="" id="">
                                            <option selected>Select one</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">*วันที่สิ้นสุดฝึกงาน</label>
                                    <div class="col-4 p-0">
                                        <select class="custom-select" name="" id="">
                                            <option selected>Select one</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">อธิบายเพิ่มเติม</label>
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-12  d-flex justify-content-center align-items-center mt-5 mb-5">
                                <a href="#" class="btn btn-primary active mr-3 pl-5 pr-5" role="button">ยกเลิก</a>
                                <button type="button" class="btn btn-primary ml-3 pl-5 pr-5">ลงทะเบียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $this->load->view('footer'); ?>
</body>

</html>