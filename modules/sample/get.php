<?php
/**
 * modules/sample/get
 *
 */

$filter = $this->getFilterParameters();

$this->getResponse()->setData(array("action" => "get", "filters" => $filter));
