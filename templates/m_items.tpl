<div id="itemsbar">
  <form class="pure-form" method="POST" action="edit.php?m=cart">
  <ul id="icolor">
			{section name=sec1 loop=$items}
					<li>
						<a href="?m=1&c={$c}&i={$items[sec1].iid}"><font color="#000000"> {$items[sec1].iname} </font></a>
						<input type="hidden" value="{$items[sec1].iname}" name="ipt_hidden_name[{$items[sec1].iid}]" id="ipt_hidden_name[{$items[sec1].iid}]" size="9">
					</li>
					{if $i eq $items[sec1].iid}
						<li id="special">
							<input value="" name="ipt_show[{$items[sec1].iid}]" id="ipt_show[{$items[sec1].iid}]" size="9">
 
 							{section name=sec2 loop=$specials}
 								{if $c eq $specials[sec2].sclass}
								<input type="button" onclick=" var num= '{$specials[sec2].ssid}|'; document.getElementById('ipt_hidden[{$items[sec1].iid}]').value+=num; document.getElementById('ipt_show[{$items[sec1].iid}]').value+= '{$specials[sec2].sfname}' ;" value="{$specials[sec2].sname}">
								{/if}
							{/section}
							<ul>
								<input type="button" onclick="document.getElementById('ipt[{$items[sec1].iid}]').value--;" value="-">
								<input value="0" name="ipt[{$items[sec1].iid}]" id="ipt[{$items[sec1].iid}]" size="1px">
								<input type="button" onclick="document.getElementById('ipt[{$items[sec1].iid}]').value++;" value="+">
							</ul>
							<input value="" name="ipt_hidden[{$items[sec1].iid}]" id="ipt_hidden[{$items[sec1].iid}]" size="9">
						</li>
					{/if}
			{/section}			
			<button type="submit" name="submit" class="pure-button">加入購物車</button>
	</ul>
	</form>
</div>
