<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_config'); ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('menubar'); ?>
    <form>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 mb-4 d-flex align-items-center">
                <h1 class="title_text pl-3 d-inline-block">สมัครออนไลน์</h1>
                <div class="pl-2 d-inline-block">
                    <h3>> <span style="color:blue"><?=$data['name'];?> </span></h3>
                </div>

            </div>
        </div>
    </div>

    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3 pb-3">
                    <h3>ลงทะเบียนสัมมนา</h3>
                </div>
                <div class="col-12 pl-5 pr-5">
                    <div class="text-center mb-5">
                        <h2>แบบฟอร์มการลงทะเบียน</h2>
                        <h4>กรุณากรอกข้อมูลที่มีเครื่องหมาย (*) ให้ครบถ้วน</h4>
                    </div>

                    <div class="container-fluid pl-5 pr-5">
                        <div class="row">
                            <div class="col-12">
                                <h4>ชื่อหลักสูตร : <?=$data['name'];?></h4>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="form-group">
                                    <label for="">*ชื่อ - นามสกุล (ไทย)</label>
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
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">*ชื่อ - นามสกุล (อังกฤษ)</label>
                                    <input type="text" class="form-control" name="" id="firstname_eng" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group pt-2">
                                    <label for=""></label>
                                    <input type="text" class="form-control" name="" id="lastname_eng" aria-describedby="helpId"
                                        placeholder="">
                                    <small id="helpId" class="form-text text-muted">*หมายเหตุ : ชื่อ-นามสกุลภาษาอังกฤษ(สำหรับพิมพ์ในปรพกาศนียบัตร)</small>

                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <label for="">*เพศ</label>
                                
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="sex" id="" value="ชาย"
                                            checked>
                                        ชาย
                                    </label>
                                    <label class="form-check-label ml-5">
                                        <input type="radio" class="form-check-input" name="sex" id="" value="หญิง">
                                        หญิง
                                    </label>
                                </div>
                                
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">*สถานที่ทำงาน</label>
                                    <input type="text" class="form-control" name="" id="office" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">จังหวัด</label>
                                    <div class="col-4 p-0">
                                        <select class="custom-select" name="" id="province">
                                            <?php $i=1; foreach ($province as $key => $value): ?>
                                                <option value="<?=$value['name_th'];?>"><?=$value['name_th'];?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">โทรศัพท์ (มือถือ)</label>
                                    <input type="text" class="form-control" name="" id="phone" aria-describedby="helpId"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="" id="email" aria-describedby="helpId"
                                        placeholder="">
                                    <small id="helpId" class="form-text text-muted">*หมายเหตุ : ใช้ชื่อ Email จริงเพื่อระบบจะได้จัดส่งข้อมูล </small>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="">สถานะการทำงาน</label>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="แพทย์ทั่วไป" checked>
                                                แพทย์ทั่วไป
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="อายุรแพทย์ (ทุกสาขา)">
                                                อายุรแพทย์ (ทุกสาขา)
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="แพทย์เฉพาะทางสาขาอื่น">
                                                แพทย์เฉพาะทางสาขาอื่น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="แพทย์ประจำบ้านพระมงกุฎเกล้า">
                                                แพทย์ประจำบ้านพระมงกุฎเกล้า
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="แพทย์ประจำบ้านสถาบันอื่น">
                                                แพทย์ประจำบ้านสถาบันอื่น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work id=""
                                                    value="นพท./นศพ วพม.">
                                                นพท./นศพ วพม.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="นศพ. สถาบันอื่น ">
                                                นศพ. สถาบันอื่น 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="work" id=""
                                                    value="other">
                                                อื่นๆ
                                                <input id="work_other" type="text" style="border: none; border-bottom: 1px solid #ccc; outline: none;"> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">ช่องทางการชำระ</label>
                                    <div class="col-4 p-0">
                                        <select class="custom-select" name="" id="payment">
                                            <option value="ATM">ATM</option>
                                            <option value="Mobile-Banking">Mobile-Banking</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12  d-flex justify-content-center align-items-center mt-5 mb-5">
                                <a href="#" class="btn btn-primary active mr-3 pl-5 pr-5" role="button">ยกเลิก</a>
                                <button type="button" class="btn btn-primary ml-3 pl-5 pr-5" onclick="register_seminar('<?=$data['name'];?>')">ลงทะเบียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>
<?php $this->load->view('footer'); ?>
</body>

</html>