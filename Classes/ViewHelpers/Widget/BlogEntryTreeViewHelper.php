<?php
namespace Rattazonk\Slimblog\ViewHelpers\Widget;

class BlogEntryTreeViewHelper extends \Rattazonk\Extbasepages\ViewHelpers\Widget\PageTreeViewHelper {
	/**
	 * @var \Rattazonk\Slimblog\ViewHelpers\Widget\Controller\BlogEntryTreeController
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
		$onlyDoktype = array(), 
		$excludeDoktype = array(48),
		$renderChildrenOfSkipped = TRUE,
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
