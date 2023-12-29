<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Sidebar secondary menu-->
    <div id="kt_app_sidebar_menu" data-kt-menu="true" class="
                menu
                menu-sub-indention
                menu-rounded
                menu-column
                menu-active-bg
                menu-title-gray-600
                menu-icon-gray-500
                menu-state-primary
                menu-arrow-gray-500
                fw-semibold
                fs-6
                py-4
                py-lg-6
                ms-lg-n7
                px-2 px-lg-0
        ">
        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-y px-1 px-lg-5" data-kt-sticky="true" data-kt-sticky-name="app-sidebar-menu-sticky" data-kt-sticky-offset="{default: false, xl: '500px'}" data-kt-sticky-release="#kt_app_stats" data-kt-sticky-width="250px" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="20px">
            <!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu content-->
                <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span></div><!--end:Menu content-->
            </div><!--end:Menu item--><!--begin:Menu item-->
            <?php $page = isset($_GET['page']) ? $_GET['page'] : 'index' ?>
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === 'index' ? 'active' : '' ?>" href="?page=index"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Index</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === 'ecommerce' ? 'active' : '' ?>" href="?page=dashboards/ecommerce"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">eCommerce</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === 'projects' ? 'active' : '' ?>" href="?page=dashboards/projects"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/online-courses"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Online Courses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/marketing"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Marketing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/bidding"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Bidding</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/pos"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">POS System</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/call-center"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Call Center</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/logistics"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Logistics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/website-analytics"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Website Analytics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/finance-performance"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Finance Performance</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/store-analytics"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Store Analytics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/social"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Social</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/delivery"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Delivery</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/crypto"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Crypto</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/school"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">School</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === '1' ? 'active' : '' ?>" href="?page=dashboards/podcast"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Podcast</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?php echo $page === 'landing' ? 'active' : '' ?>" href="?page=landing"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Landing</span></a><!--end:Menu link--></div><!--end:Menu item-->
        </div>
    </div>
    <!--end::Sidebar secondary menu-->
</div>
<!--end::Sidebar-->