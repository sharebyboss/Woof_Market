<div id="container">

	<div id="body">
		<p>裝置列表:</p>
            
	    {section name=sec1 loop=$device}
		<code>
	        裝置名稱: {$device[sec1].name}
	        <br>
	
	        裝置位址: {$device[sec1].address}
	        <br>
	        裝置 IP : {$device[sec1].dip}
	        <br>
	
	        建立時間: {$device[sec1].creation_date}
	        <br>
			</code>
	    {/section}
        

		<p></p>
	</div>

</div>

