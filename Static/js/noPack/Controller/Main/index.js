try {
    Controller.call('Page/testAjax', {},
        (data) => {
            console.log(data);
        },
        true
    );
} catch (e) {
    console.log(e);
}