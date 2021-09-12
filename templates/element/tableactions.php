<?php
/**
 * @var \App\View\AppView $this
 */

if (!isset($add)) $add = true;
if (!isset($edit)) $edit = true;
if (!isset($delete)) $delete = true;

$this->set('onClick', 'deleteEntities()');
?>
<div class="row align-items-center">
    <div class="col-auto">

        <?php if ($add) : ?>

            <button type="button"
                    id="action-new"
                    class="btn btn-brand btn-long">
            <span class="icon">
                <span data-feather="plus" class="rui-icon rui-icon-stroke-1_5"></span>
            </span>
                <span class="text">New</span>
            </button>

        <?php endif; ?>
        <?php if ($edit): ?>

            <button type="button"
                    class="btn btn-outline btn-grey-1 btn-long"
                    id="action-edit"
                    style="display: none">
            <span class="icon text-brand">
                <span data-feather="edit-2" class="rui-icon rui-icon-stroke-1_5"></span>
            </span>
                <span class="text">Edit</span>
            </button>

        <?php endif; ?>
        <?php if ($delete): ?>

            <button type="button"
                    id="action-delete"
                    class="btn btn-outline btn-grey-1 btn-hover-danger btn-long"
                    itemid=""
                    data-toggle="modal"
                    data-target="#delete<?= $entity ?>Confirmation"
                    data-name="<?= $entity ?>"
                    data-id=""
                    style="display: none">
            <span class="icon text-brand">
                <span data-feather="trash" class="rui-icon rui-icon-stroke-1_5"></span>
            </span>
                <span class="text">Remove</span>
            </button>

        <?php endif; ?>

        <?php if (isset($customActions)): ?>
            <?php foreach ($customActions as $customAction): ?>

                <?php

                $class = 'btn btn-long ';
                $primary = false;

                if (key_exists('primary', $customAction)) {
                    $primary = ($customAction['primary'] == true);
                }

                if ($primary) {
                    $class .= 'btn-brand';
                } else {
                    $class .= 'btn-outline btn-grey-1';
                }

                if (key_exists('action', $customAction)) {
                    $onClick = $customAction['action'];
                } elseif (key_exists('url', $customAction)) {
                    $onClick = "window.location='" . $customAction['url'] . "'";
                }

                ?>

                <button type="button"
                        class="<?= $class ?>"
                        id="action-<?= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $customAction['label'])) ?>"
                        style="<?= $customAction['scope'] == 'row' ? 'display: none' : '' ?>"
                        onclick="<?= $onClick ?>">
                    <span class="icon <?= $primary ? '' : 'text-brand' ?>">
                        <span data-feather="<?= $customAction['icon'] ?? '' ?>" class="rui-icon rui-icon-stroke-1_5"></span>
                    </span>
                    <span class="text"><?= $customAction['label'] ?></span>
                </button>

            <?php endforeach; ?>
        <?php endif; ?>

    </div>
    <div class="col d-flex justify-content-end">

        <button type="button" class="btn btn-outline btn-grey-1 btn-long" id="bCancelSelection" style="display: none">
            <span class="icon text-brand"><span data-feather="x" class="rui-icon rui-icon-stroke-1_5"></span></span>
            <span class="text"><span id="nbrSelected"></span> geselecteerd</span>
        </button>
        &nbsp;
        <div class="btn-group dropdown dropdown-triangle">
            <button class="btn btn-outline btn-grey-1 btn-long dropdown-toggle"
                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon text-brand"><span id="listicon"
                                                        data-feather="align-left" class="rui-icon rui-icon-stroke-1_5"></span>
                    <span id="galleryicon"
                          data-feather="grid" class="rui-icon rui-icon-stroke-1_5" style="display: none"></span></span>
                <span id="listToggleLabel" class="text"></span>
                <span class="icon"><span data-feather="chevron-down"
                                         class="rui-icon rui-icon-stroke-1_5"></span></span>
            </button>

            <ul class="dropdown-menu nav">
                <li><a id="listnav" class="nav-link active" href="#"><span data-feather="align-left"
                                                                           class="rui-icon rui-icon-stroke-1_5"></span><span>Lijst</span><span
                            class="rui-nav-circle"></span></a></li>
                <li><a id="gallerynav" class="nav-link" href="#"><span data-feather="grid"
                                                                       class="rui-icon rui-icon-stroke-1_5"></span><span>Gallerie</span><span
                            class="rui-nav-circle"></span></a></li>
            </ul>
        </div>

    </div>
