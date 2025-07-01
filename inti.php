<?php
const p = "\033[1;97m";
const m = "\033[1;31m";
const h = "\033[01;38;5;35m";
const k = "\033[1;33m";
const c = "\033[1;36m";
const b = "\033[1;34m";
const mp = "\033[101m\033[1;37m";
const o = "\033[01;38;5;214m";
const d = "\033[0m";
const t = "\t";
const n = "\n";
const r = "\r                                   \r";
const Error= h." [".p."Error | 0".h."]";
const name = "xxxx";
const version = "xxxx";
const cook = "cookie.".name;
const user = "user-agent";
eval(base64_decode("ZnVuY3Rpb24gZEdWeVkybGtkVygpewogICAgcGl3OgogICAgY2woKTsKICAgIHByaW50IiDilIzilIDilJDilIzilIDilJDilIzilIDilJDilIzilIDilJDilKwg4pSs4pSM4pSA4pSQ4pSs4pSA4pSQ4pSM4pSs4pSQIi5uOwogICAgcHJpbnQiIOKUnOKUgOKUmOKUnOKUgOKUpOKUlOKUgOKUkOKUlOKUgOKUkOKUguKUguKUguKUgiDilILilJzilKzilJgg4pSC4pSCIi5uOwogICAgcHJpbnQiIOKUtCAg4pS0IOKUtOKUlOKUgOKUmOKUlOKUgOKUmOKUlOKUtOKUmOKUlOKUgOKUmOKUtOKUlOKUgOKUgOKUtOKUmCIubjsKICAgIHByaW50IG47CiAgICAkYWVkID0gImRHVnlZMmxrZFd0c1lXZHBiV0ZyWVc0IjsKICAgIHByaW50ICIgbGluayA6IGh0dHBzOi8vc2hyaW5rbWUuaW5rL3NtcXEiLm47CiAgICAkc3V3dW4gPSByZWFkbGluZShwLiIgUGFzc3dvcmQgOiAiKTsKICAgIGlmKCRzdXd1biA9PSAkYWVkKXsKICAgICAgICBwcmludCAiIFBhc3N3b3JkIG9rIi5uO3NsZWVwKDIpOwogICAgfWVsc2V7IAogICAgICAgIHByaW50IHAuIiBQYXNzd29yZCBzYWxhaCBjb2siO3NsZWVwKDIpO3ByaW50IHI7IGdvdG8gcGl3OwogICAgfQp9"));
dGVyY2lkdW();
Function cl(){if(PHP_OS_FAMILY == "Linux" ){system('clear');}else{pclose(popen('cls','w'));}}
Function Line($len = 65){print p.str_repeat('',$len).n;}
Function NoLi($no,$menu){return  h." [".p.$no.h."] ".p.$menu;}
Function Api_Bal(){$r = json_decode(file_get_contents(api_url."/res.php?action=userinfo&key=".apikey),1);if(!$r["balance"]){Error;}return $r["balance"];}
Function Ambil($res,$depan,$belakang,$nomor){$data=explode($belakang,explode($depan,$res)[$nomor])[0];return $data;}
Function Antibot($source){if(preg_match("/sctg/",api_url)){return antibotXev($source);}if(preg_match("/multibot/",api_url)){return antibotMul($source);}}
function load(){print r;print p." Bypass captcha [".h.".  ".p."]";sleep(1);print r;print p." Bypass captcha [".h.".. ".p."]";sleep(1);print r;print p." Bypass captcha [".h."...".p."]";sleep(1);}
Function bps_anbot(){print r;print p." Bypass Antibot ".p."[".h." √ ".p."]";sleep(1);print r;}
Function res_api($id){$delay=7;while(true){load();$r = json_decode(file_get_contents(api_url."/res.php?key=".apikey."&action=get&id=".$id."&json=1"),1);$status = $r["status"];if($r["request"] == "CAPCHA_NOT_READY"){print r;load();sleep($delay);print r;continue;}if($status == 1){print r;print bps_cap();return $r["request"];}return 0;}}
Function bps_cap(){print r;print p." Bypass captcha [".h." √ ".p."]";sleep(1);print r;}
function Tmr($tmr){date_default_timezone_set("UTC");$sym = [' . ',' .. ',' ...  ',' .... ',];$timr = time()+$tmr;$a = 0;while(true){$a +=1;$res=$timr-time();if($res < 1) {break;}print k." countdown".p." [ ".date('H',$res).":".p.date('i',$res).":".p.date('s',$res)." ] ".h.$sym[$a % 4]."\r";usleep(300000);}print r;}
function ip(){$r = json_decode(file_get_contents("http://ip-api.com/json"));return $r;}
Function Save($namaData){if(file_exists($namaData)){$data = file_get_contents($namaData);}else{$data = readline('Input '.$namaData.' : ');file_put_contents($namaData, $data);}return $data;}
Function SaveXevil($namaData){if(file_exists($namaData)){$data = file_get_contents($namaData);}else{$data = readline('Input '.$namaData.' : ');file_put_contents($namaData, $data."|SOFTID1926406083");}return $data;}
Function msg($str, $j = 15){$simbol = ['-', '\\', '|', '/'];for($i = $j; $i > 0; $i--){foreach($simbol as $n => $s){print p." [".k.$s.p."] ".p.$str." ".m.str_repeat(".", $n)."\r";usleep(100000);}}print "                                \r";}
function widgetId(){$uuid = '';for ($n = 0; $n < 32; $n++){if ($n == 8 || $n == 12 || $n == 16 || $n == 20){$uuid .= '-';}$e = mt_rand(0, 15);if ($n == 12){$e = 4;}elseif ($n == 16){$e = ($e & 0x3) | 0x8;}$uuid .= dechex($e);}return $uuid;}
function ban(){
    print n;
    print h." █▀▀▀▀▀  █ ".p." Script : ".name.h." [ ".p."©2025 - zerobot".h." ]".n;
    print h." █   ".p."Z".h."   █ ".p." version: ".version.h."     [".k." Free Not For Sale ".h."]".n;
    print h." █  ▄▄▄▄▄█ ".p." Channel: ".p."t.me/official_zerobot ".n;
    line().n;
}

