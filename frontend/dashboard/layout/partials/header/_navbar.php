<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Action-->
    <div class="app-navbar-item">
        <a href="#" class="btn btn-flex flex-center btn-sm fw-bold btn-dark py-3 w-40px h-40px w-md-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
            <i class="ki-duotone ki-verify d-inline-flex d-md-none fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span></i> <span class="d-none d-md-inline ps-lg-1">Upgrade Plan</span>
        </a>
    </div>
    <!--end::Action-->
    <!--begin::Search-->
    <div class="app-navbar-item align-items-stretch ms-1 ms-lg-4">
        <?php include 'partials/search/_dropdown.php' ?>
    </div>
    <!--end::Search-->
    <!--begin::Activities-->
    <div class="app-navbar-item ms-1 ms-lg-4">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px" id="kt_activities_toggle">
            <i class="ki-duotone ki-abstract-42 fs-1"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->
    <!--begin::Notifications-->
    <div class="app-navbar-item ms-1 ms-lg-4">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-calendar fs-1"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <?php include 'partials/menus/_notifications-menu.php' ?>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-lg-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img class="symbol symbol-35px symbol-md-40px" src="assets/media/avatars/300-5.jpg" alt="user" />
        </div>
        <?php include 'partials/menus/_user-account-menu.php' ?>
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Sidebar menu toggle-->
    <div class="app-navbar-item d-flex align-items-center d-lg-none ms-1 me-n2">
        <a href="#" class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
            <i class="ki-duotone ki-burger-menu-2 fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i> </a>
    </div>
    <!--end::Sidebar menu toggle-->
</div>
<!--end::Navbar-->