</div>

<?php
$this->append('beforeDocumentReady');
?>
<!--
    $("#selectionheader").toggle(false);

    var nbrSelected = 0;
    var selectedClass = 'row-selected';

    $("#checkall").click(function () {
                var c = this.checked;
                selectAllRows(c);
            }
    );

    $(".entcheck").change(function () {
                if (!$(this).prop("checked")) {
                    $("#checkall").prop("checked", false);
                    nbrSelected--;
                } else {
                    nbrSelected++;
                }

                toggleActions(nbrSelected);



            }
    );

    $("#bCancelSelection").click(function() {
        selectAllRows(false);
        $("#checkall").prop("checked", false);
    }
    );

    //DOWNLOAD
    $("#action_download").click(function () {
        $("#bulktype").val('download');
        $("#formbulk").submit();
    }
    );

    //EDIT
    $("#action-edit").click(function () {
        $("#bulktype").val('edit');
        $("#formbulk").submit();
    }
    );

    //NEW
    $("#action-new").click(function () {
        window.location.href="<?= $this->Url->build(['action' => 'add']) ?>";
    }
    );

    //PRINT
    $("#action_print").click(function () {
                $("#bulktype").val('print');
                $("#formbulk").submit();
            }
    );

    //SEND
    $("#action_send").click(function () {
                $("#bulktype").val('send');
                $("#formbulk").submit();
            }
    );

    //UPLOAD
    $("#action_upload").click(function () {
                $("#bulktype").val('upload');
                $("#formbulk").submit();
            }
    );

    //VIEW
    $("#action_view").click(function () {
                $("#bulktype").val('view');
                $("#formbulk").submit();
            }
    );

    function selectAllRows(select) {

        $(".entcheck").prop('checked', select);

        if (!select) {
            nbrSelected = 0;
            $("#bCancelSelection").toggle(false);
        } else {
            nbrSelected = $(".table tr").length - 1; //this works only if there is one table with this class. Subtract 1 for the th
            $("#bCancelSelection").toggle(true);
        }

        toggleActions(nbrSelected);

    }

    //have a div with id list and id gallery on your page to show a list or a gallery
    $("#listnav").click(function() {
        //$("#listToggleLabel").text('list');
        $("#listicon").toggle(true);
        $("#list").toggle(true);
        $("#galleryicon").toggle(false);
        $("#gallery").toggle(false);

    }
    );

    $("#gallerynav").click(function() {
        //$("#listToggleLabel").text('gallery');
        $("#listicon").toggle(false);
        $("#list").toggle(false);
        $("#galleryicon").toggle(true);
        $("#gallery").toggle(true);
    }
    );

    function toggleActions(nbrSelected) {
        $("#nbrSelected").text(nbrSelected);

        if (nbrSelected > 0) {
            $("#action-new").toggle(false);
            $("#bCancelSelection").toggle(true);
            $("#action-delete").toggle(true);

            if (nbrSelected > 1) {
                $("#action-edit").toggle(false);
            } else {
                $("#action-edit").toggle(true);
            }

        } else {
            $("#action-new").toggle(true);

            $("#bCancelSelection").toggle(false);
            $("#action-edit").toggle(false);
            $("#action-delete").toggle(false);
        }
    }

    function deleteEntities() {
        $("#bulktype").val('delete');
        $("#formbulk").submit();
    }


    -->
<?php
$this->end();
?>
