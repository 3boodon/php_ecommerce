<!--begin::Maps widget 1-->
<div class="card card-flush h-md-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">World Sales</span>
            <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Countries</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>
            <?php include 'partials/menus/_menu-3.php' ?>
            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body d-flex flex-center">
        <!--begin::Map container-->
        <div id="kt_maps_widget_1_map" class="w-100 h-350px"></div>
        <!--end::Map container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Maps widget 1-->