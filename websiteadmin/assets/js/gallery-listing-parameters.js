//dropzone script with multiple files
(function($) {
    function readMultiUploadURL(input, callback) {
        if (input.files) {
            $.each(input.files, function(index, file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    callback(false, e.target.result);
                }
                reader.readAsDataURL(file);
            });
        }
        callback(true, false);
    }
    var arr_multiupload = $("span[data-multiupload]");
    if (arr_multiupload.length > 0) {
        $.each(arr_multiupload, function(index, elem) {
            var container_id = $(elem).attr("data-multiupload");
            var id_multiupload_img = "multiupload_img_" + container_id + "_";
            var id_multiupload_img_remove = "multiupload_img_remove" + container_id + "_";
            var id_multiupload_file = id_multiupload_img + "_file";
            var block_multiupload_src = "data-multiupload-src-" + container_id;
            var block_multiupload_holder = "data-multiupload-holder-" + container_id;
            var block_multiupload_fileinputs = "data-multiupload-fileinputs-" + container_id;
            var input_src = $(elem).find("input[data-multiupload-src]");
            $(input_src).removeAttr('data-multiupload-src')
                .attr(block_multiupload_src, "");
            var block_img_holder = $(elem).find("span[data-multiupload-holder]");
            $(block_img_holder).removeAttr('data-multiupload-holder')
                .attr(block_multiupload_holder, "");
            var block_fileinputs = $(elem).find("span[data-multiupload-fileinputs]");
            $(block_fileinputs).removeAttr('data-multiupload-fileinputs')
                .attr(block_multiupload_fileinputs, "");
            $(input_src).on('change', function(event) {
                readMultiUploadURL(event.target, function(has_error, img_src) {
                    if (has_error == false) {
                        addImgToMultiUpload(img_src);
                    }
                })
            });

            function addImgToMultiUpload(img_src) {

                var id = Math.random().toString(36).substring(2, 10);
                var request_id = $("#request_id").val();
                
                 console.log(request_id);
                $.post('https://www.aber-sa.com/request/doAddimage', {
                        img_src: img_src,
                        img_id: id,
                        request_id:request_id
                    },
                    function(data) {

                    });



                var html = '<div class="upload-photo" id="' + id_multiupload_img + id + '">' +
                    '<span class="upload-close">' +
                    '<a href="javascript:void(0)" id="' + id_multiupload_img_remove + id +
                    '" ><i class="fal fa-trash-alt"></i></a>' +
                    '</span>' +
                    '<img src="' + img_src + '" >' +
                    '</div>';
                var file_input = '<input type="file" name="file[]" id="' + id_multiupload_file + id +
                    '" style="display:none" />';
                $(block_img_holder).append(html);
                $(block_fileinputs).append(file_input);
                bindRemoveMultiUpload(id);
            }

            function bindRemoveMultiUpload(id) {
                $("#" + id_multiupload_img_remove + id).on('click', function() {
                    $("#" + id_multiupload_img + id).remove();
                    $("#" + id_multiupload_file + id).remove();
                    var request_id = $("#request_id").val();
                    $.post('https://www.aber-sa.com/request/doDeletImage', {
                            request_id:request_id,
                            img_id: id
                        },
                        function(data) {
                            console.log(data);
                        });
                });
            }
        });
    }
})(jQuery);

function bindRemoveMultiUpload_new(id) {

    $("#multiupload_img_1_" + id).remove();
    var request_id = $("#request_id").val();

    $.post('https://www.aber-sa.com/request/doDeletImage', {
        request_id:request_id,
            img_id: id
        },
        function(data) {
            console.log(data);
        });
}