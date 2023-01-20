<?php

$feedCount = count($feedbacks);

$feedRange = 5;
$pageCount = ceil($feedCount / $feedRange);

$page = (int) filter_var($_SERVER["QUERY_STRING"], FILTER_SANITIZE_NUMBER_INT);
echo $page;