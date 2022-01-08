{extends file="index.tpl"}

{block name=loadjs}
    <script src="/ice/static/js/noPack/Controller/Main/index.js"></script>
{/block}

{block name=content}
    Главная страница
    <a href="/pages">Все посты</a>
    {foreach from=$userCollection item=user}
        <a href="/pages/{$user.id}">Посты от {$user.name}</a>
    {/foreach}
{/block}