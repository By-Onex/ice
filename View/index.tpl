<html>

<head>
    <title>{$title|default: 'Блог'}</title>
    <script src="/cache/js.js"></script>
    {block name=loadjs}{/block}
</head>

<body>
    {include file="menu.tpl"}
    {block name=content}
        Дефолт
    {/block}
</body>

</html>