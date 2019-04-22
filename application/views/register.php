<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>
    <section class="gray2_background pb-5 register_form">
        <div class="container pt-5">
            <div class="row_wrap pt-5">
                <div class="col-12 head_title p-0  d-flex  align-items-center">
                    <h1 class="p-0 mb-0 ml-3">สมัครสมาชิก</h1>
                </div>
                <div class="col-12 pl-5 pr-5 mt-5">
                    <div class="text-center mb-5">
                        <h4>กรุณากรอกข้อมูลที่มีเครื่องหมาย (*) ให้ครบถ้วน</h4>
                    </div>
                </div>

                <div class="container-fluid pl-5 pr-5">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="form-group">
                                <label for="">*ชื่อ - นามสกุล</label>
                                <input type="text" class="form-control" name="" id="firstname" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="form-group pt-2">
                                <label for=""></label>
                                <input type="text" class="form-control" name="" id="lastname" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*ชื่อผู้ใช้</label>
                                <input type="text" class="form-control" name="" id="username" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*รหัสผ่าน</label>
                                <input type="text" class="form-control" name="" id="password" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*ยืนยันรหัสผ่าน</label>
                                <input type="text" class="form-control" name="" id="password_re" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*Email</label>
                                <input type="text" class="form-control" name="" id="email" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*โทรศัพท์(มือถือ)</label>
                                <input type="text" class="form-control" name="" id="tel" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*แผนก/หน่วยงาน</label>
                                <input type="text" class="form-control" name="" id="department" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*ตำแหน่ง</label>
                                <div class="col-4 p-0">
                                    <select class="custom-select" name="" id="renk">
                                        <option selected>Select one</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  d-flex justify-content-center align-items-center mt-5 mb-5">
                                <a href="#" class="btn btn-primary active mr-3 pl-5 pr-5" role="button">ยกเลิก</a>
                                <button type="button" class="btn btn-primary ml-3 pl-5 pr-5" onclick="register_member()">ลงทะเบียน</button>
                            </div>
                    </div>
                </div>
            </div>
    </section>

<?php $this->load->view('footer'); ?>
</body>

</html>