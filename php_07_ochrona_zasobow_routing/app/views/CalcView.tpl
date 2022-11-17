{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<span style="float:bottom;">Użytkownik: {$user->login}, Rola: {$user->role}</span>
</div>

	<form method="post" action="{$conf->action_root}calcCompute">
		<div class="row">
			<div class="col-12 col-12-mobile">
				<label for="id_amount">Kwota zobowiązania: </label>
				<input id="id_amount" type="text" placeholder="Kwota" name="amount" value="{$form->amount}" /><br />
			</div>
			<div class="col-12 col-12-mobile">
				<label for="id_years">Długość zobowiązania w latach: </label>
				<input id="id_years" type="text" placeholder="Rok" name="years" value="{$form->years}" /><br />
			</div>
			<div class="col-12 col-12-mobile">	
				<label for="id_rate">Oprocentowanie: </label>
				<input id="id_rate" type="text" placeholder="Procent" name="rate" value="{$form->rate}" /><br />
			</div>
			<div class="col-12">
				<input type="submit" value="Oblicz" />
			</div>
		</div>		
	</form>
	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="res">
	Rata miesieczna: {$res->result}
</div>
{/if}
	
{/block}