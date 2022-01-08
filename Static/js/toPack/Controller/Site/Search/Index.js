/**
 * Контроллер блока поиска
 *
 * @author neon
 */
var Controller_Site_Search_Index = {

    selectedChoice: {
        services: [],
        locations: []
    },
    
    getThis: function()
    {
        return Controller_Site_Search_Index;
    },

    init: function()
    {
        var $this = this,
            $rootContainer = $('.search.default-indent'),
            $tabContainer = $rootContainer.find('.search__tabs');
        Helper_Tab.init({
            '$tab':         $('.search__tab', $tabContainer),
            '$tabContent':  $('.tabContent', $rootContainer),
            'active':       'search__tab_state_active',
            'callback':     function($container) {
                Helper_Tab_Loader.load($container, function(result) {
                    $this.initTab($container);
                    $this.addActiveOptions($this.selectedChoice);
                });
            }
        });
        this.initEvents();
        this.initActiveTab();
        var $searchFormClinic = $('.js-search-form-clinic');
        $searchFormClinic.on('submit', function(e) {
            e.preventDefault();
            $this.submitSearch(this, 'clinic');
            return false;
        });
        var $searchForm = $('.js-search-form-doctor');
        $searchForm.on('submit', function(e) {
            e.preventDefault();
            $this.submitSearch(this, 'doctor');
            return false;
        });
    },

    initActiveTab: function()
    {
        var $activeTabContent = $('.tabContent[isLoaded=true]');
        if ($activeTabContent) {
            this.initTab($activeTabContent);
        }
    },

    initEvents: function()
    {
        var self = this.getThis();
        var $container = $('.tabContent[isLoaded=true]');
        $('.chzn-select', $container).each(function(){
            self.addSelected($(this));
        });
        $('.chzn-select', $container).on('change', function() {
            self.addSelected($(this));
        });
        $('.searchTabsContainer li').click(function(){
            self.removeChoice();
            self.addActiveOptions(self.selectedChoice);
        });
        $('#js-viewFilterForm').click(function(){
            $('#js-clinicsSearchExtend').toggleClass('hidden');
        });
    },
    
    /**
     * Добавить выбранное в this.selectedChoice
     */
    addSelected:function($select) {
        var name, self = this;
        if ($select.is('[name^="location"]')) {
            name = 'locations';
        }
        if ($select.is('[name^="service"]')) {
            name = 'services';
        }
        self.selectedChoice[name] = [];
        $('option:selected', $select).each(function(){
            self.selectedChoice[name].push($(this).val());
        });
    },

    initTab: function($container)
    {
        $('.searchTabContentsContainer').removeClass('hidden');
        $('.chzn-select', $container).chosen();
        var $clinicServiceContainer = $("#clinic_service");
        $clinicServiceContainer.chosen({
            max_selected_options: 4
        });
        $clinicServiceContainer.on('change', function(){
            var clinicServiceContainerParent = $clinicServiceContainer.parent();
            $(clinicServiceContainerParent).height(clinicServiceContainerParent.find('.chzn-choices').height() - 3)
        });
    },

    initSuggestion: function() {
        $('#search-suggestion').bind('click', function() {
            var suggestion = $('#search-suggestion').text();
            $('#search-string').val(suggestion);
            $('#search-button').click();
        });
    },
    
    /**
     * Добавить выбранные опции в инпут
     */
    addActiveOptions: function(data) {
        var $container = $('.tabContent[isLoaded=true]');
        if (data.locations) {
            var index = 0;
            for (index; index < data.locations.length; index++) {
                $('option[value="' + data.locations[index] + '"]').attr('selected', true);
            }
        }
        if (data.services) {
            var index = 0;
            for (index; index < data.services.length; index++) {
                $('option[value="' + data.services[index] + '"]').attr('selected', true);
            }
        }
        $('.chzn-select', $container).trigger("liszt:updated");
    },
    
    removeChoice: function() {
        var $container = $('.tabContent[isLoaded=true]');
        $('option', $container).removeAttr('selected');
        $('li.search-choice').remove();
        $('.chzn-select', $container).trigger("liszt:updated");
    },

    /**
     * Удаляет из get запроса пустые поля
     * @param form
     * @param model
     */
    submitSearch: function(form, model) {
        var $this = $(form);
        var data = Helper_Form.asArrayWCheck($this);
        var clearData = {};
        if (data && data['errorRequired'] === false) {
            for (var property in data) {
                if (!data.hasOwnProperty(property) || property === 'errorRequired' || !data[property]) {
                    continue;
                }
                clearData[property] = data[property];
            }
        }
        var params = $.param(clearData);
        var request = '/search/' + model + '/?' + params + '#' + model;
        window.location.href = request;
    }
};