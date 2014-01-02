<?php
/**
 * modules/sample/post
 *
 */

$data = $this->getDataParameters();

$this->getResponse()->setStatus(201);
$this->getResponse()->setData(array("action" => "post", "data" => $data));
