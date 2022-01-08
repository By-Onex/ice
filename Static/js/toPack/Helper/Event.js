var Helper_Event = {
    save: function (eventName, data) {
        Controller.call(
            'Event/save',
            {
                eventName: eventName,
                data: data
            },
            function () {},
            true
        );
    }
};