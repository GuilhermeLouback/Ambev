<?php 
session_start();
requireValidSession();
$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
loadTemplateView('form', ['today'=>$today]);

