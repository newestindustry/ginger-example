<?php
/**
 * modules/sample/put
 * 
 */

$data = $this->getDataParameters();
$filter = $this->getFilterParameters();

$this->getResponse()->setStatus(200);
$this->getResponse()->setData(array("action" => "put", "filters" => $filter, "data" => $data));
