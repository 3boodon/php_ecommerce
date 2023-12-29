<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <?php include 'partials/_header.php' ?>
        <!--begin::Wrapper-->
        <div class="app-wrapper  d-flex " id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container  container-fluid d-flex ">
                <?php include 'partials/_sidebar.php' ?>
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <?php include 'partials/_toolbar.php' ?>
                        <?php $page = isset($_GET['page']) ? $_GET['page'] : 'index' ?>

                        <?php
                        if ($page === 'index') {
                            include 'partials/_content.php';
                        } else if ($page === 'landing') {
                            include __DIR__ . '/../pages/ecommerce_dashboard.php';
                        } else {
                            include 'partials/_content.php';
                        }

                        ?>
                    </div>
                    <!--end::Content wrapper-->
                    <?php include 'partials/_footer.php' ?>
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<?php include 'partials/_drawers.php' ?>