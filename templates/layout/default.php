<?php
/**
 * @var \App\View\AppView $this
 * @var bool $showTableActions
 * @var bool $showActions
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        PLUGIN - <?= $this->fetch('title') ?>
    </title>

    <!--    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">-->
    <!--    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">-->
    <!--    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">-->
    <!--    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">-->
    <!--    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">-->
    <!--    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">-->
    <!--    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">-->
    <!--    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">-->
    <!--    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">-->
    <!--    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">-->
    <!--    <link rel="manifest" href="/favicon/manifest.json">-->
    <!--    <meta name="msapplication-TileColor" content="#ffffff">-->
    <!--    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">-->
    <!--    <meta name="theme-color" content="#ffffff">-->

    <?= $this->Html->meta('icon') ?>

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400%7cOpen+Sans:300,400,600%7cPT+Serif:400i">

    <!-- START: Vendors -->

    <!--    Bootstrap 5, for the xxl styles!-->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

    <!-- Bootstrap Custom -->
    <?= $this->Html->css('bootstrap-custom.css'); ?>

    <!-- OverlayScrollbars -->
    <?= $this->Html->css('OverlayScrollbars.css'); ?>

    <!-- Yaybar -->
    <?= $this->Html->css('yaybar.css'); ?>

    <!-- END: Vendors -->

    <!-- START: Optional Vendors -->
    <!--    Fancybox-->
    <?= $this->Html->css('jquery.fancybox.css'); ?>
    <!-- Swiper -->
    <?= $this->Html->css('swiper-bundle.min.css'); ?>

    <!--    <link rel="stylesheet" href="./assets/vendor/chartist/dist/chartist.css">-->
    <!--    <link rel="stylesheet" href="./assets/vendor/jqvmap/dist/jqvmap.css">-->

    <!-- Highlight -->
    <!-- <link rel="stylesheet" href="./assets/vendor/highlightjs/styles/default.css"> -->

    <!-- Fullcalendar -->
    <!-- <link rel="stylesheet" href="./assets/vendor/fullcalendar/main.min.css"> -->

    <!-- jsTree -->
    <!-- <link rel="stylesheet" href="./assets/vendor/jstree/dist/themes/default/style.min.css"> -->

    <!-- SweetAlert -->
    <!-- <link rel="stylesheet" href="./assets/vendor/sweetalert2/dist/sweetalert2.css"> -->

    <!-- DateTimePicker -->
    <!-- <link rel="stylesheet" href="./assets/vendor/jquery-datetimepicker/jquery.datetimepicker.css"> -->

    <!-- DateRangePicker -->
    <!-- <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css"> -->

    <!-- Ion Rangeslider -->
    <!-- <link rel="stylesheet" href="./assets/vendor/ion-rangeslider/css/ion.rangeSlider.css"> -->

    <!-- EasyMDE -->
    <!-- <link rel="stylesheet" href="./assets/vendor/easymde/dist/easymde.min.css"> -->

    <!-- Pickr -->
    <!-- <link rel="stylesheet" href="./assets/vendor/pickr/dist/themes/classic.min.css"> -->

    <!-- Dropzone -->
    <?= $this->Html->css('dropzone.css'); ?>

    <!-- Selectize -->
    <?= $this->Html->css('selectize.css'); ?>

    <!-- Quill -->
    <!-- <link rel="stylesheet" href="./assets/vendor/quill/dist/quill.snow.css"> -->

    <!-- END: Optional Vendors -->

    <!-- RootUI -->
    <?= $this->Html->css('rootui.css'); ?>
    <?= $this->Html->css('rootui-night.css', ['media' => '(night)', 'class' => 'rui-nightmode-link']); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>

<body data-spy=" scroll" data-target=".rui-page-sidebar" data-offset="140"
      class="rui-no-transition rui-navbar-autohide rui-section-lines">
<div class="rui-page-preloader" role="status">
    <div class="rui-page-preloader-inner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!--
    START: Yaybar
    Additional Classes:
        .rui-yaybar-dark
-->
<?= $this->element('RootUi.nav'); ?>
<!-- END: Yaybar -->

<?= $this->element('RootUi.topnav'); ?>

<div class="rui-page content-wrap">

    <?php
    $titleBlock = $this->fetch('titleblock');
    ?>

    <?php
    if (!isset($showActions)) {
        $showActions = false;
    }

    if (!isset($showTableActions)) {
        $showTableActions = false;
    }
    ?>

    <?php if (!empty($titleBlock) || $showActions || $showTableActions): ?>

        <div class="rui-page-title">
            <div class="container-fluid">

                <?= $titleBlock ?>

                <?php if ($showTableActions): ?>

                    <?= $this->element('RootUi.tableactions'); ?>

                <?php endif; ?>
                <?php if ($showActions): ?>

                    <?= $this->element('RootUi.actions'); ?>

                <?php endif; ?>

            </div>
        </div>

    <?php endif; ?>

    <div class="rui-page-content">

        <div class="container-fluid">

            <?php
            $controller = $this->getRequest()->getParam('controller');
            $action = $this->getRequest()->getParam('action');
            ?>
            <nav aria-label="breadcrumb" class="mb-20">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                    <?php if ($action == 'index'): ?>

                        <li class="breadcrumb-item"><?= $controller ?></li>

                    <?php else: ?>

                        <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => $controller, 'action' => 'index']) ?>"><?= $controller ?></a></li>
                        <li class="breadcrumb-item"><?= strtoupper($action) ?></li>

                    <?php endif; ?>
                </ol>
            </nav>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content'); ?>

        </div>
    </div>

    <!-- START: Footer -->
    <footer class="rui-footer">
        <div class="container-fluid">
            <p class="mb-0">2020 &copy; Compound8</p>
        </div>
    </footer>
    <!-- END: Footer -->

</div>


<!-- START: Popups -->
<!--DELETE modal-->
<?php

if (isset($entity)) {
    echo $this->element('RootUi.deleteModal',
        [
            'entity' => $entity,
            //'onClick' => 'deleteEntities()' //this method is present in the javascript in tableactions.php!
        ]);
}

?>
<!-- Search -->
<div class="rui-popup rui-popup-search container" id="search">
    <div class="rui-search">
        <div class="rui-search-head">

            <?= $this->Form->create(null, ['url' => ['controller' => 'App', 'action' => 'search']]); ?>

            <div class="input-group">
                <input type="search" class="form-control form-control-clean order-12" name="search" id="search"
                       placeholder="Type to search...">
                <div class="input-group-prepend mnl-3 order-1">
                    <button type="button" class="btn btn-clean btn-uniform btn-grey-5 mb-0 mnl-10"><span
                            data-feather="search" class="rui-icon rui-icon-stroke-1_5"></span></button>
                </div>
            </div>

            <?= $this->Form->end() ?>

        </div>
        <div class="rui-search-body">

        </div>
    </div>
</div>

<!-- END: Popups -->

<!-- START: Scripts -->

<!-- START: Vendors -->
<!--Bootstrap 5 for xxl styles-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>-->
<!-- jQuery -->
<?= $this->Html->script('jquery.min.js'); ?>
<!-- Popper -->
<?= $this->Html->script('popper.min.js'); ?>
<!-- Bootstrap -->
<?= $this->Html->script('bootstrap.min.js'); ?>
<!-- Feather Icons -->
<?= $this->Html->script('feather.min.js'); ?>
<!-- OverlayScrollbars -->
<?= $this->Html->script('jquery.overlayScrollbars.min.js'); ?>
<!-- Yaybar -->
<?= $this->Html->script('yaybar.js'); ?>
<!-- OFI -->
<?= $this->Html->script('ofi.min.js'); ?>
<!-- Fancybox -->
<?= $this->Html->script('jquery.fancybox.min.js'); ?>
<!-- Moment -->
<?= $this->Html->script('moment.min.js'); ?>
<!-- END: Vendors -->

<!-- START: Optional Vendors -->
<!--Datatables-->
<?= $this->Html->script('jquery.dataTables.min'); ?>
<!--Dropzone-->
<?= $this->Html->script('dropzone.min.js'); ?>
<!--Selectize-->
<?= $this->Html->script('selectize.min.js'); ?>
<!-- END: Optional Vendors -->

<!-- RootUI -->
<?= $this->Html->script('rootui.js'); ?>
<?= $this->Html->script('rootui-init.js'); ?>
<!-- END: Scripts -->

<!-- Other JS -->
<?= $this->fetch('script') ?>

<script>
    // ========== BEFORE documentready =====================================================================================
    <?= $this->fetch('beforeDocumentReady'); ?>

    // ========== documentready =====================================================================================
    $(document).ready(function () {
        <?= $this->fetch('documentReady') ?>

        //2021-01-18 Temporary fix for SweetAlert from author, should be fixed in an upcoming version of Root UI
        //see https://nk.ticksy.com/ticket/2659466/
        jQuery(window).on('rui-ajax-loaded', () => {
            window.RootUI.initPluginSweetalert();
        });
        // end fix

        $(document.body).on("click", "td[data-href]", function () {
            window.location = this.dataset.href;
        });

        $('#entities').DataTable(
            {
                retrieve: true,
                //set options here
            }
        );

    });
</script>
</body>
</html>
