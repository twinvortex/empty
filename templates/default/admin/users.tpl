{extends file="admin.layout.tpl"}

{block name="menu_title"}Users <a href="{$dashboard}/users?exec=new" class="btn btn-primary">New User</a>{/block}

{block name="content"}
	{if $smarty.get.exec == 'new'}
		<div class="col-sm-6">
			<h3>New User</h3>
			{include file="admin/forms/user.form.tpl"}
		</div>
		<div style="clear:both"></div>
	{/if}

	{if $smarty.get.exec == 'edit' && $smarty.get.id|is_numeric}
		<div class="col-sm-6">
			<h3>Edit User</h3>
			{include file="admin/forms/edit_user.form.tpl"}
		</div>
		<div style="clear:both"></div>
	{/if}

	{if $users|count > 0}
		<div class="col-sm-12">
			<h3>List of users</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>IP</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{foreach $users as $user}
						<tr>
							<td width="15">{$user->id}</td>
							<td>{$user->name}</td>
							<td>{$user->email}</td>
							<td>{$user->ip}</td>
							<td>
								<a href="{$dashboard}/users?exec=edit&id={$user->id}">Edit</a> |
								<a href="{$dashboard}/users?exec=delete&id={$user->id}" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
			{$pagination}
		</div>
	{else}
		<div class="alert alert-info" style="margin-top:20px;">
			No users!
		</div>
	{/if}

{/block}