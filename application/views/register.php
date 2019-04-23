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
                                <input type="password" class="form-control" name="" id="password" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control" name="" id="password_re" aria-describedby="helpId"
                                    placeholder="" onchange="check_pass()">

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
                                <input type="text" pattern="[0-9]"   class="form-control" name="" id="tel" aria-describedby="helpId"
                                    placeholder="">

                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">*แผนก/หน่วยงาน</label>
                                <div class="col-4 p-0">
                                    <select class="custom-select" name="" id="department">
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
                                <label for="">*ตำแหน่ง</label>
                                <input type="text" class="form-control" name="" id="rank" aria-describedby="helpId"
                                    placeholder="">
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

<script>
    function check_pass(){
    
    if($('#password_re').val() != $('#password').val()){
        $('#password_re').addClass('input_error');
        alert("รหัสผ่านไม่ตรงกัน");
    }
}
</script>
</body>

</html>