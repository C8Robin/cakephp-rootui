<?php
/**
 * @var \App\View\AppView $this
 * @var mixed $currentView
 * @var \App\Model\Entity\Project $newProject
 */

?>

<div class="yaybar yay-hide-to-small yay-shrink yay-gestures rui-yaybar">
    <div class="yay-wrap-menu">
        <div class="yaybar-wrap">
            <ul>
                <?= $this->fetch('nav');?>
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



