<?php

class Loewy_Canonical_Block_Cms_Page extends Mage_Cms_Block_Page
{
	/**
	 * Add page canonical link.
	 *
	 * @return Loewy_Canonical_Block_Cms_Page
	 */
	protected function _prepareLayout()
	{
		if (!$this->getSkipCanonical())
		{
			$page = $this->getPage();
			$head = $this->getLayout()->getBlock('head');
			if ($head)
			{
				$head->addLinkRel('canonical', Mage::helper('cms/page')->getPageUrl($page->getId()));
			}
		}
		
		return parent::_prepareLayout();
	}
}