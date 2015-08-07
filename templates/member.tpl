<div id="container">

	<div id="body">
		<p>人員:</p>
            
	    {section name=sec1 loop=$member}
		<code>
	        ID: {$member[sec1].mid|string_format:"%d"}
	        <br>
	        名稱: {$member[sec1].mname}
	        <br>
	
	        權限: {$member[sec1].mpower}-{$member[sec1].pname}-{$member[sec1].pps}
	        <br>	
			</code>
	    {/section}
        

		<p></p>
	</div>

</div>

