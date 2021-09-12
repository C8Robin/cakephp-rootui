<?php
/**
 * @var \App\View\AppView $this
 * @var mixed $currentView
 * @var \App\Model\Entity\Project $newProject
 */

//$newProject = new \App\Model\Entity\Project();
?>

<div class="yaybar yay-hide-to-small yay-shrink yay-gestures rui-yaybar">
    <div class="yay-wrap-menu">
        <div class="yaybar-wrap">
            <ul>
                <li class="yay-label">Get Started</li>

                <li class="<?= strcasecmp($currentView, 'DASHBOARD') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'dashboard', 'action' => 'income']) ?>">
                        <span class="yay-icon"><span data-feather="pie-chart"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Dashboard</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="<?= strcasecmp($currentView, 'PRODUCTS') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'dashboard']) ?>">
                        <span class="yay-icon"><span data-feather="book"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Products</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>
<!--
                <li class="<?= strcasecmp($currentView, 'ORDERS') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'orders', 'action' => 'index']) ?>">
                        <span class="yay-icon"><span data-feather="shopping-cart"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Orders</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>
-->
                <li class="<?= strcasecmp($currentView, 'REORDERS') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'reorders', 'action' => 'index']) ?>">
                        <span class="yay-icon"><span data-feather="package"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Stock</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="<?= strcasecmp($currentView, 'EXPENSES') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'expenses', 'action' => 'index']) ?>">
                        <span class="yay-icon"><span data-feather="dollar-sign"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Expenses</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="yay-label">Manage</li>

                <li class="<?= strcasecmp($currentView, 'IMPORT') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'import']) ?>">
                        <span class="yay-icon"><span data-feather="download"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Import</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="<?= strcasecmp($currentView, 'SUPPLIERS') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'suppliers', 'action' => 'index']) ?>">
                        <span class="yay-icon"><span data-feather="truck"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Suppliers</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="<?= strcasecmp($currentView, 'BRANDS') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'brands', 'action' => 'index']) ?>">
                        <span class="yay-icon"><span data-feather="camera"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Brands</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="<?= strcasecmp($currentView, 'CATALOG') == 0 ? 'yay-item-active' : '' ?>">
                    <a href="<?= $this->Url->build(['controller' => 'catalog', 'action' => 'index']) ?>">
                        <span class="yay-icon"><span data-feather="book-open"
                                                     class="rui-icon rui-icon-stroke-1_5"></span></span>
                        <span>Catalog</span>
                        <span class="rui-yaybar-circle"></span>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="yay-sub-toggle">

                        <!--                        <span class="yay-icon"><span data-feather="layers" class="rui-icon rui-icon-stroke-1_5"></span></span>-->
                        <span>Favourites</span>
                        <!--                        <span class="rui-yaybar-circle"></span>-->

                        <span class="yay-icon-collapse"><span data-feather="chevron-right"
                                                              class="rui-icon rui-icon-collapse rui-icon-stroke-1_5"></span></span>
                    </a>

                    <ul class="yay-submenu dropdown-triangle">
                        <li>
                            <a href="#">
                                Products
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="yay-sub-toggle">

                        <!--                        <span class="yay-icon"><span data-feather="layers" class="rui-icon rui-icon-stroke-1_5"></span></span>-->
                        <span>Recent Orders</span>
                        <!--                        <span class="rui-yaybar-circle"></span>-->

                        <span class="yay-icon-collapse"><span data-feather="chevron-right"
                                                              class="rui-icon rui-icon-collapse rui-icon-stroke-1_5"></span></span>
                    </a>

                </li>
            </ul>
        </div>
    </div>
    <div class="rui-yaybar-icons invisible">
        <div class="row no-gutters justify-content-around">
            <div class="col-auto">
                <a class="btn btn-custom-round" href="#"><span data-feather="settings"
                                                               class="rui-icon"></span rui-icon-stroke-1_5></a>
            </div>
            <div class="col-auto">
                <a class="btn btn-custom-round" href="#"><span data-feather="bell"
                                                               class="rui-icon"></span rui-icon-stroke-1_5></a>
            </div>
            <div class="col-auto d-flex">
                <div class="dropdown dropdown-hover dropdown-triangle dropdown-keep-open dropup">
                    <a class="btn btn-custom-round dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" data-offset="-30">
                        <span data-feather="plus-circle" class="rui-icon rui-icon-stroke-1_5"></span>
                    </a>
                    <ul class="dropdown-menu nav">
                        <li>
                            <a href="#" class="nav-link"><span data-feather="plus-circle"
                                                               class="rui-icon rui-icon-stroke-1_5"></span>
                                <span>Create new Post</span>
                                <span class="rui-nav-circle"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto">
                <a class="btn btn-custom-round" href="#"><span data-feather="clock"
                                                               class="rui-icon rui-icon-stroke-1_5"></span></a>
            </div>
            <div class="col-auto">
                <a class="btn btn-custom-round" href="#"><span data-feather="heart"
                                                               class="rui-icon rui-icon-stroke-1_5"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="rui-yaybar-bg"></div>



