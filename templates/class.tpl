<div id="container">

	<div id="body">
		<p>類別:</p>
            
	    {section name=sec1 loop=$class}
		<code>
	        ID: {$class[sec1].cid|string_format:"%06d"}
	        <br>
	
	        名稱: {$class[sec1].cname}
			</code>
	    {/section}
        

		<p></p>
	</div>

</div>

