
<header class="position-relative">
        <div class="position-absolute menu-mobile d-flex justify-content-center align-items-center">
            <i class="fas fa-bars"></i>
        </div>
        <div class="container p-0 shadow_mobile">
            <div class="col-12 pt-2 pb-2 d-block d-lg-none shadow-sm">
                    <div class="d-flex justify-content-center align-items-center">
                        <a class="navbar-brand" href="index"><img src="<?=base_url()?>../assets/images/logo-m.png" alt=""
                                style="height: 120px"></a>

                    </div>

                </div>
                <div class="col-12 pt-2 pb-2 d-none d-lg-block">
                    <nav class="navbar navbar-expand-lg navbar-light nav-logo">
                        <a class="navbar-brand" href="index"><img src="<?=base_url()?>../assets/images/logo.png" alt=""
                                style="width:480px"></a>
                        
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav ml-auto rsubold">
                                <li class="nav-item pl-2 pr-2">
                                    <a class="nav-link" href="<?=base_url()?>contact">ติดต่อเรา</a>
                                </li>
                                <li class="nav-item pl-2 pr-2">
                                    <a class="nav-link" href="<?=base_url()?>link">ลิงค์ที่เกี่ยวข้อง</a>
                                </li>
                                <li class="nav-item pl-2 pr-2">
                                    <a class="nav-link" href="<?=base_url()?>register">สมัครสมาชิก</a>
                                </li>
                                <li class="nav-item pl-2 pr-2">
                                    <a class="nav-link" href="<?=base_url()?>login">เข้าสู่ระบบ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="nav-menu d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="<?=base_url()?>home" class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <h5>หน้าแรก</h5>
                        </a>
                    </div>
                    <div class="col">
                        <h5 class="ml-3 d-flex justify-content-center align-items-center">เกี่ยวกับ <span
                                style="font-size:12px; margin-top: 5px" class="ml-1"><i
                                    class="fas fa-caret-down"></i></span></h5>
                        <ul class="submenu p-0 rsubold">
                            <a href="<?=base_url()?>about_history">
                                <li class="d-flex justify-content-center align-items-center">ประวัติภาควิชา</li>
                            </a>
                            <a href="<?=base_url()?>about_person">
                                <li class="border-top border-bottom d-flex justify-content-center align-items-center">
                                    โครงสร้างบุคลากร</li>
                            </a>
                            <a href="<?=base_url()?>about_old">
                                <li class="d-flex justify-content-center align-items-center">สมาคมศิษย์เก่า</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col active">
                        <a href="<?=base_url()?>department" class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <h5>แผนก</h5>
                        </a>
                    </div>
                    <div class="col">
                        <h5 class="ml-3 d-flex justify-content-center align-items-center">สมัครออนไลน์ <span
                                style="font-size:12px; margin-top: 5px" class="ml-1"><i
                                    class="fas fa-caret-down"></i></span></h5>
                        <ul class="submenu p-0 rsubold">
                            <a href="<?=base_url()?>seminar"><li class="d-flex justify-content-center align-items-center">สมัครสัมมนา</li></a>
                            <a href="<?=base_url()?>elective"><li class="border-top border-bottom d-flex justify-content-center align-items-center">
                                สมัครวิชาเลือก<br />(Elective)</li></a>
                            <li class="d-flex justify-content-center align-items-center">ตรวจสอบสถานะ<br />ลงทะเบียน
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5 class="ml-3 d-flex justify-content-center align-items-center">บทความ <span
                                style="font-size:12px; margin-top: 5px" class="ml-1"><i
                                    class="fas fa-caret-down"></i></span></h5>
                        <ul class="submenu p-0 rsubold">
                            <a href="<?=base_url()?>news"><li class="d-flex justify-content-center align-items-center">ข่าววิชาการ</li></a>
                            <a href="<?=base_url()?>health"><li class="border-top border-bottom d-flex justify-content-center align-items-center">
                                บทความสุขภาพ</li></a>
                            <a href="<?=base_url()?>download"><li class="d-flex justify-content-center align-items-center">ดาวน์โหลดทั่วไป</li></a>
                        </ul>
                    </div>
                    <div class="col">
                        <a href="<?=base_url()?>picture_event" class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <h5>ภาพกิจกรรม</h5>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?=base_url()?>clinic" class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <h5>คลินิกนอกเวลา</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>