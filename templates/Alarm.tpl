<div id="container">

	<div id="body">
		<p><a href='http://202.39.58.141:106/dvr/serviceCenter.php?c=alarm&type=1&duid=1000001'>產生警報</a></p>
		<p>警報列表:</p>
            
	    {section name=sec1 loop=$alarm}
		<code_alarm>
			<!---<a href="http://202.39.58.141:106/dvr/serviceCenter.php?c=dvr&duid={$alarm[sec1].duid}&aid={$alarm[sec1].aid}">-->
			<a href="http://202.39.58.141:106/dvr/serviceCenter.php?delete={$alarm[sec1].aid}&uid={$alarm[sec1].duid}">
	        裝置編號: {$alarm[sec1].ad}
	        <br>
	        裝置名稱: {$alarm[sec1].dname}
	        <br>
	        裝置位址: {$alarm[sec1].daddr}
	        <br>

            警報類型: {$alarm[sec1].tname}
	        <br>
	
	        發生時間: {$alarm[sec1].cd}
	        <br>
			<!------></a>
			<!---<a href="./{$alarm[sec1].afname}">
				<img src="./test.jpg" height="100%" border="0" hspace="0" />
			</a>--->
		</code_alarm>		
	    {/section}
        

		<p></p>
	</div>

</div>

