<!--begin::Search-->
<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
    <!--begin::Search toggle-->
    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px">
            <i class="ki-duotone ki-magnifier fs-1"><span class="path1"></span><span class="path2"></span></i>
        </div>
    </div>
    <!--end::Search toggle-->
    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
            <?php include 'partials/search/partials/_form-dropdown.php' ?>
            <?php include 'partials/search/partials/_results.php' ?>
            <?php include 'partials/search/partials/_main.php' ?>
            <?php include 'partials/search/partials/_empty.php' ?>
        </div>
        <!--end::Wrapper-->
        <?php include 'partials/search/partials/_advanced-options.php' ?>
        <?php include 'partials/search/partials/_preferences.php' ?>
    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->