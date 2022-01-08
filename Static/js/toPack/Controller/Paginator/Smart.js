var Controller_Paginator_Smart = {
    smartPaginator: {},
            
    init: function (params) {
        if(params['pagesTotal'] > 1) {
                this.smartPaginator = new Paginator(
                params['paginatorHolderId'],
                params['pagesTotal'],
                params['pagesSpan'],
                params['currentPage'],
                params['baseUrl'],
                params['isAjax'],
                params['ajaxClass'],
                params['suffixUrl']
            );
        }
    }
};