<?php
/*refresh token */

include 'taikhoan.php'; 

$bot = new bot();
$bot->login($pass2,$email2);
print $bot->setToken();
class bot{



private function _req($url,$type=null,$fields=null){
   $opts = array(
            19913 => 1,
            10002 => $url,
            10018 => 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10',
      CURLOPT_SSL_VERIFYPEER => 0
            );
   $ch=curl_init();
   if($type){
       if($type == 1){
              $opts[10082] = 'cookie1.txt';
              }
       if($type == 3){
              $opts[42] = 1;
             }
       $opts[10031] = 'cookie1.txt';
    }
  if($fields){
      $opts[47] = true;
      $opts[10015] = $fields;
      }
   curl_setopt_array($ch,$opts);
   $result = curl_exec($ch);
   //print_r(curl_getinfo($ch));
   curl_close($ch);
   return $result;
   
  }


public function setToken(){

$url = $this->_req("https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424", 3);
$dau1 = strstr($url,'required="1" name="q" value="');
$cuoi1 = strstr($url,'" aria-required="true" />');
$nd2 = str_replace($url,'',$dau1);
$nd2 = str_replace('required="1" name="q" value="','',$nd2);
$nd2 = str_replace('" aria-required="true" />','',$nd2);
$puarudz= explode('<input type="hidden" autocomplete="off" id="hidden_version_input" name="version" value="v2.6" />',$nd2);
$accessToken = $puarudz[0];
   if (strpos($accessToken,'"')) {
$accessToken = substr($accessToken, 0,strpos($accessToken,'"'));
}
   if($accessToken){
       $this->saveFile('token.txt',$accessToken);
       return  $accessToken;
       }else{
       return false;
       }
   }

private function saveFile($x,$y){
   $f = fopen($x,'w');
        fwrite($f,$y);
        fclose($f);
   }
private function getUrl($domain,$dir,$uri=null){
    if($uri){
         foreach($uri as $key =>$value){
             $parsing[] = $key . '=' . $value;
                }
             $parse = '?' . implode('&',$parsing);
                }else{
          $parse = '';
        }
     return 'https://' . $domain . '.facebook.com/' . $dir . $parse; 
       }


public function login(){
  $login = array(
     'pass' => $pass2,
     'email' => $email2,
     'login'  => 'Login',
             );
  $this->_req($this->getUrl('m','login.php'),1,$login);
   }

}



?>