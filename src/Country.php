<?php

require_once __DIR__ . '/db.php';

function getAllCountries($pdo) {
    $stmt = $pdo->query("SELECT * FROM countries ORDER BY name");
    return $stmt->fetchAll();
}


function getCountryById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM countries WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}


function addCountry($pdo, $name, $population, $languages) {
    $stmt = $pdo->prepare("INSERT INTO countries (name, population, languages) VALUES (?, ?, ?)");
    return $stmt->execute([$name, $population, $languages]);
}


function updateCountry($pdo, $id, $name, $population, $languages) {
    $stmt = $pdo->prepare("UPDATE countries SET name = ?, population = ?, languages = ? WHERE id = ?");
    return $stmt->execute([$name, $population, $languages, $id]);
}


function deleteCountry($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM countries WHERE id = ?");
    return $stmt->execute([$id]);
}
