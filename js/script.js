// JavaScript Document

//navbar scroll
$(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 0);
});

// $('button').hide();
//modify buttons
let edit = function(richText, display) {
    $(display).hide();
    $(richText).parent().show();
    $(richText).html($(display).html())
    console.log($(display).html())
    console.log($(richText).html())
    $(richText).summernote({
        focus: true,
        height: 300,
        placeholder: 'write here...',
        toolbar: [
            ['basic', ['style', 'fontname']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['forecolor', 'backcolor']],
            ['block', ['ul', 'ol', 'paragraph']],
            ['media', ['link', 'picture', 'video', 'table']],
            ['height', ['height', 'cideview', 'fullscreen', 'undo', 'redo']]
        ],
        fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
            '18', '19', '20', '25', '30'
        ]
    });
}

let save = function(richText, display) {
    $(display).show();
    $(richText).parent().hide();
    $(display).html($(richText).summernote('code'));
    $('img').css({ margin: '30px' });
}

let n = 1;
let add = function(elm) {

    let box = $("<div>", {
        'id': `box${n}`,
        'class': 'contentBox  btParent'
    })

    let buttonG = $("<div>", {
        'class': "btn-group modifyBt",
        'role': 'group'
    })

    let buttonEdit = $("<button>", {
        'type': 'button',
        'class': "btn btn-secondary mr-1",
        text: 'Edit',
        'onclick': `edit('#content${n}')`
    })


    let buttonSave = $("<button>", {
        'type': 'button',
        'class': "btn btn-secondary mr-1",
        text: 'Save',
        'onclick': `save('#content${n}')`
    })


    let buttonRemove = $("<button>", {
        'type': 'button',
        'class': "btn btn-secondary",
        text: 'Remove',
        'onclick': `remove('#box${n}')`
    })


    let content = $("<div>", {
        'id': `content${n}`,
        'class': 'p-2'
    })

    buttonG.append(buttonEdit)
    buttonG.append(buttonSave)
    buttonG.append(buttonRemove)
    box.append(buttonG)

    box.append(content)

    $(elm).append(box);

    window.location = `#box${n}`

    n += 1;
}

let remove = function(elm) {
    $(elm).remove();
}