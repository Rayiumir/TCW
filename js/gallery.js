jQuery(document).ready(function($){

    var frame;

    $('#upload_gallery_button').on('click', function(e){
        e.preventDefault();

        if(frame){
            frame.open();
            return;
        }

        frame = wp.media({
            title: 'انتخاب عکس ها برای ایجاد گالری عکس',
            button: {
                Text: 'استفاده از این عکس ها'
            },
            multiple: true
        });

        frame.on('select', function(){
            var attachments = frame.state().get('selection').toJSON();
            var ids =[];
            var html = '';

            $.each(attachments, function(i, attachment){
                ids.push(attachment.id);
                html += '<div class="gallery_item" data-attachment-id="'+attachment.id+'">';
                html += '<img src="'+attachment.sizes.thumbnail.url+'" />';
                html += '<a href="#" class="remove-image">حذف</a>';
                html += '</div>';
            });
            $('#custom_gallery_container').html(html);
            $('#custom_gallery_input').val(ids.join(','));
        });
        frame.open();
    });

    $('#custom_gallery_container').on('click', '.remove-image', function(e){
        e.preventDefault();
        $(this).closest('.gallery_item').remove();
        var ids = [];
        $('#custom_gallery_container .gallery_item').each(function(){
            ids.push($(this).data('attachment-id'));
        });
        $('#custom_gallery_input').val(ids.join(','));
    });
});