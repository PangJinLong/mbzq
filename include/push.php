<?php
/***神马+百度MIP主动推送***/
/**********************************函数解释*********************************************************

当前域名：$_SERVER['HTTP_HOST']
随机数字：momifw0u9p_gv_4w(6)   6为长度，长度可自定义
随机字符：ou4f9ioz1iatpqkl(5)   5为长度，长度可自定义

****************************************************************************************************/

$urls = array(

/*以下是推送的URL地址，默认推送4条，可自定义增加或删减*/

    'http://'.$_SERVER['HTTP_HOST'].'/'.ou4f9ioz1iatpqkl(5),
    'http://'.$_SERVER['HTTP_HOST'].'/'.ou4f9ioz1iatpqkl(5).'/'.momifw0u9p_gv_4w(6).'.html',
    'http://'.$_SERVER['HTTP_HOST'].'/'.ou4f9ioz1iatpqkl(5).'/'.ou4f9ioz1iatpqkl(5).'.html',
    'http://'.$_SERVER['HTTP_HOST'].'/'.ou4f9ioz1iatpqkl(5).'/'.ou4f9ioz1iatpqkl(5).'.XML'
	
/*以上是推送的URL地址，默认推送4条，可自定义增加或删减*/
	
);


/***********************************以下是推送代码，有能力的话可以自己二次开发推送代码！******************************************/
$apiarr = array(

/***将以下推送接口替换成自己的【神马】与【百度】的推送接口即可！***/

    'http://data.zhanzhang.sm.cn/push?site=www.xxxx.win&user_name=1662383315@qq.com&resource_name=mip_add&token=TI_a11b85869ad3c34f9cbe54a19f4163',
    'http://data.zz.baidu.com/urls?site=www.xxxxx.win&token=tSreGo1HoiuOIg5Ub&type=mip'
	
/***将以上推送接口替换成自己的【神马】与【百度】的推送接口即可！***/	
	
);

for($i=0;$i<2;$i++){
$api = $apiarr[$i];
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
}