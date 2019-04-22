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
                <h1 class="title_text pl-3 d-inline-block">ดาวน์โหลดทั่วไป</h1>
            </div>
        </div>
    </div>


    <section class="pt-3 pb-5 gray_background">
        <div class="container">
            <div class="row">
                <table class="table download_table">
                    <thead>
                        <tr>
                            <th class="text-center"><div class="d-none d-lg-block">ลำดับที่</div></th>
                            <th>หัวข้อเอกสาร</th>
                            <th class="d-none d-lg-block">รายละเอียด</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach ($list as $key => $value): ?>
                        <tr class="mt-lg-5 mt-2">
                                <td  width="10%" scope="row" class="text-center"><div class="pt-4 pb-4 d-flex justify-content-center align-items-center"><?= $i ?></div></td>
                                <td width="20%"><div class="pt-4 pb-4 d-flex align-items-center"><?=$value['name']?></div></td>
                                <td width="50%" class="d-none d-lg-table-cell"><div class="pt-4 pb-4 d-flex align-items-center"><p style="width: 400px; overflow: hidden;"><?=$value['detail']?></div></td></p>
                                <td width="10%" class="text-center"><div class="pt-4 pb-4 d-flex justify-content-center align-items-center"><?=$value['date_update']?></div></td>
                                <td width="10%" class="text-center"><div class="pt-4 pb-4 d-flex justify-content-center align-items-center download_border"><a href="<?=base_url().'../'.$value['file']?>" download><i class="fas fa-download"></i></a></div></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <?php $this->load->view('footer'); ?>
</body>

</html>