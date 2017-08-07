# Бот для VK

Пример простого бота для ВКонтакте на PHP. Обработка событий с использованием Callback API, голосовые сообщения с помощью Яндекс SpeechKit.

Сообщество бота: https://vk.com/botexample. Бот отправляет в ответ на любое сообщение картинку и голосовое сообщение с именем собеседника.

## Подготовка к использованию
Укажите свои данные в https://github.com/VKCOM/bot-example/blob/master/html/config.php.
Ключ доступа к API и код подтверждения для Callback API Вы можете получить в настройках сообщества.

## Обработка событий
https://github.com/VKCOM/bot-example/blob/master/html/index.php — обработка событий Callback API. В нашем примере обрабатываются два события — confirmation и new_message. Подробная информация о типах событий и формате уведомлений в документации ВК API: https://vk.com/dev/callback_api

## Отправка сообщений
https://github.com/VKCOM/bot-example/blob/master/html/bot/bot.php — отправка сообщений с вложениями. Для работы с методами ВК API используются функции https://github.com/VKCOM/bot-example/blob/master/html/api/vk_api.php

