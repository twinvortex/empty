{include file="default/message/error.tpl"}
{include file="default/message/message.tpl"}

<form name="newCategory" id="newCategory" method="post" action="">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control" value="{$title}">
	</div>
	<div class="form-group">
		<label for="slug">Slug</label>
		<input type="text" name="slug" id="slug" class="form-control" value="{$slug}">
	</div>
	<input type="submit" name="submit" value="Update" class="btn btn-primary">
</form>