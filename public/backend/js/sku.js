$("#name").keyup(function(event) {
            var name = $("#name").val();
            //Đổi ký tự có dấu thành không dấu
            name = name.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            name = name.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            name = name.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            name = name.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            name = name.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            name = name.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            name = name.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            name = name.replace(
                /\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            var arr = name.split(" ");
            // console.log(arr);
            var sku = [];
            for (i = 0; i < arr.length; i++) {
                sku += arr[i].charAt(0);
            }
            // viết hoa sku
            sku = sku.toUpperCase();
            // console.log(arr);
            // console.log(sku);
            // var d = new Date().getMilliseconds();
            $('#sku').val(sku);

        });
    // js bên product_detail thêm size vào sku
        $("#id_size").change(function(event) {
            var sku_detail = $('#sku').text();
            var id_size = $('#id_size option:selected').text();
            // var id_color = $('#id_color').val();
            // console.log(id_color);
            var sku_done;
            if (id_size == '----Không----') {
                sku_done = sku_detail;
            }else{
                sku_done = sku_detail + id_size;
            }
            // console.log(sku_detail, id_size);
            $('#sku_detail').val(sku_done);
        });
