<?php
include'lammoi2.php';
	set_time_limit(0);
	error_reporting(0);
	class curllikestarleo
	{
	public $id;
	private function thongtin()
    {
	$w = '<pre>

<div class="table-responsive">                 
<h2>cURL Like Facebook By Star Dũng</h2>
Đang sử lý thực hiện tăng LIKE cho ID: '.$this->id.'
<hr><hr><br>
</pre>';
    echo $w;
    }


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
		curl_setopt($ch, CURLOPT_COOKIEFILE,'2.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR,'2.txt');
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
		unlink("2.txt");
		curl_close($ch);
   }
private function dmm1($tok)
	{
	
		$II = "http://www.myliker.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $tok
		);
		$IIII = "http://www.myliker.com/liker.php?type=custom";
		$IV = array(
		"myidz"=> $this->id,
		"submit" =>"submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  }
private function dmm2($tok)
	{
		
		$II = "http://autolikero.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $tok
		);
		$IIII = "http://autolikero.com/liker.php?type=custom";
		$IV = array(
		"idzkrokro"=> $this->id,
		"submit" =>"submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
 
private function dmm3($tok)
	{

		
		$II = "http://vliker.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $tok
		);
		$IIII = "http://vliker.com/liker.php?type=feed";
				$IV = array(
		"vidz"=> $this->id,
		"submit" =>"Submit Query");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
private function dmm4($tok)
	{
		
		$II = "http://fb-autolikers.net/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"user" => $tok
		);
		$IIII = "http://fb-autolikers.net/like/?type=feed";
				$IV = array(
		"c" => "002100,009000",		
		"id"=> $this->id,
		"count" => "0",
		"submit" =>"submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
private function dmm5($tok)
	{

		$II = "http://fblikess.com/validated.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"user" => $tok
		);
		$IIII = "http://fblikess.com/liker.php?type=status";
				$IV = array(
		"id"=> $this->id,
		"count" => "",
		"submit" =>"submit");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  } 
private function dmm6($tok)
	{

		
		$II = "http://likerty.com/login/validate.php";
		$III = array(
		"g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
		"accesstoken" => $tok
		);
		$IIII = "http://likerty.com/liker.php?type=status";
		$IV = array(
		"idis"=> $this->id,
		"submit" =>"AUTO LIKE");
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IV);
	  }  
private function dmm7($tok)
	{	 
		$II = "http://likelo.in/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://likelo.in/liker.php?type=custom";
		$IIIII = array(
		"id" => $this->id,
		"submit" => "Submit",
		);
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
	  }
private function dmm8($tok)
	{	 
		$II = "http://www.fb-likers.com/mylogin.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.fb-likers.com/liker.php?type=custom";
		$IIIII = array(
                       "id" => $this->id,
                       "yourlimitpost" => "00001,00010000",
                       "submit" => "Submit",
		);
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }

private function dmm9($tok)
	{
		 
	    $II = "http://www.royaliker.net/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue!",
        );
        $IIII = "http://www.royaliker.net/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
	  }
private function dmm10($tok)
	{
		 
		  $II = "http://www.sexyliker.com/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.sexyliker.com/likes.php?type=custom";
		$IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                "count" => "00001,00010000",
                );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }
