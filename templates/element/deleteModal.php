<?php
/**
 * Stork - Store Assistant (http://www.hetnoteerhuis.nl)
 * Copyright (c) 2018 Compound8 (http://www.compound8.software)
 *
 * Licensed through a subscription model
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright Copyright (c) Compound8 (http://www.compound8.software)
 * @link http://www.stork.com Stork
 * @since 1.0.0
 * @license http://www.compound8.software
 */

/**
 * @var \App\View\AppView $this
 * @var string $entity
 * @var string $onClick
 */
?>

    <div class="modal fade" tabindex="-1" role="dialog" id="delete<?= $entity ?>Confirmation" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h2" id="modalLabel"><?= __('Delete {0}', $entity); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x" class="rui-icon rui-icon-stroke-1_5"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mnb-2"><?= __('Are you sure you want to delete this {0} ?', $entity); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button"
                            class="btn btn-brand"
                            id="bDel"
                            onclick="">Delete</button>
                </div>
            </div>
        </div>
    </div>

<?php
$this->append('beforeDocumentReady');
?>
    // ================= DELETE MODAL for <?= $entity ?> ==================
    $('#delete<?= $entity ?>Confirmation').on('show.bs.modal', function (event) {
    var span = $(event.relatedTarget);
    //var name = span.data('name');
    var entityId = span.data('id');
    var modal = $(this);
    //modal.find('.modal-title').text(name);

<?php if (empty($onClick)) : ?>

    modal.find('#bDel').attr('onclick', 'document.delete_<?= $entity ?>_' + entityId + '.submit();');

<?php else: ?>

    modal.find('#bDel').attr('onclick', '<?= $onClick ?>;');

<?php endif; ?>
    });

<?php
$this->end();
