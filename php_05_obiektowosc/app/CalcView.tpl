{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=content}

<h2 class="content-head is-center"></h2>

	<form method="post" action="{$conf->app_url}/app/calc.php">
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
	

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Rata miesięczna: </h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}