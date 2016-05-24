{include file="default/message/error.tpl"}
{include file="default/message/message.tpl"}

<form name="newSite" id="newSite" method="post" action="" enctype="multipart/form-data">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control" value="{$siteData->title}">
	</div>

	<div class="form-group">
		<label for="name">Url</label>
		<input type="text" name="url" id="url" class="form-control" value="{$siteData->url}">
	</div>

	<div class="form-group">
		<label for="name">Category</label>
		<select name="category" id="category" class="form-control">
			<option value="0">No category</option>
			{if $categories}
				{foreach $categories as $category}
					<option value="{$category->id}" {if $siteData->category_id == $category->id}selected="selected"{/if}>{$category->title}</option>
				{/foreach}
			{/if}
		</select>
	</div>

	<div class="form-group">
		<label for="votes">Votes</label>
		<input type="text" name="votes" id="votes" class="form-control" value="{$siteData->votes}">
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			<label for="thumbnail">Thumbnail </label>
			<input type="file" name="thumbnail" id="thumbnail" class="form-control">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<img src="{$images}/{$siteData->thumbnail}" alt="" width="120">
		</div>
	</div>

	<div style="clear:both"></div>
	<input type="submit" name="submit" value="Update" class="btn btn-primary">

</form>