# Бот для VK

Пример простого бота для ВКонтакте на PHP. Обработка событий с использованием Callback API, голосовые сообщения с помощью Яндекс SpeechKit.

Сообщество бота: https://vk.com/botexample. Бот отправляет в ответ на любое сообщение картинку и голосовое сообщение с именем собеседника.

## Подготовка к использованию
Укажите свои данные в [config.php](https://github.com/VKCOM/bot-example-php/blob/master/www/config.php).
Ключ доступа к API и код подтверждения для Callback API Вы можете получить в настройках сообщества. Подробнее о получении ключа доступа для Яндекс SpeechKit можно прочитать [здесь](https://tech.yandex.ru/speechkit/).

## Описание файлов
### [index.php](https://github.com/VKCOM/bot-example-php/blob/master/www/index.php)
Обработка событий Callback API. В нашем примере обрабатываются два события:
- *confirmation* — уведомление для подтверждения адреса сервера;
- *new_message* — уведомление о входящем сообщении. 

Подробную информацию о типах событий и формате уведомлений Вы найдёте [в документации ВК API](https://vk.com/dev/callback_api). 

### [bot/bot.php](https://github.com/VKCOM/bot-example-php/blob/master/www/bot/bot.php)
Отправка сообщений с вложениями. 

### [api/vk_api.php](https://github.com/VKCOM/bot-example-php/blob/master/www/api/vk_api.php)
Функции для работы с методами API ВКонтакте

### [api/yandex_api.php](https://github.com/VKCOM/bot-example-php/blob/master/www/api/yandex_api.php)
Функции для работы с API Яндекс SpeechKit для генерация голосовых сообщений.
