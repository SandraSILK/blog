tinymce.init({
    selector: '.js-textarea',
    height: 400,
    format: {
        title: 'Format',
        items: 'bold italic underline strikethrough superscript subscript code | formats | blocks heading | align | removeformat'
    },
    block_formats: 'Paragraf=p; Nagłówek=h6;',
    toolbar: ' undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | formatselect | basicShortcode | link image',
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools wordcount"
    ],
    menubar: 'edit | view | insert | format | table',
    paste_data_images: true,
});
