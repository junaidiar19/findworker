/*
 Template Name: Urora - Bootstrap 4 Admin Dashboard
 Author: Mannatthemes
 Website: www.mannatthemes.com
 File: upload. Js
 */


!function($) {
    "use strict";


    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Drag atau drop untuk memilih file',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element){
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element){
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element){
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e){
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
}
(window.jQuery);



