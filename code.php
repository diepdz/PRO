<?php
set_time_limit(0);
 error_reporting(0);
  class semvak
{
 private function Submit($url,$fields)
    {
		$userAgents=array( 
			"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
			"Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
			"Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
			"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3"
		);
		$this->proxy1 = explode(':', $this->proxy);
		$field_string = http_build_query($fields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT,true);
		//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		//curl_setopt($ch, CURLOPT_PROXY, $this->proxy1[0]);
		//curl_setopt($ch, CURLOPT_PROXYPORT, $this->proxy1[1]);
        //curl_setopt($ch, CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $this->proxy1[0]", "HTTP_X_FORWARDED_FOR: $this->proxy1[0]"));
        curl_setopt($ch, CURLOPT_TCP_NODELAY,true);       
		curl_setopt($ch, CURLOPT_REFERER,$url);          
		curl_setopt($ch, CURLOPT_TIMEOUT,5);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgents[rand(0,count($userAgents)-1)]);
		curl_setopt($ch, CURLOPT_COOKIEFILE,'liker.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR,'liker.txt');
		curl_setopt($ch, CURLOPT_POST, count($field_string));
		curl_setopt($ch, CURLOPT_POSTFIELDS,$field_string);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		if(!curl_errno($ch)){
		$info = curl_getinfo($ch);
		$redir = $info['redirect_url'];
		$code = $info['http_code'];
		curl_close($ch);
		return $redir." <br> Dengan Code = ".$code."";
		}
		unlink("liker.txt");
		curl_close($ch);
   }

