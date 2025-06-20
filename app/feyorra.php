<?php
//error_reporting(0);

const
notif = "Wait for process",
name = "FeyorraTop",
version = "1.0.0",
host = "https://feyorra.top/";
function h(){
    $h[] = "Host: ".parse_url(host)['host'];
    $h[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7";
    $h[] = "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
    $h[] = "cookie: ".save("cookie.".name);
    $h[] = "user-agent: ".save("user-agent");
    return $h;
}

Function dash(){
   $r  = Bypass(host."referrals",h());
   $refId = ambil($r,'value="'.host.'?r=','">',1);
   if(!$refId){
       print p."cookie experied".n;
       unlink('cookie.'.name);
       unlink('cookie.txt');
       die;
   }
}
Function Faucet(){
  while(true){
    a:
    dash();
    $r = Bypass(host."faucet",h());
    if(preg_match("/Just a moment/",$r)){print k." cloudflare".n;unlink(cook);die;}
    if(preg_match("/Daily limit reached/",$r)){print k." Daily limit reached".n;die;}
    $timer = Ambil($r,"wait = "," - 1;",1);
    if($timer){Tmr($timer);goto a;}
    $csrf= Ambil($r,'name="csrf_token_name" id="token" value="','">',1);
    $tok = Ambil($r,'name="token" value="','">',1);
    $capt= Ambil($r,'id="selectCaptcha" name="captcha"><option value="','">',1);
    $icap = Ambil($r,"name='_iconcaptcha-token' value='","' />",1);
    if($capt == "icaptcha"){
        $data = [
            'csrf_token_name' => $csrf,
            'token' => $tok,
            'captcha' => $capt,
            '_iconcaptcha-token' => $icap
            ];
        if($icap){
            b:
            $icon = icaptcha($icap,"light","icaptcha/req");
            if(!$icon){
	          print r;
	          print(p." Bypass Failed  [".k." ! ".p."]");
	          sleep(2);
	          goto b;
            }
            print r;
            print p." Bypass success [".h." ✓ ".p."]";
            sleep(2);
            print r;
            $move = ['human_move' => 1];
            $data = array_merge($data, $icon,$move);
            $data = http_build_query($data);
            $r = Bypass(host.'faucet/verify',h(),$data);
            $ss = Ambil($r," title: '","',",1);
            $ubl = Ambil($r,'<h3>','</h3>',3);
            if($ss){
                print h." [".p."Reward  -> ".$ss.h."]".n;
                print h." [".p."Balance -> ".$ubl.h."]".n;
                line();
                goto a;
            }
        }
    }
    if($capt){
        $cap = captcha($r,host."faucet");
        if(!$cap){continue;}
        $data ="csrf_token_name=$csrf&token=$tok&captcha=$capt&g-recaptcha-response=$cap&human_move=1";
        $r = Bypass(host."faucet/verify",h(),$data);
        $ss = Ambil($r," title: '","',",1);
        $ubl = Ambil($r,'<h3>','</h3>',3);
        if($ss){
            print h." [".p."Reward  -> ".$ss.h."]".n;
            print h." [".p."Balance -> ".$ubl.h."]".n;
            print h." [".p."Apikey  -> ".Api_Bal().h."]".n;
            line();
        }
    }
  }
}
cl();ban();
Save(cook);
save(user);
cl();
menu_api();
cl();
ban();
dash();
Faucet(); 
   