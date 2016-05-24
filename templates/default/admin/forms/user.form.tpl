{include file="default/message/error.tpl"}
{include file="default/message/message.tpl"}

<form name="newUser" id="newUser" method="post" action="">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" value="{$smarty.post.name|htmlentities}">
	</div>

	<div class="form-group">
		<label for="name">Email</label>
		<input type="text" name="email" class="form-control" value="{$smarty.post.email|htmlentities}">
	</div>

	<div class="form-group">
		<label for="name">Password</label>
		<input type="text" name="password" class="form-control">
	</div>

	<input type="submit" name="submit" value="Create" class="btn btn-primary">
</form>