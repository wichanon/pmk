<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>::Login::</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>
    <section class="gray2_background pb-5 register_form">
        <div class="container pt-5 pl-5 pr-5">
            <div class="row_wrap pt-5 wrap_login">
                <div class="col-12 head_title p-0  d-flex  align-items-center">
                    <h1 class="p-0 mb-0 ml-3">เข้าสู่ระบบ</h1>
                </div>

                <div class="container-fluid pl-5 pr-5 mt-5">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="" id="username" aria-describedby="helpId"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="" id="password" aria-describedby="helpId"
                                        placeholder="">
                                </div>
                        </div>
                       
                        <div class="col-12  d-flex justify-content-center align-items-center mt-5 mb-5">
                                <button type="button" class="btn btn-primary ml-3 pl-5 pr-5" onclick="login()">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<?php $this->load->view('footer'); ?>
</body>

</html>