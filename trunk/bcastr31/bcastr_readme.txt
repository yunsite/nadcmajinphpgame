Bcastr 3.1 flash 通用图片轮换播放器
2007-1-6 20:2:37


bcastr3.1 通用图片轮换播放器
可以用于各种新闻系统或者blog系统


.可以读取xml设置播放列表,自定义xml地址
.可以将图片地址直接写网页中直接,不需要xml
.自动适应图片大小
.循环播放，自定义自动播放时间
.不限制图片数量
.自定义尺寸,自动适应任何比例，图片不变形
.自定义图片题目（可选）
.浏览过程中下载
.自定义图片连接（可选）
.自定界面色彩放案

3.1 修正
增加了可以用"^"符号替换"&"的功能，使用与用程序生成的地址
修改了传递参数的方式，并且兼容老版本的参数传递方式

3.0新增特点

.图片自动抗锯齿，效果更佳
.3种文字位置设定
.4种图片过渡效果，过渡更自然，
.可定义是否显示按钮，更适合做广告条
.可定义是否在心窗后中打开连接

.自定义尺寸,自动适应任何比例，图片不变形
.自定义图片题目（可选）
.浏览过程中下载
.自定义图片连接（可选）
.自定界面色彩放案


三种使用方法

由于flashplayer9 升级了安全策略问题，所以需要保证所有的的文件（包括，bcastr3.swf,图片文件，或者需要的xml文件）都必须在统一域名下，不能在跨域读取图片和xml了

方法一，直接copy下面代码，修改其中的 swf_width，swf_height，files，links，texts 参数


<script type="text/javascript">

var swf_width=220
var swf_height=220
var files='http://www.ruochi.com/product/bcastr/pic/gymnasium.jpg|http://www.ruochi.com/product/bcastr/pic/zd.jpg|http://www.ruochi.com/product/bcastr/pic/adidas.jpg|http://www.ruochi.com/product/bcastr/pic/Maradona.jpg|http://www.ruochi.com/product/bcastr/pic/poster.jpg'
var links='http://www.ruochi.com|http://www.ruochi.com|http://www.ruochi.com|http://www.ruochi.com|http://www.ruochi.com'
var texts='安联球场|齐达内|马拉多纳解说世界杯|Adidas的世界杯用球|世界杯海报'

