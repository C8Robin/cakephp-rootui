<?php
/**
 * @var \App\View\AppView $this
 * @var int $qdom
 * @var int $qcap
 * @var int $qsc
 * @var int[] $qcat
 * @var int[] $qstat
 * @var array $queryDomainParams
 * @var array $queryCapabilityParams
 * @var array $querySCParams
 * @var array $queryCatParams
 * @var array $queryStatParams
 * @var array $queryparams
 * @var \App\Model\Entity\Domain[]|\Cake\Collection\CollectionInterface $domains
 * @var \App\Model\Entity\Capability[]|\Cake\Collection\CollectionInterface $capabilities
 * @var \App\Model\Entity\ServiceCenter[]|\Cake\Collection\CollectionInterface $serviceCenters
 */

use App\Model\Entity\Asset;
use App\Model\Entity\Project;


$queryparams = array();

//1. capture current filter values
if (!empty($qfa)) {
    $queryparams['filtera'] = $qfa;
}

//...etc, for all filters

?>
<div id="tableFilters" class="mb-20">

    <?php if (!empty($filterAValues)) : ?>

        <!--=== Filter A ===-->
        <div class="btn-group dropdown dropdown-triangle">
            <a class="dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>Filter A</span>
                <span data-feather="chevron-down" class="rui-icon rui-icon-stroke-1_5"></span>
            </a>
            <ul class="dropdown-menu nav yourapp-filterlist rui-scrollbar" id="filterafilter">

                <?php foreach ($filterAObjects as $filterAObject) : ?>

                    <?php
                    $queryFilterAParams['filtera'] = $filterAObject->id;

                    //also capture values from other filters for resubmitting
                    if (!empty($queryparams['filterb'])) {
                        $queryFilterAParams['filterb'] = $queryparams['filterb'];
                    }

                    //etc. for all filters
                    ?>

                <?php //add the value to be filtere upon to the list, make it 'current' if it is part of current queryparams ?>

                    <li><a class="nav-link <?= (!empty($qfa) && $qfa == $filterAObject->id) ? 'active' : '' ?>" href="<?= $this->Url->build(['?' => $queryFilterAParams]) ?>"><?= $filterAObject->name ?></a></li>

                <?php endforeach; ?>

            </ul>
        </div>&nbsp;

    <?php endif; ?>


    <?php if (!empty($myMultiSelectFilter)) : ?>

        <!--=== MultiSelect Filter Example===-->
        <div class="btn-group dropdown dropdown-triangle ml-20 dropdown-hover dropdown-keep-open">
            <a class="dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>Multiselect Filter</span>
                <span data-feather="chevron-down" class="rui-icon rui-icon-stroke-1_5"></span>
            </a>

            <?php
            $active = false;
            ?>

            <ul class="dropdown-menu nav text-nowrap" id="multiselectfilterfilter">

                <?php $possibleValuesList = MyObject::enum('fieldWithValues') ?>

                <?= $this->Form->create(new MyObject(), ['type' => 'get']) ?>

                <?php foreach ($possibleValuesList as $key => $label): ?>

                    <?php
                    if (!empty($qmultiselectfilter) && key_exists($key, $qmultiselectfilter)) {
                        $active = true;
                    } else {
                        $active = false;
                    }
                    ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="myobject<?= $key ?>" name="multiselectfilter[<?= $key ?>]" value="1" <?= $active ? 'checked' : '' ?> >
                        <label class="custom-control-label" for="myobject<?= $key ?>"><?= $label ?></label>
                    </div>

                <?php endforeach; ?>

                <?php
                //Add other filters to the submit
                if (!empty($queryparams['filtera'])) {
                    $queryMyObjectParams['filtera'] = $queryparams['filtera'];
                    echo '<input type="hidden" name="filtera" value="' . $queryparams['filtera'] . '">';
                }

                //etc... for all other filters: have a hidden input to re-submit values that are part of the current filter
                //example: caputuring value from another multiselect filter:
                if (!empty($queryparams['msfilterb'])) {

                    foreach ($queryparams['msfilterb'] as $queryMSFilterB => $isSelected) {
                        echo '<input type="hidden" name="msfilterb[' . $queryMSFilterB . ']" value="1">';
                    }
                }

                ?>

                <?= $this->Form->submit('Apply', ['class' => 'btn btn-brand btn-sm mt-10']) ?>
                <?= $this->Form->end(); ?>

            </ul>

        </div>

    <?php endif; ?>

<!--    Currently applied filters-->
    <div id="applied-filters" class="mt-20 ml-20">
        <?php

        $showReset = false;

        if (!empty($currentFilterAValue)) {
            $showReset = true;
            $newQueryParams = $queryparams;
            unset($newQueryParams['filtera']);
            echo '<p>Filter A: <a href="' . $this->Url->build(['?' => $newQueryParams]) . '" title="Remove filter from filter A"><strong>' . $currentFilterAValue . '</strong><span data-feather="x" class="rui-icon rui-icon-stroke-1_5 text-danger"></span></a></p>';
        }

        //...etc for all filters

        //example of multiselect filter:

        if (!empty($queryCategories)) {

            $showReset = true;
            $newQueryParams = $queryparams;
            unset($newQueryParams['multiselectfilterb']);


            echo '<p>Filter B: <a href="' . $this->Url->build(['?' => $newQueryParams]) . '" title="Remove filter from Filter B"><strong>';

            $chosenCategoriesString = '';

            foreach ($queryCategories as $queryCategory) {
                $chosenCategoriesString .= $queryCategory . ' or ';
            }

            $chosenCategoriesString = substr($chosenCategoriesString, 0, strlen($chosenCategoriesString) - strlen(' or '));

            echo $chosenCategoriesString;

            echo '</strong><span data-feather="x" class="rui-icon rui-icon-stroke-1_5 text-danger"></span></a></p>';
        }

        ?>

        <?php if ($showReset): ?>

            <button class="btn btn-secondary btn-sm" onclick="window.location='<?= $this->Url->build(['action' => 'index']) ?>'">Reset</button>

        <?php endif; ?>

    </div>
</div>

