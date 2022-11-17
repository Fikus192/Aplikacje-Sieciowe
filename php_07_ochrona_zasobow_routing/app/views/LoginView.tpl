{extends file="main.tpl"}

{block name=content}

<h2 class="content-head is-center">Logowanie do systemu</h2>	

<form action="{$conf->action_url}login" method="post">
	<fieldset>
	<div class="row">
        <div class="col-12 col-12-mobile">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="col-12 col-12-mobile">
			<label for="id_pass">Password: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="col-12">
			<input type="submit" value="Zaloguj" />
		</div>
	</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
