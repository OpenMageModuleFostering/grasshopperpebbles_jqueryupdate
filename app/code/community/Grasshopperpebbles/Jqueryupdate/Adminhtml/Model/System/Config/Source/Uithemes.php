<?php
/**
 * GrasshopperPebbles extension 
 *
 * NOTICE OF LICENSE 
 *
 * This source file is subject to the License
 * that is bundled with this package in the file GP-LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://grasshopperpebbles.com/gp-license.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@grasshopperpebbles.com so we can send you a copy immediately.
 * 
 * @category    Grasshopperpebbles
 * @package     Grasshopperpebbles_Configurableproducts_Utilities
 * @license     http://grasshopperpebbles.com/gp-license.txt, http://devoutgeek.com/gp-license.txt
 * @copyright   Copyright (c) 2014 Grasshopperpebbles, LLC. (http://grasshopperpebbles.com)
 * @author      Les Green <support@grasshopperpebbles.com>
 */
class Grasshopperpebbles_Jqueryupdate_Adminhtml_Model_System_Config_Source_Uithemes
{
    public function toOptionArray()
    {
    	$options = array();
		$options[] = array('value'=>'select', 'label'=>Mage::helper('adminhtml')->__('Please Select..'));
		foreach(glob('js/jquery_update/themes/*', GLOB_ONLYDIR) as $dir) {
		    $dir = str_replace('js/jquery_update/themes/', '', $dir);
			$options[] = array('value'=> $dir, 'label'=>Mage::helper('adminhtml')->__($dir));
		}
		return $options;
       /* return array(
        	array('value'=>'select', 'label'=>Mage::helper('adminhtml')->__('Please Select..')),
            array('value'=>'black-tie', 'label'=>Mage::helper('adminhtml')->__('black-tie')),
            array('value'=>'blitzer', 'label'=>Mage::helper('adminhtml')->__('blitzer')),
            array('value'=>'cupertino', 'label'=>Mage::helper('adminhtml')->__('cupertino')),
            array('value'=>'custom', 'label'=>Mage::helper('adminhtml')->__('custom')),
            array('value'=>'dark-hive', 'label'=>Mage::helper('adminhtml')->__('dard-hive')),
            array('value'=>'dot-luv', 'label'=>Mage::helper('adminhtml')->__('dot-luv')),
            array('value'=>'eggplant', 'label'=>Mage::helper('adminhtml')->__('eggplant')),
            array('value'=>'excite-bike', 'label'=>Mage::helper('adminhtml')->__('excite-bike')),
            array('value'=>'flick', 'label'=>Mage::helper('adminhtml')->__('flick')),
            array('value'=>'hot-sneaks', 'label'=>Mage::helper('adminhtml')->__('hot-sneaks')),
            array('value'=>'humanity', 'label'=>Mage::helper('adminhtml')->__('humanity')),
            array('value'=>'le-frog', 'label'=>Mage::helper('adminhtml')->__('le-frog')),
            array('value'=>'mint-choc', 'label'=>Mage::helper('adminhtml')->__('mint-choc')),
            array('value'=>'overcast', 'label'=>Mage::helper('adminhtml')->__('overcast')),
            array('value'=>'pepper-grinder', 'label'=>Mage::helper('adminhtml')->__('pepper-grinder')),
            array('value'=>'redmond', 'label'=>Mage::helper('adminhtml')->__('redmond')),
            array('value'=>'smoothness', 'label'=>Mage::helper('adminhtml')->__('smoothness')),
            array('value'=>'south-street', 'label'=>Mage::helper('adminhtml')->__('south-street')),
            array('value'=>'start', 'label'=>Mage::helper('adminhtml')->__('start')),
            array('value'=>'sunny', 'label'=>Mage::helper('adminhtml')->__('sunny')),
            array('value'=>'swanky-purse', 'label'=>Mage::helper('adminhtml')->__('swanky-purse')),
            array('value'=>'trontastic', 'label'=>Mage::helper('adminhtml')->__('trontastic')),
            array('value'=>'ui-darkness', 'label'=>Mage::helper('adminhtml')->__('ui-darkness')),
            array('value'=>'ui-lightness', 'label'=>Mage::helper('adminhtml')->__('ui-lightness')),
            array('value'=>'vader', 'label'=>Mage::helper('adminhtml')->__('vader')),
        );*/
    }

}