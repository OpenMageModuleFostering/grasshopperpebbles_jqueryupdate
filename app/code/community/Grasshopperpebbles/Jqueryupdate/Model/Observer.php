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
 * @package     Grasshopperpebbles_Jqueryupdate
 * @license     http://grasshopperpebbles.com/gp-license.txt, http://devoutgeek.com/gp-license.txt
 * @copyright   Copyright (c) 2014 Grasshopperpebbles, LLC. (http://grasshopperpebbles.com)
 * @author      Les Green <support@grasshopperpebbles.com>
 */
class Grasshopperpebbles_Jqueryupdate_Model_Observer
{
    public function addJqueryUI($observer)
    {
        $layout = $observer->getEvent()->getLayout();
	    $update = $layout->getUpdate();
	
		$isAdmin = (Mage::getDesign()->getArea() == 'adminhtml');
	
	    $theme = Mage::getStoreConfig('jqueryupdate/jqueryui_front_settings/jquery_ui_theme_front');
		$ui = ($isAdmin) ? Mage::getStoreConfig('jqueryupdate/jqueryui_back_settings/jquery_ui_back') : Mage::getStoreConfig('jqueryupdate/jqueryui_front_settings/jquery_ui_front');
		if ($theme != 'select') {
		    $xml = "<reference name='head'><action method='addItem'><type>js_css</type><name>jquery_update/themes/$theme/jquery-ui.min.css</name></action></reference>";
		    $update->addUpdate($xml);
		}
		if ($ui) {
			$xml = "<reference name='head'><action method='addItem'><type>js</type><name>jquery_update/jquery-ui.min.js</name></action></reference>";
		    $update->addUpdate($xml);
		}
	    return;
    }
}