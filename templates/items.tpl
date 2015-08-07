<div id="container">

	<div id="body">
		<p>項目:</p>
            
	    {section name=sec1 loop=$items}
		<code>
	        ID: {$items[sec1].iid|string_format:"%d"}
	        <br>
	        類別: {$items[sec1].iclass|string_format:"%06d"}-{$items[sec1].cname}
	        <br>
	
	        名稱: {$items[sec1].iname}
	        <br>
	
	        價格: {$items[sec1].iprice|string_format:"%.02f"}
	        <br>	
	        備註: {$items[sec1].ips}
	        <br>
			</code>
	    {/section}
        

		<p></p>
	</div>

</div>