document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="http://www.ruochi.com/product/bcastr3/bcastr31.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
document.write('<embed src="http://www.ruochi.com/product/bcastr3/bcastr31.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 


</script>

 



方法二，直接嵌入地址

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="400" height="200">
	<param name="movie" value="http://www.ruochi.com/product/bcastr3/bcastr31.swf">
	<param name="quality" value="high">
	<param name="wmode" value="transparent">
	<param name="FlashVars" value="bcastr_file=http://www.ruochi.com/product/bcastr3/pic/a1.jpg|http://www.ruochi.com/product/bcastr3/pic/a2.jpg|http://www.ruochi.com/product/bcastr3/pic/a3.jpg|http://www.ruochi.com/product/bcastr3/pic/a4.jpg&bcastr_link=http://www.google.com|http://www.baidu.com|http://www.google.com|http://www.baidu.com&bcastr_title=Title 1|Title 2|Title 3|Title 4">	
	<embed src="http://www.ruochi.com/product/bcastr3/bcastr31.swf" FlashVars="bcastr_file=aaa.jpg|bbb.jpg|ccc.swf&bcastr_link=http://www.baidu.com|http://www.nba.com|http://www.ruochi.com&bcastr_title=百度|NBA|Ruochi.com" width="400" height="200" loop="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" salign="T" name="scriptmain" menu="false" wmode="transparent"></embed>
</object>

 

其中
bcastr_file=aaa.jpg|bbb.jpg|ccc.swf 是图片地址，用"|"符号分开
bcastr_link=http://www.baidu.com|http://www.nba.com|http://www.ruochi.com 是图片对应连接地址，用"|"符号分开
bcastr_title=百度|NBA|Ruochi.com 是图片对应标题，用"|"符号分开

注意其中的&连接符

方法三，使用xml地址
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="200">
	<param name="movie" value="http://www.ruochi.com/product/bcastr3/bcastr31.swf">
	<param name="quality" value="high">
	<param name="wmode" value="transparent">
	<param name="FlashVars" value="bcastr_xml_url=http://www.ruochi.com/product/bcastr3/bcastr.xml&IsShowBtn=0">
	<embed src="http://www.ruochi.com/product/bcastr3/bcastr31.swf" FlashVars="bcastr_xml_url=http://www.ruochi.com/product/bcastr3/bcastr.xml&IsShowBtn=0" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="200"></embed>
</object>

 

修改上方2个bcastr_xml_url=http://www.ruochi.com/product/bcastr3/bcastr.xml地址即可

xml内容

item_url="pic/Maradona.jpg" 图片地址
link="http://www.google.com" 图片点击后 不填写就不可点击连接
itemtitle="马拉多纳受邀解说世界杯" 图片题目


高级设置

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="400" height="200">
	<param name="movie" value="http://www.ruochi.com/product/bcastr3/bcastr31.swf">
	<param name="quality" value="high">
	<param name="wmode" value="transparent">
	<param name="FlashVars" value="bcastr_file=http://www.ruochi.com/product/bcastr3/pic/a1.jpg|http://www.ruochi.com/product/bcastr3/pic/a2.jpg|http://www.ruochi.com/product/bcastr3/pic/a3.jpg|http://www.ruochi.com/product/bcastr3/pic/a4.jpg&bcastr_link=http://www.google.com|http://www.baidu.com|http://www.google.com|http://www.baidu.com&bcastr_title=Title 1|Title 2|Title 3|Title 4&TitleTextColor=0x000000&TitleBgColor=0x0066ff">	
	<embed src="http://www.ruochi.com/product/bcastr3/bcastr31.swf" FlashVars="bcastr_file=http://www.ruochi.com/product/bcastr3/pic/a1.jpg|http://www.ruochi.com/product/bcastr3/pic/a2.jpg|http://www.ruochi.com/product/bcastr3/pic/a3.jpg|http://www.ruochi.com/product/bcastr3/pic/a4.jpg&bcastr_link=http://www.google.com|http://www.baidu.com|http://www.google.com|http://www.baidu.com&bcastr_title=Title 1|Title 2|Title 3|Title 4&TitleTextColor=0x000000&TitleBgColor=0x0066ff" width="400" height="200" loop="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" salign="T" name="scriptmain" menu="false" wmode="transparent"></embed>
</object>

 

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="400" height="80">
	<param name="movie" value="http://www.ruochi.com/product/bcastr3/bcastr31.swf">
	<param name="quality" value="high">
	<param name="wmode" value="transparent">
	<param name="FlashVars" value="bcastr_file=http://www.ruochi.com/product/bcastr3/pic/a1.jpg|http://www.ruochi.com/product/bcastr3/pic/a2.jpg|http://www.ruochi.com/product/bcastr3/pic/a3.jpg|http://www.ruochi.com/product/bcastr3/pic/a4.jpg&bcastr_link=http://www.google.com|http://www.baidu.com|http://www.google.com|http://www.baidu.com&bcastr_title=&IsShowBtn=0">	
	<embed src="http://www.ruochi.com/product/bcastr3/bcastr31.swf" FlashVars="bcastr_file=http://www.ruochi.com/product/bcastr3/pic/a1.jpg|http://www.ruochi.com/product/bcastr3/pic/a2.jpg|http://www.ruochi.com/product/bcastr3/pic/a3.jpg|http://www.ruochi.com/product/bcastr3/pic/a4.jpg&bcastr_link=http://www.google.com|http://www.baidu.com|http://www.google.com|http://www.baidu.com&bcastr_title=&IsShowBtn=0" width="400" height="80" loop="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" salign="T" name="scriptmain" menu="false" wmode="transparent"></embed>
</object>

 

所有参数说明

参数名称 参数说明 默认值 
bcastr_file 图片地址参数，多个使用|分开，与方法2配合使用 空 
bcastr_title 图片标题参数，多个使用|分开，与方法2配合使用 空 
bcastr_link 图片连接参数，多个使用|分开，与方法2配合使用 空 
bcastr_xml 方法3 传递图片参数，样板参考 http://www.ruochi.com/product/bcastr3/bcastr.xml  bcastr.xml 
TitleTextColor 图片名称文字颜色 0xFFFFFF 
TitleBgColor 图片名称文字背景颜色 0xFF6600 
TitleBgAlpha 图片名称文字背景颜色透明度：0-100值，0表示全部透明 60 
TitleBgPosition 图片名称文字位置，0表示文字在顶端，1表示文字在底部，2表示文字在顶端浮动 100 

BtnDefaultColor 按键默认的颜色 0xFF6600 
BtnOverColor 按键当前的颜色 0x000033 
AutoPlayTime 自动播放时间：单位是秒 8 
Tween 图片过渡效果：0，表示亮度过渡，1表示透明度过渡，2表示模糊过渡，3表示运动模糊过渡 2 
IsShowBtn 是否显示按钮：1表示显示按键，0表示隐藏按键，更适合做广告挑轮换 1 
WinOpen 打开窗口：_blank表示新窗口打开。_self表示在当前窗口打开 _blank 

 

下载地址
http://www.ruochi.com/product/bcastr3/bcastr31.zip


欢迎测试，并提意见建议






使用条款:
本软件完全免费,甚至可用作商业用途。
但不可对本软件进行反编译,修改和再次分发。
提供付费的个性化修改服务


有任何建议,可以发到:
http://www.ruochi.com/guest_book/
或者 ruochi_com@163.com


Created By Ruochi.com
http://www.Ruochi.com
2006-7-6