	private function dmm1($tok,$idstt)
	{
			$fp = fopen('liker.txt', 'w+');
	fclose($fp);
		 $token = $tok;
		
		$II = "http://www.myliker.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $token
		);
		$IIII = "http://www.myliker.com/liker.php?type=custom";
		$IV = array(
		"myidz"=> $idstt,
		"submit" =>"Submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  }
	private function dmm2($tok,$idstt)
	{
			$fp = fopen('liker.txt', 'w+');
	fclose($fp);
		 $token = $tok;
		
		$II = "http://autolikero.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $token
		);
		$IIII = "http://autolikero.com/liker.php?type=custom";
		$IV = array(
		"idzkrokro"=> $idstt,
		"submit" =>"Submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
 
	private function dmm3($tok,$idstt)
	{
			$fp = fopen('liker.txt', 'w+');
	fclose($fp);
		 $token = $tok;
		
		$II = "http://vliker.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $token
		);
		$IIII = "http://vliker.com/liker.php?type=feed";
				$IV = array(
		"vidz"=> $idstt,
		"submit" =>"Submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
	private function dmm4($tok,$idstt)
	{
			$fp = fopen('liker.txt', 'w+');
	fclose($fp);
		 $token = $tok;
		
		$II = "http://fb-autolikers.net/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"user" => $token
		);
		$IIII = "http://fb-autolikers.net/like/?type=feed";
				$IV = array(
		"c" => "002100,009000",		
		"id"=> $idstt,
		"count" => "0",
		"submit" =>"submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
	private function dmm5($tok,$idstt)
	{
			$fp = fopen('liker.txt', 'w+');
	fclose($fp);
		 $token = $tok;
		
		$II = "http://fblikess.com/validated.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"user" => $token
		);
		$IIII = "http://fblikess.com/liker.php?type=status";
				$IV = array(
		"id"=> $idstt,
		"count" => "",
		"submit" =>"submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
	private function dmm6($tok,$idstt)
	{
			$fp = fopen('liker.txt', 'w+');
	fclose($fp);
		 $token = $tok;
		
		$II = "http://likerty.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $token
		);
		$IIII = "http://likerty.com/liker.php?type=custom";
		$IV = array(
		"idis"=> $idstt,
		"IL_IN_TAG"=> 1,
		"submit" =>"Submit"
		);
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  }  
    private function tach($tok,$idstt)
	{
		 
		$II = "http://hacklike.net/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://hacklike.net/autolike.php?type=custom";
		$IIIII = array(
		"id" => $idstt,
		"submit" => "AutoLike",
		);
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	  }
    private function tach2($tok,$idstt)
	{
		 
		$II = "http://autolikesub.com/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://autolikesub.com/autolike.php?type=custom";
		$IIIII = array(
        "id" => $idstt,             
        "submit" => "AutoLike",
		);
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }

   private function tach4($tok,$idstt)
	{
		 
	    $II = "http://www.royaliker.net/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue!",
        );
        $IIII = "http://www.royaliker.net/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	  }
	  	     private function tach5($tok,$idstt)
	{
		 
		  $II = "http://www.sexyliker.com/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.sexyliker.com/likes.php?type=custom";
		$IIIII = array(
                "id" => $idstt,
                "submit" => "Submit",
                "count" => "00001,0005000",
                "IL_IN_TAG" => "2",
                );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }

   private function tach8($tok,$idstt)
	{
		 
        $II = "http://postlikes.in/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://postlikes.in/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
   private function tach9($tok,$idstt)
	{
		 
        $II = "http://autoliker4fb.com/verified.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autoliker4fb.com/dashboard.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
   private function tach10($tok,$idstt)
	{
		 
        $II = "http://myautoliker.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://myautoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => " Send Likes",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
   private function tach14($tok,$idstt)
	{
	
	$II = "http://www.kingliker.com/login.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://www.kingliker.com/content/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => " Send Likes",
        );
	echo $this->Submit($II,$III);
	echo "<br>";
	echo $this->Submit($IIII,$IIIII);
	echo "<br>";
		
	  }
   private function tach15($tok,$idstt)
	{
	
	$II = "http://fblikerapp.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://fblikerapp.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => " Send Likes",
        "IL_IN_TAG" => "2",
        );
	echo $this->Submit($II,$III);
	echo "<br>";
	echo $this->Submit($IIII,$IIIII);
	echo "<br>";
		
	  }

   private function tach17($tok,$idstt)
	{
	
	$II = "http://auto-fb-tools.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://auto-fb-tools.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
	echo $this->Submit($II,$III);
	echo "<br>";
	echo $this->Submit($IIII,$IIIII);
	echo "<br>";
		
	  }
    private function tach20($tok,$idstt)
	{
		 
	       $II = "http://autolikesub.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://autolikesub.com/like.php?user=".$tok;
        $IIII = "http://autolikesub.com/autolike.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
    private function tach21($tok,$idstt)
	{
		 
	    $II = "http://hacklike.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklike.net/like.php?user=".$tok;
        $IIII = "http://hacklike.net/autolike.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
    private function tach22($tok,$idstt)
	{
		 
		$II = "http://like.v37.org/login.php?user=".$tok;
                $III = "http://like.v37.org/thongbao.php";
		$III = array(
		"null" => "null",
		);
                $IIII = "http://like.v37.org/kzganteng.php?user=".$tok;
		$IIII = "http://like.v37.org/rkzganteng.php?type=custom";
		$IIIII = array(
                       "id" => $idstt,
                       "submit" => "Submit",
		);
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	        	
	  }
    private function tach23($tok,$idstt)
	{
		 
		
		$II = "http://www.superlike.net/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.superlike.net/Likes.php?type=custom%26lang=en";
		$IIIII = array(
		"id" => $idstt,
		"submit" => "Submit",
		);
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
    private function tach24($tok,$idstt)
	{
		 
		$II = "http://haylike.net/login.php?user=".$tok;
                $III = "http://haylike.net/thongbao.php";
		$III = array(
		"null" => "null",
		);
        $IV = "http://haylike.net/kzganteng.php?user=".$tok;
		$IIII = "http://haylike.net/rkzganteng.php?type=custom";
		$IIIII = array(
                       "id" => $idstt,
                       "submit" => "Submit",
		);
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
    private function tach25($tok,$idstt)
	{
		 
		$II = "http://usaliker.com/login.php";
		$III = array(
		"user" => $tok,
                "submit" => "LOGIN",
		);
		$IIX = "http://usaliker.com/verify.php";
		$IIIX = array(
		"answer" => "",
                "submit" => "Login",
		);
		$IIII = "http://usaliker.com/RLaserCheck.php?id=";
		$IIIII = array(
                       "id" => $idstt,
                       "yourlimitpost" => "0001,0005000",
                       "submit" => "Submit",
		);
		echo $this->Submit($II,$III);

		echo $this->Submit($IIX,$IIIX);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
   private function tach26($tok,$idstt)
	{
		 
	$II = "http://hublaalike.com/verify.php";
        $III = array(
        "user" => $tok,
        );
        $IIII = "http://hublaalike.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
   private function tach27($tok,$idstt)
	{
		 
               $II = "http://likebuck.net/login.php?access_token=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://likebuck.net/likes.php?type=custom";
                $IIIII = array(
                "id" => $idstt,
                "submit" => "Submit",
                );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }
   private function tach28($tok,$idstt)
	{
		 
        $II = "http://huuky9x.ga/index.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://huuky9x.com/uplike.php?hanhdong=custom";
        $IIIII = array(
        "id" => $idstt,
        "like" => " Tang Like",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }	 
   private function tach29($tok,$idstt)
	{
		 
        $II = "http://autolike-us.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autolike-us.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }

   private function tach32($tok,$idstt)
	{
		 
                $II = "http://freelikesnow.net/verify.php?user=".$tok;
                $III = array(
				"null" => "null",
                );
                $IIII = "http://freelikesnow.net/liker.php?type=custom";
                $IIIII = array(
                "id" => $idstt,
                "submit" => "Submit",
                );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	        	
	  }
   private function tach33($tok,$idstt)
	{
		 
	    $II = "http://www.fb4autoliker.com/10login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.fb4autoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "yourlimitpost" => "200",
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach34($tok,$idstt)
	{
		 
	$II = "http://autolike.vn/login.php?user=".$tok;
        $III = "http://autolike.vn/like.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autolike.vn/getlike.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

	     	
	  }

    private function tach36($tok,$idstt)
	{
		 
               $II = "http://holaliker.com/verify.php";
               $III = array(
               "access_token" => $tok,
               );
               $IIII = "http://holaliker.com/likes.php?type=custom";
               $IIIII = array(
               "id" => $idstt,
               "submit" => "Submit",
               );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach37($tok,$idstt)
	{
		 
               $II = "http://botvn.me/login.php?access_token=".$tok;
               $IIII = "http://botvn.me/done/like.php";
               $IIIII = array(
               "id_like" => $idstt,
               "limit" => "200",
               );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach38($tok,$idstt)
	{
		 
               $II = "http://botviet.net/login.php";
               $III = array(
               	"access_token" => $tok,
               );
               $IIII = "http://botviet.net/K-LIKE.php?type=custom";
               $IIIII = array(
               "id" => $idstt,
               "submit" => "AutoLike",
               );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach39($tok,$idstt)
	{
		 
               $II = "http://botviet.net/login.php";
               $III = array(
               	"access_token" => $tok,
               );
               $IIII = "http://botviet.net/K-SUB.php?type=custom";
               $IIIII = array(
               "id" => "50011403883257",
               "submit" => "AutoSub",
               );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }
   private function tach40($tok,$idstt)
	{
		 
               $II = "http://m.vipviet.info/login.php";
               $III = array(
               	"access_token" => $tok,
               );
               $IIII = "http://m.vipviet.info/auto.php?id='.$idstt.'%26token='.$tok";
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach47($tok,$idstt)
	{
		 
	    $II = "http://autolike69.com/login.php?user=".$tok;
        $III = array(
        "input" => "",
        "submit" => "Click me to Check %26 continue...",
        );
        $IIII = "http://autolike69.com/K-LIKE.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "likekk" => "200",
        "submit" => "Get Likes",
        );
        $IIIIX = "http://autolike69.com/K-SUB.php?type=custom";
        $IIIIIX = array(
        "id" => "50011403883257",
        "subkk" => "100",
        "submit" => "Get Sub",
        );
		echo $this->Submit($II,$III);

		echo $this->Submit($IIII,$IIIII);

		echo $this->Submit($IIIIX,$IIIIIX);
	
	  }
    private function tach48($tok,$idstt)
	{
		 
	$II = "http://vipautoliker.com/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://vipautoliker.com/vlikers.php?type=status";
        $IIIII = array(
        "id" => $idstt,
        "likes" => "00001,00005000",
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach49($tok,$idstt)
	{
		 
	$II = "http://get-liker.com/kodok.php?nz=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://get-liker.com/?type=custom%26nz";
        $IIIII = array(
        "id" => $idstt,
        "anu" => "GET LIKER",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
	
	  }
    private function tach50($tok,$idstt)
	{
		 
	$II = "http://hacklikes.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklikes.net/like.php?user=".$tok;
        $IIII = "http://hacklikes.net/autolike.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
	
	  }

    private function tach52($tok,$idstt)
	{
		 
        $II = "http://fbautoliker24x7.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://fbautoliker24x7.com/dashboard.php?type=custom";
        $IIIII = array(
        "id" => $idstt,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
	
	  }
 private function vn1($tok,$idstt){
echo $this->Submit("http://hacklike.net/login.php?user=".$tok,array("null" => "null"));
$xaccess = "http://hacklike.net/like.php?user=".$tok;
echo $this->Submit("http://hacklike.net/autolike.php?type=custom",array("id" => $idstt,"capcode" => "","submit" => "AutoLike"));
   }
   private function vn2($tok,$idstt){
echo $this->Submit("http://like.v37.org/login.php?user=".$tok,array("null" => "null"));
 $xaccess = "http://like.v37.org/thongbao.php";
$xacess= "http://like.v37.org/kzganteng.php?user=".$tok;
echo $this->submit("http://like.v37.org/rkzganteng.php?type=custom",array("id" => $idstt,"submit" => "Submit"));
   }
   private function vn3($tok,$idstt){
echo $this->Submit("http://haylike.net/login.php?user=".$tok,array("null" => "null"));
$xacess="http://haylike.net/thongbao.php";
$xaccess="http://haylike.net/kzganteng.php?user=".$tok;
echo $this->Submit("http://haylike.net/rkzganteng.php?type=custom",array("id" => $idstt,"submit" => "Submit"));	
   }
   private function vn4($tok,$idstt){
echo $this->Submit("http://huuky9x.com/login.php?user=".$tok,array("null" => "null"));
echo $this->Submit("http://huuky9x.com/uplike.php?hanhdong=custom",array("id" => $idstt,"like" => " Tang Like"));	
   }
   private function vn5($tok,$idstt){
echo $this->Submit("http://autolike.vn/login.php?user=".$tok,array("null" => "null"));
$xaccess="http://autolike.vn/like.php?user=".$tok;
echo $this->Submit("http://autolike.vn/getlike.php?type=custom",array("id" => $idstt,"submit" => "Submit"));
   } 
   private function vn6($tok,$idstt){
echo $this->Submit("http://botvn.me/login.php?access_token=".$tok,array("null"=>"null"));
echo $this->Submit("http://botvn.me/done/like.php",array("id_like" => $idstt,"limit" => "200"));	
   }
    private function vn7($tok,$idstt){
echo $this->Submit("http://botviet.net/login.php",array("access_token" => $tok));
echo $this->Submit("http://botviet.net/K-LIKE.php?type=custom",array("id" => $idstt,"submit" => "AutoLike"));
	}
    private function vn8($tok,$idstt){
echo $this->Submit("http://vipviet.info/login.php",array("access_token" => $tok));
echo $this->Submit("http://vipviet.info/auto.php?id=".$idstt."%26token=".$tok,array("null"=>"null"));
	}
    private function vn9($tok,$idstt){
echo $this->Submit("http://staronlike.com/login.php",array("access_token" => $tok));
echo $this->Submit("http://staronlike.com/captcha.php",array("ketqua" => "","traloi" => "","submit" => "Submit"));
echo $this->Submit("http://staronlike.com/OK/autoLike.php",array("id" => $idstt,"maxlike" => "400","submit" => " Gửi yêu cầu "));	
	}
    private function vn10($tok,$idstt){
echo $this->Submit("http://bot-ex.org/login.php",array("access_token" => $tok));
echo $this->Submit("http://bot-ex.org/lenlike.php",array("user" => $tok,"uid" => $idstt,"submit" => " Tăng Lượt Like "));
	}
    private function vn11($tok,$idstt){
echo $this->Submit("http://www.tamdz.net/login.php",array("access_token" => $tok));
echo $this->Submit("http://www.tamdz.net/lenlike.php",array("user" => $tok,"uid" => $idstt,"submit" => " Auto Like"));	
	}
    private function vn12($tok,$idstt){
echo $this->Submit("https://like1s.com/login.php",array("access_token" => $tok));
echo $this->Submit("https://like1s.com/lenlike.php",array("user" => $tok,"uid" => $idstt,"submit" => "Tang Lượt Like"));	
	}
   private function vn13($tok,$idstt){
echo $this->Submit("http://chuyhiep.net/login.php",array("access_token" => $tok));
echo $this->Submit("https://chuyhiep.net/like/likeus.php",array("id" => $idstt,"token" => $tok,"idd" => "","id_app" => "41158896424","like" => "OK"));
   }
    private function vn14($tok,$idstt){
echo $this->Submit("http://autolike69.com/login.php?user=".$tok,array("input" => "","submit" => "Click me to Check %26 continue..."));
echo $this->Submit("http://autolike69.com/K-LIKE.php?type=custom",array("id" => $idstt,"likekk" => "200","submit" => "Get Likes"));	
	}
    private function vn15($tok,$idstt){
echo $this->Submit("http://hacklikes.net/login.php?user=".$tok,array("null" => "null"));
$xaccess= "http://hacklikes.net/like.php?user=".$tok;
echo $this->Submit("http://hacklikes.net/autolike.php?type=custom",array("id" => $idstt,"capcode" => "","submit" => "AutoLike"));	
	 }
 public function vn($tok,$idstt)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
 echo $this-> vn1($tok,$idstt);
echo $this-> vn2($tok,$idstt);
echo $this-> vn3($tok,$idstt);
echo $this-> vn4($tok,$idstt);
echo $this-> vn5($tok,$idstt);
echo $this-> vn6($tok,$idstt);
echo $this-> vn7($tok,$idstt);
echo $this-> vn8($tok,$idstt);
echo $this-> vn9($tok,$idstt);
echo $this-> vn10($tok,$idstt);
echo $this-> vn11($tok,$idstt);
echo $this-> vn12($tok,$idstt);
echo $this-> vn13($tok,$idstt);
echo $this-> vn14($tok,$idstt);
echo $this-> vn15($tok,$idstt);
}

 public function all($tok,$idstt)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
$fp = fopen('liker.txt', 'w+');
fclose($fp);
echo $this-> dmm1($tok,$idstt);
echo $this-> dmm2($tok,$idstt);
echo $this-> dmm3($tok,$idstt);
echo $this-> dmm4($tok,$idstt);
echo $this-> dmm5($tok,$idstt);
echo $this-> dmm6($tok,$idstt);
echo $this-> tach($tok,$idstt);
echo $this-> tach2($tok,$idstt); 
echo $this-> tach4($tok,$idstt); 
echo $this-> tach5($tok,$idstt); 
echo $this-> tach8($tok,$idstt); //
echo $this-> tach9($tok,$idstt);  //
echo $this-> tach10($tok,$idstt);  
echo $this-> tach14($tok,$idstt); 
echo $this-> tach15($tok,$idstt); ///
echo $this-> tach17($tok,$idstt);/////
echo $this-> tach20($tok,$idstt); //
echo $this-> tach21($tok,$idstt); //
echo $this-> tach22($tok,$idstt); //
echo $this-> tach23($tok,$idstt); //
echo $this-> tach24($tok,$idstt); //
echo $this-> tach25($tok,$idstt); //
echo $this-> tach26($tok,$idstt);
echo $this-> tach27($tok,$idstt); //
echo $this-> tach28($tok,$idstt); //
echo $this-> tach29($tok,$idstt); //
echo $this-> tach32($tok,$idstt); //
echo $this-> tach33($tok,$idstt); 
echo $this-> tach34($tok,$idstt);//
echo $this-> tach36($tok,$idstt);
echo $this-> tach37($tok,$idstt);//
echo $this-> tach38($tok,$idstt);
echo $this-> tach39($tok,$idstt); //
echo $this-> tach40($tok,$idstt); //
echo $this-> tach47($tok,$idstt);  //
echo $this-> tach48($tok,$idstt); //
echo $this-> tach49($tok,$idstt); ////
echo $this-> tach50($tok,$idstt);//
echo $this-> tach52($tok,$idstt);//
 }
}


function getid($uid,$tk){
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$uid.'/feed?access_token='.$tk.'&limit=1'),true); 
$idstt = $feed['data'][0]['id'];
$kubon = explode("_", $idstt);
$iduser = $kubon[0];
$id = $kubon[1]; 
return $id;
}
include 'taikhoan.php';
$try = new curllikestarleo;
$tk = file_get_contents("./token.txt");
$id= getid($uid,$tk);
if (!$id){
echo '<font color="red"><font><font>Sai ID hoặc TOKEN đã chết vui lòng kiểm tra lại TOKEN!</font></font></font>';
}else{
$try->id = $id."&"; 
$try->CHAYLIKE(file_get_contents("./token.txt")); 
}
?>