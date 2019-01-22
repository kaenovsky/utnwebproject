<?php

$activeEventsQuery = $conn->query("SELECT count(*) FROM eventos WHERE estado = 'activo'");
$activeEvents = $activeEventsQuery->fetch_array();

$pastEventsQuery = $conn->query("SELECT count(*) FROM eventos WHERE estado = 'finalizado'");
$pastEvents = $pastEventsQuery->fetch_array();

$usersTotalQuery = $conn->query("SELECT count(*) FROM auth_users WHERE active = '1'");
$usersTotal = $usersTotalQuery->fetch_array();

$usersInactiveTotalQuery = $conn->query("SELECT count(*) FROM auth_users WHERE active = '0'");
$usersInactiveTotal = $usersInactiveTotalQuery->fetch_array();

$eventsTodayQuery = $conn->query("SELECT count(*) FROM eventos WHERE fecha LIKE '%$today%'");
$eventsToday = $eventsTodayQuery->fetch_array();

$salesTodayQuery = $conn->query("SELECT SUM(pagado) AS totalsum FROM eventos_codigos WHERE estado = 'pagado' AND fecha_creacion LIKE '%$today%'");
$salesToday = $salesTodayQuery->fetch_array();

$ticketsTodayQuery = $conn->query("SELECT SUM(cantidad) AS totalsum FROM eventos_codigos WHERE estado = 'pagado' AND fecha_creacion LIKE '%$today%'");
$ticketsToday = $ticketsTodayQuery->fetch_array();

$ticketsYesterdayQuery = $conn->query("SELECT SUM(cantidad) AS totalsum FROM eventos_codigos WHERE estado = 'pagado' AND fecha_creacion LIKE '%$yesterday%'");
$ticketsYesterday = $ticketsYesterdayQuery->fetch_array();