Function Menu_Api(){
    apikey:
    cl();
    ban();
    print n;
    print k." Menu Apikey".n.n;
    print NoLi(1,"Multibot").n;
    print NoLi(2,"Xevil").n;
    print NoLi(3,"Free").k." (".p."No Apikey".k.")".n;
    $pilih =readline(p." Input : ");
    if($pilih == 2){
        define("api_url","http://sctg.xyz");
        SaveXevil("ApikeyXevil");
        define("apikey",file_get_contents("ApikeyXevil"));
    }elseif($pilih == 1){
        define("api_url","http://api.multibot.in");
        Save("ApikeyMulti");
        define("apikey",file_get_contents("ApikeyMulti"));
    }elseif($pilih == 3){

    }
     else{
        print m."Bad Number";sleep(3);goto apikey;
    }
}


function icaptcha($token,$theme,$icon_path){
    $h = h();
	$h[] = "origin: ".host;
	$h[] = "x-iconcaptcha-token: ".$token;
	$h[] = "x-requested-with: XMLHttpRequest";
	$ts = round(microtime(true) * 1000);
	$its= $ts - 2000;
	$wid = widgetId();
	$data = ["payload" => 
		base64_encode(json_encode([
		    "widgetId"	=> $wid,
			"action" 	=> "LOAD",
			"theme" 	=> $theme,
			"token" 	=> $token,
			"timestamp"	=> $ts,
			"initTimestamp"	=> $its
		]))
	];
	print r;
	print(' Bypass captcha ['.h.'.  '.p.']');
	sleep(1);
	$r = json_decode(base64_decode(Bypass(host.$icon_path,$h,$data)),1);
	$b64i = $r["challenge"];
	$chID = $r["identifier"];
	$ts = round(microtime(true) * 1000);
	$its = $ts - 2000;
	$data = ["payload" => 
		base64_encode(json_encode([
			"widgetId"		=> $wid,
			"challengeId"	=> $chID,
			"action"		=> "SELECTION",
			"x"				=> 160,
			"y"				=> 24,
			"width"			=> 320,
			"token" 		=> $token,
			"timestamp"		=> $ts,
			"initTimestamp"	=> $its
		]))
	];
	print r;
	print(' Bypass captcha ['.h.'.. '.p.']');
	sleep(2);
	$r = json_decode(base64_decode(Bypass(host.$icon_path,$h,$data)),1);
	if(!$r['completed'])return;
	print r;
	print(' Bypass captcha ['.h.'...'.p.']');
	sleep(1);
	print r;
	$data = [];
	$data['ic-rq']=1;
	$data['ic-wid'] = $wid;
	$data['ic-cid'] = $chID;
	$data['ic-hp'] = '';
	return $data;
}
function captcha_emot(){
    $rs= [];
    $h = [
        "cookie: ".save(cook),
	    "user-agent: ".save(user),
	    "x-requested-with: XMLHttpRequest"
	    ];
	emot:
	$r = json_decode(Bypass(host."ecaptcha/get_token",$h),1);
	print r;
	print p." Bypass captcha [".h.".  ".p."]";
	sleep(0.5);
	if(!$r["token"]){
	    exit(h." [".k."Captcha:: ".p."token expired".n);
	}
	$rs["captcha_token"] = $r["token"];
    $r = json_decode(Bypass(host."ecaptcha/get_captcha",$h),1);
    $rs["captcha_key"] = $r["captcha_key"];
    print r;
	print p." Bypass captcha [".h.".. ".p."]";
	sleep(0.5);
	$ques = strtolower(trim(explode(':', $r["question"])[1]));
	$data = http_build_query([
		"selected" => "$ques.gif",
		"key"	=> $rs["captcha_key"],
		"token"	=> $rs["captcha_token"]
	]);
	$r = json_decode(Bypass(host."ecaptcha/validate_icon",$h, $data),1);
	print r;
	print p." Bypass captcha [".h."...".p."]";
	sleep(0.5);
	print r;
	print p." Bypass success [".h." √ ".p."]";
	sleep(1);
	print r;
	if($r["status"] == "valid"){
		$rs["captcha"] = "emoji_captcha";
		$rs["selected_icon"] = "$ques.gif";
		return $rs;
	}
	goto emot;
}
function captcha($source,$pageurl){
    if(preg_match('/data-sitekey="/',$source)){
      $sitekey= Ambil($source,'data-sitekey="','"',1);
    }elseif(preg_match("/data-sitekey='/",$source)){
        $sitekey= Ambil($source,"data-sitekey='","'",1);
    }elseif(preg_match("/const siteKey/",$source)){
        $sitekey= Ambil($source,"const siteKey = '","'",1);
    }elseif(preg_match("/const sitekey/",$source)){
        $sitekey= Ambil($source,"const siteKey = '","'",1);
    }else{
        print (" sitekey Error");
        sleep(2);
        print r;
    }
    if(preg_match("/g-recaptcha/",$source)){
        $method = "userrecaptcha&googlekey="; goto gas;
    }
    if(preg_match("/h-captcha/",$source)){
        $method = "hcaptcha&sitekey="; goto gas;
    }
    if(preg_match("/cf-turnstile/",$source)){
        $method = "turnstile&sitekey="; goto gas;
    }
    if(preg_match("/authkong/",$source)){
        $method = "authkong&sitekey="; goto gas;
    }
    gas:
    $r = json_decode(file_get_contents(api_url."/in.php?key=".apikey."&method=".$method.$sitekey."&pageurl=".$pageurl."&json=1"),1);
    $status = $r["status"];
    if($status == 0){Error;return 0;}
    $id = $r["request"];
    return res_api($id);
    Err:
}
Function antibotMul($source){
    $delay= 4;
    $main = explode('"',explode('<img src="',explode('Bot links',$source)[1])[1])[0];
	$antiBot["main"] = $main;
	$src = explode('rel=\"',$source);
	foreach($src as $x => $sour){
		if($x == 0)continue;
		$no = explode('\"',$sour)[0];
		$img = explode('\"',explode('<img src=\"',$sour)[1])[0];
		$antiBot[$no] = $img;
	}
	$ua = "Content-type: application/x-www-form-urlencoded";
    $data = ["key"=>apikey,"method"=>"antibot","json"=>1] + $antiBot;
    $opts = ['http' =>['method'  => 'POST','header' => $ua,'content' => http_build_query($data)]];
    $r = json_decode(file_get_contents(api_url.'/in.php', false, stream_context_create($opts)),1);
    $id = $r["request"];
    while(true){
        load();
        $r = json_decode(file_get_contents(api_url."/res.php?key=".apikey."&action=get&id=".$id."&json=1"),1);
        $status = $r["status"];
        if($r["request"] == "CAPCHA_NOT_READY"){print r;load();sleep($delay);print r;continue;}
        if($status == 1){print r;print bps_anbot();$r["request"];return "+".str_replace(",","+",$r["request"]);}
        return 0;
    }
}
function antibotXev($source){
    $delay = 4;
    a:
    $bot1=explode('\"',explode('rel=\"',$source)[1])[0];
    $bot2=explode('\"',explode('rel=\"',$source)[2])[0];
    $bot3=explode('\"',explode('rel=\"',$source)[3])[0];
    $main = explode('"',explode('data:image/png;base64,', $source)[1])[0];
    $img1 = explode('"',explode('data:image/png;base64,', $source)[2])[0];
    $img2 = explode('"',explode('data:image/png;base64,', $source)[3])[0];
    $img3 = explode('"',explode('data:image/png;base64,', $source)[4])[0];
    if(!$bot1){ goto a;}
    $ua = "Content-type: application/x-www-form-urlencoded";
    $data = array('key' => apikey,'method' => 'antibot','main' => $main,$bot1 => $img1,$bot2 => $img2,$bot3 => $img3);
    $opts = array('http' => array('header'  => $ua,'method' => 'POST','content' => http_build_query($data)));
    $context  = stream_context_create($opts);
    $response = file_get_contents(api_url."/in.php", false, $context);
    $task = explode('OK|', $response)[1];
    if($task){
        while(true){$r2 = file_get_contents(api_url."/res.php?key=".apikey."&id=".$task);
            $hasil = explode('OK|', $r2)[1];
            $antb = explode(',', $hasil);
            if($hasil){
                print r;print bps_anbot();
                return "+".implode("+", $antb);
                break;
            }else if($r2 == "CAPCHA_NOT_READY"){print r;load();sleep($delay);print r;continue;}else{return 0;}
        }
    }else{goto a;}
}
function Bypass($url, $headers, $data = 0){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    if ($data){
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_COOKIE,TRUE);
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}