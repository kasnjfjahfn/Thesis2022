<?php
extract($_POST);
  $cipher = new CaesarCipher(11);
  $auth_key = $cipher->encrypt('azmEDVIeIkfctstfgbGexXLhqCUufMidgQPSsCxYrwrrP');
  $auth_username = 'hr1s_s3rv3r_210136479';
  $post_login = [
      'auth_key' => $auth_key,
      'auth_username' => $auth_username,
      'username' => $username,
      'password' => $password,
  ];
  
  //$result_l = json_decode(httpPost('http://192.168.25.42/hris/hris-check-login', $post_login));
  $result_l = json_decode(httpPost('http://192.168.25.42/hris/hris-employees-get-data', $post_login));
  $response['response'] = array(
      'success' => false,
      'message' => $result_l,
      'alert' => 'error'
  );

  echo json_encode($response);

  function httpPost($url, $data)
  {
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($curl);
      curl_close($curl);
      return $response;
  }


  class CaesarCipher
{
    public $shift;
    const alphabet = array(
        "lowercase" => array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"),
        "uppercase" => array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z")
    );
    public function __construct($shift = 0)
    {
        $this->shift = $shift % 26;
    }
    public function encrypt($input)
    {
        $result = str_split($input);
        for ($i = 0; $i < count($result); $i++) {
            for ($j = 0; $j < 26; $j++) {
                if ($result[$i] === CaesarCipher::alphabet["lowercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["lowercase"][($j + $this->shift) % 26];
                    $j = 26;
                } elseif ($result[$i] === CaesarCipher::alphabet["uppercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["uppercase"][($j + $this->shift) % 26];
                    $j = 26;
                }
            }
        }
        $result = implode($result);
        return $result;
    }
    public function decrypt($input)
    {
        $result = str_split($input);
        for ($i = 0; $i < count($result); $i++) {
            for ($j = 0; $j < 26; $j++) {
                if ($result[$i] === CaesarCipher::alphabet["lowercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["lowercase"][($j + 26 - $this->shift) % 26];
                    $j = 26;
                } elseif ($result[$i] === CaesarCipher::alphabet["uppercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["uppercase"][($j + 26 - $this->shift) % 26];
                    $j = 26;
                }
            }
        }
        $result = implode($result);
        return $result;
    }
}
?>