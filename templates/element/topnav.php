<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var string $currentView
 * @var string $username
 */
?>
<!--
    START: Navbar

    Additional Classes:
        .rui-navbar-sticky
        .rui-navbar-autohide
        .rui-navbar-dark
-->
<nav class="rui-navbar rui-navbar-top rui-navbar-sticky">
    <div class="rui-navbar-brand">

        <a href="<?= \Cake\Routing\Router::url('/') ?>" class="rui-navbar-logo">
            <img src="<?= $this->Url->image('logo.jpg') ?>" data-src-night="<?= $this->Url->image('logo.jpg') ?>"
                 data-src-day="<?= $this->Url->image('logo.jpg') ?>">
        </a>
        <button class="yay-toggle rui-yaybar-toggle" type="button">
            <span></span>
        </button>
    </div>
    <div class="container-fluid">
        <div class="rui-navbar-content">
            <ul class="nav">
                <li class="nav-item">
                    <!--
                    <h1 style="margin-top: 0; margin-bottom: 0;"></h1>
                    -->
                    <h1 class="mt-0 mb-0"><?= $this->fetch('title') ?></h1>
                </li>
            </ul>
            <ul class="nav rui-navbar-right">
                <li class="nav-item">
                    <a class="d-flex" data-fancybox data-touch="false" data-close-existing="true" data-src="#search"
                       data-auto-focus="true" href="javascript:;">
                        <span class="btn btn-custom-round">
                            <span data-feather="search" class="rui-icon rui-icon-stroke-1_5"></span>
                        </span>
                    </a>
                </li>
                <!--
                <li class="dropdown dropdown-hover dropdown-triangle dropdown-keep-open">
                    <a class="dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       data-offset="0,12">
                        <span class="btn btn-custom-round">
                            <span data-feather="bell" class="rui-icon rui-icon-stroke-1_5 mr-0"></span>
                            <span class="badge badge-circle badge-brand">3</span>
                        </span>
                    </a>

                    <ul class="nav dropdown-menu rui-navbar-dropdown-notice">
                        <li class="rui-navbar-dropdown-title mb-10">
                            <div class="d-flex align-items-center">
                                <h2 class="h4 mb-0 mr-auto">Notifications</h2>
                                <a class="btn btn-custom-round" href="profile.html"><span data-feather="link-2"
                                                                                          class="rui-icon rui-icon-stroke-1_5"></span></a>
                            </div>
                        </li>
                        <li>
                            <div class="media media-success media-filled mnl-30 mnr-30">
                                <a href="profile.html" class="media-link">
                                    <span class="media-img"><img src="<?= $this->Url->image('incognito.jpg') ?>" alt=""></span>
                                    <span class="media-body">
                                        <span class="media-title">Amber Smith</span>
                                        <small class="media-subtitle">Bring abundantly creature great...</small>
                                    </span>
                                </a>
                                <a href="#" class="media-icon"><span data-feather="x"
                                                                     class="rui-icon rui-icon-stroke-1_5"></span></a>
                            </div>
                        </li>
                    </ul>

                </li>
                -->
                <li class="dropdown dropdown-hover dropdown-triangle dropdown-keep-open">
                    <a class="dropdown-item rui-navbar-avatar mnr-6" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <?= $this->Html->image('incognito.jpg'); ?>
                    </a>
                    <ul class="nav dropdown-menu">
                        <li>
                            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>" class="nav-link">
                                <span data-feather="log-out" class="rui-icon rui-icon-stroke-1_5"></span>
                                <span>Log out</span>
                                <span class="rui-nav-circle"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--
                <li class="dropdown dropdown-hover dropdown-triangle dropdown-keep-open">
                    <a class="dropdown-item mnr-5" href="#" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" data-offset="0,12">
                        <span class="btn btn-custom-round">
                            <span data-feather="more-vertical" class="rui-icon rui-icon-stroke-1_5"></span>
                        </span>
                    </a>
                    <ul class="nav dropdown-menu">
                        <li>
                            <div class="custom-control custom-switch dropdown-item-switch">
                                <input type="checkbox" class="custom-control-input rui-nightmode-toggle"
                                       id="toggleNightMode">
                                <label class="dropdown-item custom-control-label" for="toggleNightMode">
                                    <span data-feather="moon" class="rui-icon rui-icon-stroke-1_5"></span>
                                    <span>Night Mode</span>
                                    <span class="rui-dropdown-circle"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-switch dropdown-item-switch">
                                <input type="checkbox" class="custom-control-input rui-spotlightmode-toggle"
                                       id="toggleSpotlightMode">
                                <label class="dropdown-item custom-control-label" for="toggleSpotlightMode">
                                    <span data-feather="square" class="rui-icon rui-icon-stroke-1_5"></span>
                                    <span>Spotlight Mode</span>
                                    <span class="rui-dropdown-circle"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-switch dropdown-item-switch">
                                <input type="checkbox" class="custom-control-input rui-sectionLines-toggle"
                                       id="toggleSectionLines">
                                <label class="dropdown-item custom-control-label" for="toggleSectionLines">
                                    <span data-feather="layout" class="rui-icon rui-icon-stroke-1_5"></span>
                                    <span>Show section lines</span>
                                    <span class="rui-dropdown-circle"></span>
                                </label>
                            </div>
                        </li>
                        <li class="dropdown-menu-label">Sidebar</li>
                        <li>
                            <div class="custom-control custom-switch dropdown-item-switch">
                                <input type="checkbox" class="custom-control-input rui-darkSidebar-toggle"
                                       id="toggleDarkSidebar">
                                <label class="dropdown-item custom-control-label" for="toggleDarkSidebar">
                                    <span data-feather="sidebar" class="rui-icon rui-icon-stroke-1_5"></span>
                                    <span>Dark</span>
                                    <span class="rui-dropdown-circle"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-switch dropdown-item-switch">
                                <input type="checkbox" class="custom-control-input rui-staticSidebar-toggle"
                                       id="toggleStaticSidebar">
                                <label class="dropdown-item custom-control-label" for="toggleStaticSidebar">
                                    <span data-feather="sidebar" class="rui-icon rui-icon-stroke-1_5"></span>
                                    <span>Static</span>
                                    <span class="rui-dropdown-circle"></span>
                                </label>
                            </div>
                        </li>
                        <li class="dropdown-menu-label">Navbar</li>
                        <li>
                            <div class="custom-control custom-switch dropdown-item-switch">
                                <input type="checkbox" class="custom-control-input rui-darkNavbar-toggle"
                                       id="toggleDarkNavbar">
                                <label class="dropdown-item custom-control-label" for="toggleDarkNavbar">
                                    <span data-feather="menu" class="rui-icon rui-icon-stroke-1_5"></span>
                                    <span>Dark</span>
                                    <span class="rui-dropdown-circle"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
    </div>
