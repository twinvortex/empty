{include file="default/message/error.tpl"}
{include file="default/message/message.tpl"}

<form name="newSite" id="newSite" method="post" action="" enctype="multipart/form-data">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control" value="{$smarty.post.title}">
	</div>

	<div class="form-group">
		<label for="name">Url</label>
		<input type="text" name="url" id="url" class="form-control" value="{$smarty.post.url}">
	</div>

	<div class="form-group">
		<label for="name">Category</label>
		<select name="category" id="category" class="form-control">
			<option value="0">No category</option>
			{if $categories}
				{foreach $categories as $category}
					<option value="{$category->id}" {if $smarty.post.category == $category->id}selected="selected"{/if}>{$category->title}</option>
				{/foreach}
			{/if}
		</select>
	</div>

	<div class="form-group">
		<label for="votes">Votes</label>
		<input type="text" name="votes" id="votes" class="form-control" value="{$smarty.post.votes}">
	</div>

	<div class="form-group">
		<label for="thumbnail">Thumbnail</label>
		<input type="file" name="thumbnail" id="thumbnail" class="form-control">
	</div>

	<input type="submit" name="submit" value="Create" class="btn btn-primary">
</form>