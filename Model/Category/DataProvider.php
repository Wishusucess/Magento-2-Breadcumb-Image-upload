<?php
/*
 * @Author      Hemant Singh
 * @Developer   Hemant Singh
 * @Module      Wishusucess_CategoryBreadcrumbImage
 * @copyright   Copyright (c) Wishusucess (http://www.wishusucess.com/)
 */
namespace Wishusucess\CategoryBreadcrumbImage\Model\Category;
 
class DataProvider extends \Magento\Catalog\Model\Category\DataProvider
{
 
	protected function getFieldsMap()
	{
    	$fields = parent::getFieldsMap();
        $fields['content'][] = 'breadcrumb_image'; // breadcrumb image field
    	
    	return $fields;
	}
}