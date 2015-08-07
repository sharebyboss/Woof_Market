
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">

<html>



<head>

<meta http-equiv="Content-Type" content="text/html">

<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

<title>Camera01</title>

</head>



<body>

<form method="POST" action="http://{$deviceIP}/cgi-bin/wapopen">

<table id="VTable" cellpadding="0" cellspacing="0" style="position:absolute; left:20; top:60">

	<!-- MSTableType="layout" -->
	<tr>

		<td>
			{section name=sec1 loop=$deviceInfo}
				<b>裝置編號: </b>【{$deviceInfo[sec1].uid}】
				<b>裝置名稱: </b>【{$deviceInfo[sec1].name}】<br>
				<b>裝置位址: </b>【{$deviceInfo[sec1].address}】
				<b>裝置 IP : </b>【{$deviceInfo[sec1].dip}】
				<b><a href="./serviceCenter.php?delete={$deviceInfo[sec1].id}&uid={$deviceInfo[sec1].uid}">解除警報</a></b>
			{/section}
		</td>
  </tr>

	<tr>

		<td valign="top" align="left"><img name="VPic0" onload="picUpdate(0,0)" onerror="picUpdate(0,0)" src="http://{$deviceIP}/cgi-bin/wappaint?camera_no=0&animation=0&name=11&password=11&time=1436422365&pic_size=3" width="640" height="480" border="1" hspace="0" /></td>

		<td valign="top" align="right">
  </tr>

	<tr>

		<td valign="bottom" align="left">
		<td valign="bottom" align="right">
  </tr>


</table>

	<input type=hidden name=FILECAMERA value=camera.htm>

	<input type=hidden name=NAME value=11>

	<input type=hidden name=PWD value=11>

  <input type=hidden name=PIC_SIZE value=3>

  <input type=hidden name=NO value=CAM_00>

</form>

<script type="text/javascript">

num_of_cameras = 1

{

	var w, h, i, sw = screen.width, sh=screen.height - 30;

	var table = document.getElementById("VTable");

	h = sw * 3 / 4;

	if(h < sh)

		w = sw;

	else{

		w = sh * 4 / 3;

		if(w < sw)

			h = sh;

		else

			w = h = 0;

	}

	if(!w || !h || (document.images["VPic0"].width > w) || (document.images["VPic0"].height > h)){

		w = document.images["VPic0"].width;

		h = document.images["VPic0"].height;

	}

	if(w && h){

		for(i=0; i<num_of_cameras; i++){

			if(num_of_cameras > 1){

				document.images["VPic" + i].width = w/2;

				document.images["VPic" + i].height = h/2;

			}

			else{

				document.images["VPic" + i].width = w;

				document.images["VPic" + i].height = h;

			}

		}

		table.style.width=String(w)+"px";

		table.style.height=String(h)+"px";

	}

}

function picUpdate(id,cam_id)

{

	uniq = new Date();

	uniq = "?" + uniq.getTime() + "." + uniq.getMilliseconds()

	document.images["VPic" + id].src = "http://{$deviceIP}/cgi-bin/wappaint?camera_no=" + cam_id + "&animation=0&name=11&password=11&time=1436422365&pic_size=3" + uniq

}

</script>

</body>



</html>
