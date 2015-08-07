<!DOCTYPE html>
<html>
<head>
{if !$deviceIP}
	<meta http-equiv="refresh" content="5">
{/if}
	<meta charset="utf-8">
	<title>{$mytitle}</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 10px;
		{if $isMobile eq true}
			font: 13px/20px normal Helvetica, Arial, sans-serif;
		{else}
			font: 13px/20px normal Helvetica, Arial, sans-serif;
		{/if}
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		{if $isMobile eq true}
			font-size: 19px;
		{else}
			font-size: 19px;
		{/if}
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		{if $isMobile eq true}
			font-size: 12px;
		{else}
			font-size: 12px;
		{/if}
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	code_alarm {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		{if $isMobile eq true}
			font-size: 12px;
		{else}
			font-size: 12px;
		{/if}
		background-color: red;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
		-webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
    height: 80px;
	}
	a { text-decoration: none; }

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		{if $isMobile eq true}
			font-size: 11px;
		{else}
			font-size: 11px;
		{/if}
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#menubar
{
	width:900px;
	height: 30px;
	padding-top:5px;
	padding-bottom:5px;
	text-decoration: none;
		{if $isMobile eq true}
			font-size: 11px;
		{else}
			font-size: 11px;
		{/if}
}



ul
{
	list-style-type:none;
	margin:auto;
	text-align:left;
	padding-left:50px;
	padding-right:50px;
	
}

li
{
	display:inline;
	padding:10px;
	
}

a:hover
{
	background-color:#ffd640;
}

ul#mcolor li:hover > a
{
	 background-color:#ffd640; <!-- sets all link color when hovering to yellow  -->
}

	
	
	</style>
</head>
<body>
<h1><a href='serviceCenter.php'>Service Center</a></h1>
