{extends file="index.tpl"}

{block name=loadjs}
    <script src="/ice/static/js/noPack/Controller/Main/form-edit.js"></script>
{/block}

{block name=content}
    <form id="post-form" name="post_form">
        <input type="hidden" name="id" value="0"/>
        <label>Название</label>
        <input type="input" name="title" id="title" /><br>
        <label>Контент</label>
        <input type="input" name="body" id="body" />
        <br>
        <label>Пользователь</label>
        <select name="user">
            {foreach from=$userCollection item=user}
                <option value="{$user.id}">{$user.name}</option>
            {/foreach}
        </select>
        <br>

        <button type="submit">Создать</button>
        <button type="reset">Отмена</button>
    </form>
    Посты:
    <ul id="post-list">
        {foreach from=$postCollection item=post}
            <li post="{$post.id}" user="{$post.IU_User__id}">
                <h1 id="title">{$post.title}</h1>
                <p id="body">{$post.body}</p>
            </li>
        {/foreach}
    </ul>
{/block}