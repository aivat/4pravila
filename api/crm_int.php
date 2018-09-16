<?
// https://9jk9urt7qhif.amocrm.ru/api/v2/incoming_leads/form
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE');
//header('Access-Control-Allow-Headers: Content-Type');
//header('Access-Control-Allow-Credentials: true');

if ($_SERVER['CONTENT_TYPE'] ==  'application/json;charset=UTF-8') {
    $postData = file_get_contents('php://input');
    $dataFromSite = json_decode($postData, true);
}
require_once 'sms.ru.php';

if ( isset($dataFromSite['name'],$dataFromSite['tel']) ) {
    $nameFromSite = $dataFromSite['name'];
    $phoneFromSite = $dataFromSite['tel'];
    
    if ( $nameFromSite != '' AND $phoneFromSite != '' ) {
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
                'name' => $nameFromSite,
                'custom_fields' => 
                array (
                  0 => 
                  array (
                    'id' => '295759',
                    'values' => 
                    array (
                      0 => 
                      array (
                        'value' => $phoneFromSite,
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
	if ( $nameFromSite != '' AND $phoneFromSite != '' ) {
		$smsru = new SMSRU('99790BC6-7F4A-5984-8FAA-655ADA89C123'); // Ваш уникальный программный ключ, который можно получить на главной странице

		$data = new stdClass();
		/* Если текст на номера один */
		$data->to = '79878700399,79123445207'; // Номера для отправки сообщения (От 1 до 100 шт за раз). Вторым указан городской номер, по которому будет возвращена ошибка
		$data->text = 'Имя: '.$nameFromSite.', телефон: '.$phoneFromSite; // Текст сообщения
		/* Если текст разный. В этом случае $data->to и $data->text обрабатываться не будут и их можно убрать из кода */
//		$data->multi = array( // От 1 до 100 штук за раз
//			"79068309012" => "Hello World", // 1 номер
//			"79123445207" => "Hello World 2", // 2 номер (указан городской номер, будет возвращена ошибка)
//		);
		// $data->from = ''; // Если у вас уже одобрен буквенный отправитель, его можно указать здесь, в противном случае будет использоваться ваш отправитель по умолчанию
		// $data->time = time() + 7*60*60; // Отложить отправку на 7 часов
		// $data->translit = 1; // Перевести все русские символы в латиницу (позволяет сэкономить на длине СМС)
		// $data->test = 1; // Позволяет выполнить запрос в тестовом режиме без реальной отправки сообщения
		// $data->partner_id = '232901'; // Можно указать ваш ID партнера, если вы интегрируете код в чужую систему
		$request = $smsru->send($data); // Отправка сообщений и возврат данных в переменную

		if ($request->status == "OK") { // Запрос выполнен успешно
			foreach ($request->sms as $phone => $sms) { // Перебираем массив отправленных сообщений
				if ($sms->status == "OK") {
					echo "Сообщение на номер $phone отправлено успешно. ";
					echo "ID сообщения: $sms->sms_id. ";
					echo "";
				} else {
					echo "Сообщение на номер $phone не отправлено. ";
					echo "Код ошибки: $sms->status_code. ";
					echo "Текст ошибки: $sms->status_text. ";
					echo "";
				}
			}
			echo "Ваш новый баланс: $request->balance";
		} else {
			echo "Ошибка при выполнении запроса. ";
			echo "Код ошибки: $request->status_code. ";
			echo "Текст ошибки: $request->status_text. "; 
		}
	}
}
?>