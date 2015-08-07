<div id="container">

	<div id="body">
		<p>人員列表:</p>
            
	    {section name=sec1 loop=$member}
		<code>
	            人員名稱: {$member[sec1].name}
	        <br>
	
	        聯絡電話: {$member[sec1].phone}
	        <br>
	
	            建立時間: {$member[sec1].creation_date}
	        <br>
			</code>
	    {/section}
        

		<p></p>
	</div>

</div>

