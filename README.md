### Класс telegram_objects

#### Описание
Входящий массив Update преобразует в классы php

#### Использование
1. С вебхуками:
   ```php
   $Update = new Parser\Update(json_decode(file_get_contents('php://input'), TRUE));
   ```

2. С лонгполлингом:
   ```php
   $updates = $bot->getUpdate(); // получаёте апдейты удобным для вас способом
    foreach ($updates as $inputUpdate){ // может вернуться массив с Updates, поэтому цикл
        $Update = new Parser\Update($inputUpdate);
   }
   ```


#### Примеры использования
```php
if($Update->message){
	$chat = $Update->message->chat;
  $message = $Update->message->text;
  $message_id = $Update->message->message_id;
}
 ```

```php
if($Update->callback_query){
	$data = $Update->callback_query->data;
  $chat = $Update->callback_query->message->chat;
	$data_id = $Update->callback_query->message->message_id;
	$callback_id = $Update->callback_query->id;
}
 ```

```php
if($Update->my_chat_member){
  //$Update->my_chat_member->new_chat_member->user is object of User
}
 ```
