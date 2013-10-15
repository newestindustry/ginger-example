<?php
/**
 * modules/sample/delete
 * 
 */

$filter = $this->getFilterParameters();

$this->getResponse()->setStatus(204);
$this->getResponse()->setData(array("action" => "delete", "filter" => $filter));
