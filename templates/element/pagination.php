<?php
/**
* @var \App\View\AppView $this
 */
?>
<?php if ($this->Paginator->total() > 1): ?>

    <div class="paginator m-20">
        <ul class="pagination">
            <?= $this->Paginator->first() ?>
            <?= $this->Paginator->prev() ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next() ?>
            <?= $this->Paginator->last() ?>
        </ul>
    </div>

<?php endif; ?>

