(function ($) {
    $(function () {
        var image_file_frame;

        jQuery('#btn_select_image').on('click', function (e) {
            e.preventDefault();

            if (image_file_frame) {
                image_file_frame.open();
                return;
            }

            image_file_frame = wp.media.frames.file_frame = wp.media({
                library: { type: 'image/*' },
                multiple: false
            });

            image_file_frame.on('select', function () {
                var media_attachment = image_file_frame.state().get('selection').first().toJSON();
                jQuery('#programing_image_preview').prop('src', media_attachment.url);
                jQuery('#programing_image').val(media_attachment.url);
            });

            image_file_frame.open();

        });
    });
})(jQuery);