<div id="container">

	<div id="body">
		<p>Device list:</p>
            
	    {section name=sec1 loop=$member}
		<code>
	            name: {$member[sec1].name}
	        <br>
	
	        phone: {$member[sec1].phone}
	        <br>
	
	            creation_date: {$member[sec1].creation_date}
	        <br>
			</code>
	    {/section}
        

		<p></p>
	</div>

</div>

