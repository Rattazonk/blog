<?php
namespace Rattazonk\Slimblog\ViewHelpers\Widget;

class CategoryTreeViewHelper extends \Rattazonk\Extbasepages\ViewHelpers\Widget\PageTreeViewHelper {
	/**
	 * @var \Rattazonk\Slimblog\ViewHelpers\Widget\Controller\CategoryTreeController
	 * @inject
	 */
	protected $controller;

	/**
	 * @param string $as
	 * @param int $underPid
	 * @param mixed $onlyDoktype
	 * @param mixed $excludeDoktype
	 * @param boolean $renderChildrenOfSkipped
	 * @param boolean $excludeDoktypesOver199
	 * @return string
	 */
	public function render(
		$as, 
		$underPid = NULL, 
		$onlyDoktype = array(48), 
		$excludeDoktype = array(),
		$renderChildrenOfSkipped = FALSE,
		$excludeDoktypesOver199 = TRUE
	) {
		return parent::render(
			$as, 
			$underPid, 
			$onlyDoktype, 
			$excludeDoktype, 
			$renderChildrenOfSkipped, 
			$excludeDoktupesOver199
		);
	}
}
