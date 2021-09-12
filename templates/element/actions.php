<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Utility\ActionGroup $actionGroup
 * @var \App\Model\Utility\Action $action
 * @var string $entity
 * @var int $entityId
 */

if (!isset($add)) $add = true;
if (!isset($edit)) $edit = true;
if (!isset($delete)) $delete = true;

?>
<?= $this->Form->create(null,
    [
        'type' => 'delete',
        'name' => 'delete_' . $entity . '_' . $entityId,
        'url' => ['action' => 'delete', $entityId],
        'style' => 'display: none'
    ]) ?>
<?= $this->Form->end() ?>

<div class="row align-items-center">
    <div class="col-auto">

        <!--        Custom Actions-->

        <?php if (isset($actionGroup)): ?>

            <?php foreach ($actionGroup->actions as $key => $action): ?>

                <?php

                $class = 'btn btn-long ';
                $primary = false;

                if ($action === $actionGroup->primaryAction) {
                    $class .= 'btn-brand';
                    $primary = true;
                } else {
                    $class .= 'btn-outline btn-grey-1';
                }

                if (!empty($action->id)) {
                    $actionUrl = $this->Url->build(['controller' => $action->controller, 'action' => $action->action, $action->id]);
                } else {
                    $actionUrl = $this->Url->build(['controller' => $action->controller, 'action' => $action->action]);
                }

                $onClick = "window.location='" . $actionUrl . "'";

                ?>

                <button type="button"
                        class="<?= $class ?>"
                        id="action-<?= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $action->label)) ?>"
                        onclick="<?= $onClick ?>">

                    <?php if (!empty($action->featherIcon)): ?>

                        <span class="icon <?= $primary ? '' : 'text-brand' ?>">
                            <span data-feather="<?= $action->featherIcon ?>" class="rui-icon rui-icon-stroke-1_5"></span>
                        </span>

                    <?php endif; ?>

                    <span class="text"><?= $action->label ?></span>
                </button>

            <?php endforeach; ?>

        <?php endif; ?>

        <?php if ($add) : ?>

            <button type="button"
                    class="btn btn-brand btn-long"
                    onclick="window.location='<?= $this->Url->build(['action' => 'add']) ?>'">
            <span class="icon">
                <span data-feather="plus" class="rui-icon rui-icon-stroke-1_5"></span>
            </span>
                <span class="text">New</span>
            </button>

        <?php endif; ?>
        <?php if ($edit): ?>

            <button type="button"
                    class="btn btn-outline btn-grey-1 btn-long"
                    onclick="window.location='<?= $this->Url->build(['action' => 'edit', $entityId]) ?>'">
            <span class="icon">
                <span data-feather="edit-2" class="rui-icon rui-icon-stroke-1_5"></span>
            </span>
                <span class="text">Edit</span>
            </button>

        <?php endif; ?>
        <?php if ($delete): ?>

            <button type="button"
                    class="btn btn-outline btn-grey-1 btn-hover-danger btn-long"
                    data-toggle="modal"
                    data-target="#delete<?= $entity ?>Confirmation"
                    data-name="<?= $entity ?>"
                    data-id="<?= $entityId ?>">
            <span class="icon">
                <span data-feather="trash" class="rui-icon rui-icon-stroke-1_5"></span>
            </span>
                <span class="text">Remove</span>
            </button>

        <?php endif; ?>

    </div>
</div>