</nav>
<!-- END: Navbar -->

<!-- START: Navbar Mobile -->
<div class="rui-navbar rui-navbar-mobile">
    <div class="rui-navbar-head">
        <button class="rui-yaybar-toggle rui-yaybar-toggle-inverse yay-toggle" type="button"
                aria-label="Toggle side navigation">
            <span></span>
        </button>
        <a class="rui-navbar-logo mr-auto" href="/">
            <img src="<?= $this->Url->image('logo.jpg') ?>" data-src-night="<?= $this->Url->image('logo.jpg') ?>"
                 data-src-day="<?= $this->Url->image('logo.jpg') ?>" alt="" width="45">
        </a>
        <div class="dropdown dropdown-triangle">
            <a class="dropdown-item rui-navbar-avatar" href="#" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <img src="<?= $this->Url->image('incognito.jpg') ?>" alt="">
            </a>
            <ul class="dropdown-menu nav">
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>" class="nav-link">
                        <span data-feather="log-out" class="rui-icon rui-icon-stroke-1_5"></span>
                        <span>Log out</span>
                        <span class="rui-nav-circle"></span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler rui-navbar-toggle" type="button" data-toggle="collapse"
                data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false"
                aria-label="Toggle navigation">
            <span></span>
        </button>
    </div>
    <div class="collapse navbar-collapse rui-navbar-collapse" id="navbarMobile">
        <div class="rui-navbar-content">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link d-flex" data-fancybox data-touch="false" data-close-existing="true"
                       data-src="#search" data-auto-focus="true" href="javascript:;">
                        <span data-feather="search" class="rui-icon rui-icon-stroke-1_5"></span>
                        <span>Search</span>
                        <span class="rui-nav-circle"></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="rui-navbar-bg"></div>
<!-- END: Navbar Mobile -->

