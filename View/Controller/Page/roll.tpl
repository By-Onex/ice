{extends file="index.tpl"}
{block name=content}
    Посты от {$user.name}:
    <ul>
        {foreach from=$postCollection item=post}
            <li>Пользователь {$post.IU_User__id} Заголовок {$post.title} Тело{$post.body}</li>
        {/foreach}
    </ul>
{/block}