<?php
@session_start();

?>
<style>
    .nav-custom-color {
        color: #0A8142 !important;
    }
</style>
<div class="d-flex bg-white justify-content-between text-black px-4 my-2 fs-4">
    <div class="">
        <ul class="nav text-black align-items-center">
            <li class="nav-item">
                <img src="assets/images/nav-logo.png" class="w-50px ">
            </li>
            <?php if (@$_SESSION['is_admin'] == false) { ?>
                <li class="nav-item">
                    <a class="nav-link  nav-custom-color " href="./service-list/">ข้อมูลบริการ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  nav-custom-color " href="./customer-list/">ข้อมูลลูกค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  nav-custom-color " href="./customer-pet/">ข้อมูลสัตว์เลี้ยง</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-custom-color" href="./treatment-list/">การรักษา </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  nav-custom-color" href="./appointment-list/">นัดหมาย</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link  nav-custom-color" href="./doctor/">จัดการข้อมูลหมอ</a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class=" d-flex justify-content-end">
        <div class="d-flex gap-3">
            <div class="d-flex cursor-pointer gap-2 align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div><i class="bi bi-person-circle fs-2 text-black"></i></div>
                <div id="txt_user_email">สวัสดี : <?php echo @$_SESSION['fullname']; ?> </div>
            </div>
            <div class="dropdown-menu dropdown-menu-end w-250px">
                <?php if (@$_SESSION['is_admin'] == false) { ?>
                    <a class="dropdown-item fs-3" href="./logout">
                        <span><i class="bi bi-box-arrow-left text-dark "></i></span>
                        <span class="mx-2 fw-bolder">ออกจากระบบ</span>
                    </a>
                <?php } else { ?>
                    <a class="dropdown-item fs-3" href="./logout-admin">
                        <span><i class="bi bi-box-arrow-left text-dark "></i></span>
                        <span class="mx-2 fw-bolder">ออกจากระบบ</span>
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>
</div>