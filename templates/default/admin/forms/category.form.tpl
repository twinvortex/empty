{include file="default/message/error.tpl"}
{include file="default/message/message.tpl"}

<form name="newCategory" id="newCategory" method="post" action="">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control">
	</div>
	<input type="submit" name="submit" value="Create" class="btn btn-primary">
</form>