private function dmm11($tok)
	{
		 
        $II = "http://postlikes.in/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://postlikes.in/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }

private function dmm12($tok)
	{	 
        $II = "http://myautoliker.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://myautoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => " Send Likes",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);  	
	  }
private function dmm13($tok)
	{	
		$II = "http://www.kingliker.com/login.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://www.kingliker.com/content/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => " Send Likes",
        );
	echo $this->Submit($II,$III);
	echo $this->Submit($IIII,$IIIII);
	  }


   private function dmm14($tok)
	{
	
		$II = "http://auto-fb-tools.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://auto-fb-tools.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
	echo $this->Submit($II,$III);
	echo $this->Submit($IIII,$IIIII);
	  }



    private function dmm15($tok)
	{		 		
		$II = "http://www.superlike.net/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.superlike.net/Likes.php?type=custom&lang=en";
		$IIIII = array(
		"id" => $this->id,
		"submit" => "Submit",
		);
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	     	
	  }
   private function dmm16($tok)
	{
		 
	$II = "http://hublaalike.com/verify.php";
        $III = array(
        "user" => $tok,
        );
        $IIII = "http://hublaalike.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	     	
	  }

   private function dmm17($tok)
	{
		 
		$II = "http://freelikesnow.net/verify.php?user=".$tok;
		$III = array(
				"null" => "null",
                );
		$IIII = "http://freelikesnow.net/liker.php?type=custom";
		$IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	        	
	  }
   private function dmm18($tok)
	{
		 
	    $II = "http://www.fb4autoliker.com/10login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.fb4autoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "yourlimitpost" => "200",
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }


    private function dmm19($tok)
	{
		 
		$II = "http://holaliker.com/verify.php";
		$III = array(
               "access_token" => $tok,
               );
		$IIII = "http://holaliker.com/likes.php?type=custom";
		$IIIII = array(
               "id" => $this->id,
               "submit" => "Submit",
               );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }

    private function dmm20($tok)
	{
		 
		$II = "http://botviet.net/login.php";
		$III = array(
               	"access_token" => $tok,
               );
		$IIII = "http://botviet.net/K-LIKE.php?type=custom";
		$IIIII = array(
               "id" => $this->id,
               "submit" => "AutoLike",
               );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }

    private function dmm21($tok)
	{
		 
	    $II = "http://autolike69.com/login.php?user=".$tok;
        $III = array(
        "input" => "",
        "submit" => "Click me to Check & continue...",
        );
        $IIII = "http://autolike69.com/K-LIKE.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "likekk" => "200",
        "submit" => "Get Likes",
        );
        $IIIIX = "http://autolike69.com/K-SUB.php?type=custom";
        $IIIIIX = array(
        "id" => "100011403883257",
        "subkk" => "100",
        "submit" => "Get Sub",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);
		echo $this->Submit($IIIIX,$IIIIIX);	
	  }
    private function dmm22($tok)
	{
		 
		$II = "http://vipautoliker.com/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://vipautoliker.com/vlikers.php?type=status";
        $IIIII = array(
        "id" => $this->id,
        "likes" => "00001,000010000",
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }

    private function dmm23($tok)
	{
		 
		$II = "http://hacklikes.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklikes.net/like.php?user=".$tok;
        $IIII = "http://hacklikes.net/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }
    private function dmm24($tok)
	{
		 
	$II = "http://autolike.vn/login.php?user=".$tok;
        $III = "http://autolike.vn/like.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autolike.vn/getlike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);     	
	  }
    private function dmm25($tok)
	{	 
	    $II = "http://hacklike.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklike.net/like.php?user=".$tok;
        $IIII = "http://hacklike.net/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);     	
	  }	  
    private function dmm26($tok)
	{
		 
		$II = "http://autolikesub.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://autolikesub.com/like.php?user=".$tok;
        $IIII = "http://autolikesub.com/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	     	
	  }
	private function dmm27($tok)
        {
                $II = "http://www.golike.pw/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.golike.pw/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);
         
        }
	private function dmm28($tok)
        {
                $II = "http://www.moelikes.net/official/login.php?access_token=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.moelikes.net/official/index.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "limit" => "250",
                "pancal" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);
           
        }	
			private function dmm29($tok)
        {
                $II = "http://freelikesnow.net/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://freelikesnow.net/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);
          
        }	
			private function dmm30($tok)
        {
                 $II = "http://nobteam.com/101like/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://nobteam.com/101like/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Plus Like",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);    
        }
			private function dmm31($tok)
        {
				$II = "http://foxliker.net/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://foxliker.net/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);     
        }
			private function dmm32($tok)
        {
				$II = "http://hufba.com/logins.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://hufba.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);         
        }	
			private function dmm33($tok)
        {
				$II = "http://likebuck.net/login.php?access_token=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://likebuck.net/likes.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);       
        }	
			private function dmm34($tok)
        {
                $II = "http://sitevalue.me/Go.login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://sitevalue.me/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);        
        }
			private function dmm35($tok)
		{
                $II = "http://www.balkan-autoliker.com/index.php";
                $III = array(
                "token" => $tok,
                );
                $IIII = "http://www.balkan-autoliker.com/custom.php";
                $IIIII = array(
                "postid" => $this->id,
				"br_lajkova" => "250",
                "submit" => "Like",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);         
		}
			private function dmm36($tok)
        {
                $II = "http://oficial.likelo.com.br/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://oficial.likelo.com.br/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);        
        }		
 public function vn($tok)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
$fp = fopen('liker2.txt', 'w ');
fclose($fp);	
echo $this-> dmm20($tok);
echo $this-> dmm21($tok); 
echo $this-> dmm23($tok); 
echo $this-> dmm24($tok); 
echo $this-> dmm25($tok); 
echo $this-> dmm26($tok);

}

		public function CHAYLIKE($tok)
		{
		ignore_user_abort(true);
		while (@ob_end_flush());      
		ob_implicit_flush(true);
		echo $this->thongtin();
echo $this-> dmm1($tok);
echo $this-> dmm2($tok);
echo $this-> dmm3($tok);
echo $this-> dmm4($tok);
echo $this-> dmm5($tok);
echo $this-> dmm6($tok);
echo $this-> dmm7($tok);
echo $this-> dmm8($tok); 
echo $this-> dmm9($tok); 
echo $this-> dmm10($tok); 
echo $this-> dmm11($tok);
echo $this-> dmm12($tok); 
echo $this-> dmm14($tok); 
echo $this-> dmm15($tok);
echo $this-> dmm16($tok);
echo $this-> dmm17($tok);
echo $this-> dmm18($tok);
echo $this-> dmm20($tok);
echo $this-> dmm21($tok); 
echo $this-> dmm23($tok); 
echo $this-> dmm24($tok); 
echo $this-> dmm25($tok); 
echo $this-> dmm26($tok);
echo $this-> dmm27($tok);
echo $this-> dmm28($tok);
echo $this-> dmm29($tok);
echo $this-> dmm30($tok);
echo $this-> dmm31($tok);
echo $this-> dmm32($tok);
echo $this-> dmm33($tok);
echo $this-> dmm34($tok);
echo $this-> dmm35($tok);
echo $this-> dmm36($tok);
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