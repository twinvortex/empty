{include file="default/message/error.tpl"}
{include file="default/message/message.tpl"}

<form action="" method="post" class="form-inline">
    <div class="form-group">
        <label for="galleryType">Gallery Type</label>
        <select name="gallery_type" class="form-control">
            <option value="1" selected="selected">Straight</option>
            <option value="2">Lesbian</option>
            <option value="3">Trans</option>
            <option value="4">Gay</option>
        </select><br>
        <label for="separator">Separator <i>(gallery separator)</i></label>
        <select name="separator" class="form-control">
            <option value="|" selected="selected">|</option>
        </select><br>
        <label for="select">Select Import Fields</label><br>
        <select name="field[]" class="form-control">
            <option value="0">None</option>
            <option value="1" selected="selected">Title</option>
            <option value="2">Keywords</option>
            <option value="3">Pornstars</option>
            <option value="4">URL</option>
            <option value="5">Site</option>
        </select>

        <select name="field[]" class="form-control">
            <option value="0">None</option>
            <option value="1">Title</option>
            <option value="2" selected="selected">Keywords</option>
            <option value="3">Pornstars</option>
            <option value="4">URL</option>
            <option value="5">Site</option>
        </select>

        <select name="field[]" class="form-control">
            <option value="0">None</option>
            <option value="1">Title</option>
            <option value="2">Keywords</option>
            <option value="3" selected="selected">Pornstars</option>
            <option value="4">URL</option>
            <option value="5">Site</option>
        </select>

        <select name="field[]" class="form-control">
            <option value="0">None</option>
            <option value="1">Title</option>
            <option value="2">Keywords</option>
            <option value="3">Pornstars</option>
            <option value="4" selected="selected">URL</option>
            <option value="5">Site</option>
        </select>

        <select name="field[]" class="form-control">
            <option value="0">None</option>
            <option value="1">Title</option>
            <option value="2">Keywords</option>
            <option value="3">Pornstars</option>
            <option value="4">URL</option>
            <option value="5" selected="selected">Site</option>
        </select>

        <br><br>

        <label for="galleries">List of Galleries</label><br>
                    <textarea name="galleries" id="galleries" rows="15" cols="100"
                              class="form-control"></textarea><br><br>

        <input type="submit" name="submit" value="Import" class="btn btn-primary">

    </div>
</form>