 <?php
  

function send_LINE($msg){
 $access_token = 'uPPbuNIIATryuuhKwEC4kRRHqdNd4+73PnMi+7DQ383G4NMkI6S7a+li5SCoqZJGbKsl3sxQ6J556VApXNkprhB4dKVg1rR6UcHZzSTFyte5h0qyqFAb9zISLsL5LEw+DS/KlnXV/IG5UDYV3g6qjQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'bce117e84ff9f7e593d428b1ffac7aa4',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
