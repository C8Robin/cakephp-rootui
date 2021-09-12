<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="alert alert-brand alert-dismissible fade show" role="alert" onclick="this.classList.add('d-none')" style="margin: 10px">
    <?= $message ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span data-feather="x" class="rui-icon rui-icon-stroke-1_5"></span>
    </button>
</div>
