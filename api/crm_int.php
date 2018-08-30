<?
// https://9jk9urt7qhif.amocrm.ru/api/v2/incoming_leads/form
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE');
//header('Access-Control-Allow-Headers: Content-Type');
//header('Access-Control-Allow-Credentials: true');

if ($_SERVER['CONTENT_TYPE'] ==  'application/json;charset=UTF-8') {
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
}

if ( isset($data['name'],$data['tel']) ) {
    $name = $data['name'];
    $phone = $data['tel'];
    
    if ( $name != '' AND $phone != '' ) {
    $time = time();
    $today = date("d-m-Y H:i");

    $data = array (
      'add' => 
      array (
        0 => 
        array (
          'source_name' => 'Сайт 4-pravila.ru',
          'source_uid' => md5($time),
          'created_at' => $time,
          'incoming_entities' => 
          array (
            'leads' => 
            array (
              0 => 
              array (
                'name' => 'Сделка '.$today,
              ),
            ),
            'contacts' => 
            array (
              0 => 
              array (
                'name' => $name,
                'custom_fields' => 
                array (
                  0 => 
                  array (
                    'id' => '295759',
                    'values' => 
                    array (
                      0 => 
                      array (
                        'value' => $phone,
                        'enum' => "WORK",
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'incoming_lead_info' => 
          array (
            'form_id' => '303418',
            'form_page' => 'Заявка с сайта 4-pravila.ru',
            'ip' => '1.1.1.1',
            'form_name' => 'Обратный звонок',
			'service_code' => '1',
          ),
        ),
      ),
    );
    $link = "https://studia561.amocrm.ru/api/v2/incoming_leads/form?login=studia_56@mail.ru&api_key=d89488e8afc1f9f48bdb54b190eefa17";

    $headers[] = "Accept: application/json";
     //Curl options
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_USERAGENT, "amoCRM-API-client-
    undefined/2.0");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_HEADER,false);
    $out = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($out,TRUE);
    }
}
?>