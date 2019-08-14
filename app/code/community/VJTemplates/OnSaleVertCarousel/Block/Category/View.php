<?php

class VJTemplates_OnSaleVertCarousel_Block_Category_View extends Mage_Catalog_Block_Category_View
{
	public function getOnSaleProductHtml()
	{
		return $this->getBlockHtml('product_onsalevert');
	}
}
?>