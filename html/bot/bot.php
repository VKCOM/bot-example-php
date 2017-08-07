<?php

function bot_sendMessage($user_id) {
  $users_get_response = vkApi_usersGet($user_id);
  $user = array_pop($users_get_response);
  $msg = "Привет, {$user['first_name']}!";

  $photo = _bot_uploadPhoto($user_id, BOT_IMAGES_DIRECTORY.'/cat.jpeg');

  $voice_message_file_name = yandexApi_getVoice($msg);
  $doc = _bot_uploadVoiceMessage($user_id, $voice_message_file_name);

  $attachments = array(
    'photo'.$photo['owner_id'].'_'.$photo['id'],
    'doc'.$doc['owner_id'].'_'.$doc['id'],
  );

  vkApi_messagesSend($user_id, $msg, $attachments);
}

function _bot_uploadPhoto($user_id, $file_name) {
  $upload_server_response = vkApi_photosGetMessagesUploadServer($user_id);
  $upload_response = vkApi_upload($upload_server_response['upload_url'], $file_name);

  $photo = $upload_response['photo'];
  $server = $upload_response['server'];
  $hash = $upload_response['hash'];

  $save_response = vkApi_photosSaveMessagesPhoto($photo, $server, $hash);
  $photo = array_pop($save_response);

  return $photo;
}

function _bot_uploadVoiceMessage($user_id, $file_name) {
  $upload_server_response = vkApi_docsGetMessagesUploadServer($user_id, 'audio_message');
  $upload_response = vkApi_upload($upload_server_response['upload_url'], $file_name);

  $file = $upload_response['file'];

  $save_response = vkApi_docsSave($file, 'Voice message');
  $doc = array_pop($save_response);

  return $doc;
}
