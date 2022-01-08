const A_TYPE = {
    create: "Create",
    edit: 'Update',
    remove: 'Delete'
}

let action = A_TYPE.create;

$(function() {

    $('#post-form').on('submit', function(e) {

        e.preventDefault();
        let data = convertFormData($(this).serializeArray());
        data.action = action;
        console.log('submit', data);
        Controller.call('Page/submit', data, formCB, true);
    });

    $('#post-list').on('click', 'li', function(e) {
        setFormData(this);
    });

    $('#post-form > button[type="reset"]').on('click', function() {
        $('#post-form > input[name="id"]').val(0);
        $('#post-form > button[type="submit"]').text('Создать');
        action = A_TYPE.create;
        const delBtn = $('#post-form').find('button[name="delete"]');
        if (delBtn) $(delBtn).remove();
    });
});

function formCB(result) {
    console.log(result);
    if (result.error) {
        alert(result.error.message);
        if (result.error.formInput) {
            $(`#post-form > input[name="${result.error.formInput}"]`).trigger('focus');
        }
    } else {
        switch (result.data.action) {
            case A_TYPE.create:
                createPost(result.data);
                break;
            case A_TYPE.edit:
                updatePost(result.data);
                break;
            case A_TYPE.remove:
                deletePost(result.data.id);
                break;
            default:
                break;
        }
    }
}

function convertFormData(data) {
    let result = {};
    for (const {
            name,
            value
        }
        of data) {
        result[name] = value;
    }
    return result;
}

function setFormData(post) {
    const id = $(post).attr("post");
    const title = $(post).children("#title").text();
    const body = $(post).children("#body").text();
    const user = $(post).attr("user");

    $('#post-form > input[name="id"]').val(id);
    $('#post-form > input[name="title"]').val(title);
    $('#post-form > input[name="body"]').val(body);
    $('#post-form > select[name="user"]').val(user);

    $('#post-form > button[type="submit"]').text('Изменить');

    action = A_TYPE.edit;

    $('#post-form').append(`<button name="delete">Удалить</button>`);


    $('#post-form > button[name="delete"]').on('click', function() {
        action = A_TYPE.remove;
    });
}

function createPost(data) {
    $('#post-list').append(
        `<li post="${data.id}" user="${data.IU_User_id}">
            <h1 id="title">${data.title}</h1>
            <p id="body">${data.body}</p>
        </li>`);

    $('#post-form > button[type="reset"]').trigger('click');
}

function updatePost(data) {
    const post = $(`li[post=${data.id}]`);

    $(post).children("#title").text(data.title);
    $(post).children("#body").text(data.body);
    $(post).attr("user", data.IU_User_id);
}

function deletePost(id) {
    const post = $(`li[post=${id}]`);
    $(post).remove();
    $('#post-form > button[type="reset"]').trigger('click');
}