<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>{$mytitle}</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 10px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a { text-decoration: none; }

#menubar
{
	width:100%;
	//height: 40px;
	padding-top:2px;
	padding-bottom:2px;
	text-decoration: none;
	font-size: 28px;
	line-height: 30px;
}

ul
{
	list-style-type:none;
	margin:auto;
	text-align:left;
	padding-left:0px;
	padding-right:0px;
	//line-height: 30px;　　　          　/* 設定文字行距 */
}

#menubar li
{
	display:inline;
	padding:5px;
	line-height: 30px;　　　          　/* 設定文字行距 */
  letter-spacing: 6px;
}

a:hover
{
	background-color:#ffd640;
}

ul#mcolor li:hover > a
{
	 background-color:#ffd640; <!-- sets all link color when hovering to yellow  -->
}

#itemsbar
{
	//width:100%;
	//height: 30px;
	float: none;
	//padding-left:5px;
	//padding-top:5px;
	text-decoration: none;
	font-size: 24px;
}
#itemsbar ul button
{
	//columns: 2;
  //-webkit-columns: 2;
  //-moz-columns: 2;
	margin-top:30px;
	width: 120px;
	height: 40px;
	float:right;
}
#itemsbar li
{
	line-height: 40px;
	//width: 100px;
}
#itemsbar li ul
{
	display:inline;
	float:right;
	//width: 50%;
}

#itemsbar ul input
{
	//columns: 2;
  //-webkit-columns: 2;
  //-moz-columns: 2;
	//margin-top:30px;
	//width: 80px;
	//height: 40px;
	//float:right;
	text-align:right;
}
#special
{
	padding-left: 0px;
}
#cart{
	text-decoration: none;
	font-size: 24px;
}
#order_list li{
	margin:30px;
}
#cart input{
	font-size: 18px;
}
#cart li
{
	display:inline;
}
#cart button
{
	//columns: 2;
  //-webkit-columns: 2;
  //-moz-columns: 2;
	margin-top:30px;
	width: 100px;
	height: 40px;
	float:right;
}

	</style>
</head>
<body>

