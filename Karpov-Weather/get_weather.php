<?php
// Ваш API-ключ 
$apiKey = "7d62bdd64a1303137834f185e4cf51d9";

// Получаем ID города из запроса
$cityId = $_GET['id'];

// Формируем URL для запроса к API OpenWeatherMap 
$url = "http://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&lang=ru&appid={$apiKey}&lang=ru";

// Выполняем запрос к API 
$response = file_get_contents($url);

// Проверяем на ошибки
if ($response === FALSE) {
    echo json_encode(['error' => 'Ошибка при получении данных']);
    exit;
}

// Выводим полученные данные 
echo $response;
?>