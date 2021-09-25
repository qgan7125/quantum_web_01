// JavaScript Document

//navbar scroll
$(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 0);
});

// $('button').hide();
//modify buttons
let edit = function(richText, display) {
    $('#' + display).hide();
    $('#' + richText).parent().parent().show();
    $('#' + richText).html($('#' + display).html())
    tinymce.init({
        selector: '#' + richText,
        toolbar: "code | undo redo | styleselect | bold italic | fontselect fontsizeselect forecolor backcolor| numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent| link unlink image imagetools quickimage| paste searchreplace",
        plugins: "code  image  paste link quickbars lists searchreplace table",
        menubar: 'edit view insert format table ',
        paste_data_images: true,
        height: 400
    });
}

let save = function(richText, display) {
    $('#' + display).show();
    $('#' + richText).parent().parent().hide();
    $('#' + display).html(tinymce.get(richText).getContent());
    tinyMCE.triggerSave();
    $.ajax({
        type: 'POST',
        url: 'db_request.php',
        data: $('#postForm').serialize(),
        success: function(data, status, request) {
            console.log('success')
            console.log($('#postForm').serialize())
        },
        error: function(req, status, error) {
            console.log('error')
        }
    })
}

let n = 1;
let add = function(elm) {

    let box = $("<div>", {
        'id': `box${n}`,
        'class': 'contentBox  btParent'
    })

    // buttons 
    let buttonG = $("<div>", {
        'class': "btn-group modifyBt",
        'role': 'group'
    })

    let buttonEdit = $("<button>", {
        'type': 'button',
        'class': "btn btn-secondary mr-1",
        text: 'Edit',
        'onclick': `edit('content${n}','display${n}')`
    })


    let buttonSave = $("<button>", {
        'type': 'button',
        'class': "btn btn-secondary mr-1",
        text: 'Save',
        'onclick': `save('content${n}', 'display${n}')`
    })


    let buttonRemove = $("<button>", {
        'type': 'button',
        'class': "btn btn-secondary",
        text: 'Remove',
        'onclick': `remove('#box${n}')`
    })

    // contents
    let display = $("<div>", {
        'id': `display${n}`,
        'class': 'p-4'
    })

    let textBox = $("<div>", {
        'id': `textBox${n}`,
        'style': 'display:none;'
    })


    let content = $("<textarea>", {
        'id': `content${n}`,
        'class': 'p-2'
    })

    buttonG.append(buttonEdit)
    buttonG.append(buttonSave)
    buttonG.append(buttonRemove)
    box.append(buttonG)
    box.append(display)
    textBox.append(content)
    box.append(textBox)

    $("#" + elm).append(box);

    window.location = `#box${n}`

    n += 1;
}

let remove = function(elm) {
    $(elm).remove();
    n--;
}