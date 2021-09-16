// JavaScript Document

//navbar scroll
$(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 0);
});

let toggle = function() {
    console.log('asd')
    let edit = false;
    if (!edit) {
        $(".summernot").summernote({
            focus: true,
            toolbar: [
                ['basic', ['style', 'fontname']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['forecolor', 'backcolor']],
                ['block', ['ul', 'ol', 'paragraph']],
                ['media', ['link', 'picture', 'video', 'table', 'hr']],
                ['height', ['height', 'cideview', 'fullscreen', 'undo', 'redo']]
            ],
            fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                '18', '19', '20', '25', '30'
            ]
        });
    } else {
        $(".summernot").summernote('destory');
    }
    edit = !edit;

}

$(document).ready(function() {
    $('.summernote').summernote({
        toolbar: [
            ['basic', ['style', 'fontname']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['forecolor', 'backcolor']],
            ['block', ['ul', 'ol', 'paragraph']],
            ['media', ['link', 'picture', 'video', 'table', 'hr']],
            ['height', ['height', 'cideview', 'fullscreen', 'undo', 'redo']]
        ],
        fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
            '18', '19', '20', '25', '30'
        ]
    });


})