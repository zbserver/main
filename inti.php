<?php
const
p = "\033[1;97m",
m = "\033[1;31m",
h = "\033[1;32m",
k = "\033[1;33m",
c = "\033[1;36m",
b = "\033[1;34m",
mp = "\033[101m\033[1;37m",
d = "\033[0m",
t = "\t",
n = "\n",
r = "\r                                   \r",
Error= h." [".p."Error | 0".h."]";
Function cl(){
    if( PHP_OS_FAMILY == "Linux" ){
        system('clear');
    }else{
        pclose(popen('cls','w'));
    }
}
Function Line($len = 60){
    print p.str_repeat('─',$len).n;
}
Function NoLi($no,$menu){return  h." [".p.$no.h."] ".p.$menu;}
Function Api_Bal(){$r = json_decode(file_get_contents(api_url."/res.php?action=userinfo&key=".apikey),1);if(!$r["balance"]){Error;}return $r["balance"];}
Function Ambil($res,$depan,$belakang,$nomor){
    $data=explode($belakang,explode($depan,$res)[$nomor])[0];
    return $data;
}
Function Save($namaData){
    if(file_exists($namaData)){
        $data = file_get_contents($namaData);
    }else{
        $data = readline('Input '.$namaData.' : ');
        file_put_contents($namaData, $data);
    }
    return $data;
}
Function SaveXevil($namaData){
    if(file_exists($namaData)){
        $data = file_get_contents($namaData);
    }else{
        $data = readline('Input '.$namaData.' : ');
        file_put_contents($namaData, $data."|SOFTID1926406083");
    }
    return $data;
}
Function res_api($id){$delay=7;while(true){load();$r = json_decode(file_get_contents(api_url."/res.php?key=".apikey."&action=get&id=".$id."&json=1"),1);$status = $r["status"];if($r["request"] == "CAPCHA_NOT_READY"){print rr;load();sleep($delay);print rr;continue;}if($status == 1){print rr;print bps_cap();return $r["request"];}return 0;}}
Function bps_cap(){
    print r;
    print p." Bypass captcha [".h."√".p."]";
    sleep(1);
    print r;
}
Function msg($str, $j = 15){
    $simbol = ['-', '\\', '|', '/'];
    for($i = $j; $i > 0; $i--){
        foreach($simbol as $n => $s){
            print p." [".k.$s.p."] ".p.$str." ".m.str_repeat(".", $n)."\r";
            usleep(100000);
        }
    }
    print "                                \r";
}
Function Tmr($tmr){
    date_default_timezone_set("UTC");
    $sym = [' ─ ',' / ',' │ ',' \ ',];
    $timr = time()+$tmr;$a = 0;
    while(true){
        $a +=1;$res=$timr-time();
        if($res < 1) {break;}
        print $sym[$a % 4].p.date('H',$res).":".p.date('i',$res).":".p.date('s',$res)."\r";
        usleep(100000);
    }
    print r;
}
Function load(){
    print r;
    print p." Bypass captcha [".h.".  ".p."]";
    sleep(1);
    print r;
    print p." Bypass captcha [".h.".. ".p."]";
    sleep(1);
    print r;
    print p." Bypass captcha [".h."...".p."]";
    sleep(1);
}
Function ban(){
    line();
    print "| Script         : ".name.n;
    print "| Version        : ".version.n;
    print "| Copyright      : Zerobot - 2025".n;
    print "| Donation (trx) : ".h."TALrypwEaPW5JhDwg6b54KY3PFJrZkagaa".n;
    line();
}
Function widgetId(){
    $uuid = '';
    for ($n = 0; $n < 32; $n++){
        if ($n == 8 || $n == 12 || $n == 16 || $n == 20){
            $uuid .= '-';
        }
        $e = mt_rand(0, 15);
        if ($n == 12){$e = 4;}
        elseif ($n == 16){
            $e = ($e & 0x3) | 0x8;
        }
        $uuid .= dechex($e);
    }
    return $uuid;
}
Function icaptcha($token){
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
			"theme" 	=> "light",
			"token" 	=> $token,
			"timestamp"	=> $ts,
			"initTimestamp"	=> $its
		]))
	];
	print r;
	print(' Bypass captcha ['.h.'.  '.p.']');
	sleep(1);
	$r = json_decode(base64_decode(Bypass(host.'icaptcha/req',$h,$data)[1]),1);
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
	$r = json_decode(base64_decode(Bypass(host.'icaptcha/req',$h,$data)[1]),1);
	if(!$r['completed'])return;
	print r;
	print(' Bypass captcha ['.h.'...'.p.']');
	sleep(1);
	print r;
	$data = [];
	//$data['captcha'] = "icaptcha";
	//$data['_iconcaptcha-token']=$token;
	$data['ic-rq']=1;
	$data['ic-wid'] = $wid;
	$data['ic-cid'] = $chID;
	$data['ic-hp'] = '';
	return $data;
}
Function Turnstile($source,$pageurl){
    if(preg_match('/data-sitekey="/',$source)){
      $sitekey= Ambil($source,'data-sitekey="','"',1);
    }elseif(preg_match("/data-sitekey='/",$source)){
        $sitekey= Ambil($source,"data-sitekey='","'",1);
    }elseif(preg_match("/const siteKey/",$source)){
        $sitekey= Ambil($source,"const siteKey = '","'",1);
    }elseif(preg_match("/const sitekey/",$source)){
        $sitekey= Ambil($source,"const siteKey = '","'",1);
    }else{
        print ("sitekey Error");
        sleep(2);
        print r;
    }
    $r = json_decode(file_get_contents(api_url."/in.php?key=".apikey."&method=turnstile&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);
    $status = $r["status"];
    if($status == 0){Error;return 0;}
    $id = $r["request"];
    return res_api($id);
    Err:
}
Function Bypass($u, $h = 0, $p = 0,$mode = 0) {
	while(true){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $u);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_COOKIE,TRUE);
		curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
	    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
		if($mode){
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST,$mode);
		}
		if($p) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
		}
		if($h) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$r = curl_exec($ch);
		$c = curl_getinfo($ch);
		if(!$c) return "Curl Error : ".curl_error($ch); else{
			$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($hd,$bd);
		}
	}
}