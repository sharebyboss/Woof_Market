	<li>
		<a href="?m=d">清除購物車</a>
	</li>
<div id="cart">
  <form class="pure-form" method="POST" action="edit.php?m=add">
	{section name=sec1 loop=$orders}
  		<ul id="icolor" id="order_list">
						<li>
							<input name="orders['oname'][]" value="{$orders[sec1].3}" size="8">
						</li>
						<li>
							<input name="orders['ospecial'][]" value="{$orders[sec1].4}" size="10">
						</li>
						<li>
							<input name="orders['onumber'][]" value="{$orders[sec1].2}" size="1">
						</li>
			</ul>
	{/section}			
	<button type="submit" name="submit" class="pure-button">確認訂單</button>
	</form>
</div>
