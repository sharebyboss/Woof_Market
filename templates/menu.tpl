<div id="menubar">
  <ul id="mcolor">
			{section name=sec1 loop=$MenuLink}
					<li><a href="./{$MenuLink[sec1].link}"><font color="#000000"> {$MenuLink[sec1].menu} </font></a></li>
			{/section}
	</ul>	
</div>
