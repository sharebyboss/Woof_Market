<div id="menubar">
  <ul id="mcolor">
			{section name=sec1 loop=$class}
					<li><a href="?m=1&c={$class[sec1].cid}"><font color="#000000"> {$class[sec1].cname} </font></a></li>
			{/section}
	</ul>	
</div>
