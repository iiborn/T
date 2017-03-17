<?php
define('API_KEY','352209167:AAHe76dyDb00M0og6hC6PsabhRc92NQPU9I');
//----######------
function ali($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//====================ᵗᶦᵏᵃᵖᵖ======================//
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
//====================ᵗᶦᵏᵃᵖᵖ======================//
$chat_id = $update->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$from_id = $update->message->from->id;
$chat_id = $update->message->chat->id;
$last_name = $update->message->from->last_name;
$frist_name = $update->message->from->first_name;
$username = $update->message->from->username;
$textmessage = isset($update->message->text)?$update->message->text:'';
$reply = $update->message->reply_to_message->forward_from->id;
$sticker = $update->message->sticker;
$text = $update->message->text;
$result = json_decode($message,true);
//====================ᵗᶦᵏᵃᵖᵖ======================//
function SendMessage($ChatId, $TextMsg)
{
 ali('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"MarkDown"
]);
}
function sendAction($chat_id, $action){
MrPHPBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
//====================ᵗᶦᵏᵃᵖᵖ======================//
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text1=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fr&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text2=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ru&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text3=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text4=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=zh&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text5=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ja&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text6=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=de&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text7=$jsurl['text'][0];
//--------
$txt=file_get_contents("text.txt");
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=es&text=$txt";
$jsurl=json_decode(file_get_contents($url),true);
$text8=$jsurl['text'][0];
//====================ᵗᶦᵏᵃᵖᵖ======================//
if ($textmessage == '/start' ) {  
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>"سلام دوست عزیز\n\nبه ربات مای مترجم خوش آمدید\nطرز استفاده با این ربات اینجوریه  که شما  متنی که میخواهید من ترجمه کنم میفرستید و بعد زبان مورد نظر خودتون را انتخاب می کنید\nو بعد من متن ترجمه شده را به شما میفرستم",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"Developer",'url'=>"https://telegram.me/iborn"]
                ]
            ]
        ])
    ])); 
}
elseif(preg_match('/^\/([Oo]therbot)/',$textmessage)){
        ali("forwardmessage", [
                'chat_id' => $chat_id,
                'from_chat_id' => "@tikapp",
                'message_id' => 12
            ]);
        }
elseif ($textmessage == '🇮🇷فارسی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text,
    ])); 
}
elseif ($textmessage == '🇬🇧انگلیسی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text1,
    ])); 
}
elseif ($textmessage == '🇫🇷فرانسوی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text2,
    ])); 
}
elseif ($textmessage == '🇷🇺روسی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text3,
    ])); 
}
elseif ($textmessage == '🇦🇪عربی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text4,
    ])); 
}
elseif ($textmessage == '🇨🇳چینی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text5,
    ])); 
}
elseif ($textmessage == '🇯🇵ژاپنی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text6,
    ])); 
}
elseif ($textmessage == '🇩🇪آلمانی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text7,
    ])); 
}
elseif ($textmessage == '🇪🇸اسپانیایی' ) {  
$txt=file_get_contents("text.txt");
    var_dump(ali('sendMessage',[ 
        'chat_id'=>$update->message->chat->id, 
        'text'=>$text8,
    ])); 
}
//====================ᵗᶦᵏᵃᵖᵖ======================//
else{
file_put_contents('text.txt',$textmessage);
var_dump(ali('sendMessage',[
        'chat_id'=>$update->message->chat->id,
        'reply_to_message_id'=>$message_id,
        'text'=>"دوست داری به چه زبانی برات ترجمه کنمش",
        'parse_mode'=>'MarkDown',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"🇮🇷فارسی"],['text'=>"🇬🇧انگلیسی"]
              ],
              [
              ['text'=>"🇫🇷فرانسوی"],['text'=>"🇷🇺روسی"]
              ],
              [
              ['text'=>"🇦🇪عربی"],['text'=>"🇨🇳چینی"]
              ],
              [
              ['text'=>"🇯🇵ژاپنی"],['text'=>"🇩🇪آلمانی"]
              ],
              [
              ['text'=>"🇪🇸اسپانیایی"]
              ],
              ],
        ])
    ]));  
}
?>
