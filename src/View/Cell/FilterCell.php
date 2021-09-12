<?php
declare(strict_types=1);

namespace App\View\Cell;

use App\Model\Entity\Asset;
use App\Model\Entity\Project;
use App\Model\Table\CapabilitiesTable;
use Cake\Log\Log;
use Cake\View\Cell;

/**
 * Filter cell
 *
 * @property \App\Model\Table\DomainsTable $Domains
 * @property CapabilitiesTable $Capabilities
 * @property \App\Model\Table\ServiceCentersTable $ServiceCenters
 */
class FilterCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = ['showFilterA', 'showFilterB'];

    protected $showFilterA = true;
    protected $showFilterB = true;

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize(): void
    {
        //load the models you will need
        //$this->loadModel('model for filter A');

    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        //1. Get lists of values to show in the filter lists
        if ($this->showFilterA) {
            //find all names of entities, to show in filter list
            //$this->set('filtervalues', $filtervalues);
        }

        //...etc, for all filters

        //2. capture the values to filter on, requested via GET (singleselect or form, multiselect)
        $qfa = $this->request->getQuery('filtera');


        $this->set(compact('qfa')); //and all other filter query params

        //3. If already filtering, set the current filter values, so you can show users what current filters are applied
        if (!empty($qfa)) {
//            $filterAName = $this->YourModels->get($qfa)->name;
//            $this->set('currentFilterAValue', $filterAName);
        }

        //for multiselect filters, something like this
//        if (!empty($qcat)) {
//
//            foreach ($qcat as $catIndex => $catValue) {
//                $categoryNames[$catIndex] = Asset::enum('category')[$catIndex];
//            }
//
//            $this->set('queryCategories', $categoryNames);
//        }

        //...etc for all queryparams, one per filter

    }
}
