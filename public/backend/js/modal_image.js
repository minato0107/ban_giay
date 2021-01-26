// Sự kiện modal lấy 1 ảnh
$('#modal-image').on('hide.bs.modal',function(){
    // Lấy value của input có id = image
    var image = $('#image').val();
    $('#img_image').attr('src',image);
});
// Sự kiện modal lấy nhiều ảnh
$('#modal-images').on('hide.bs.modal',function(){
    // Lấy value của input có id = images
    var images = $('#images').val();
    // console.log('Chuối images'+images);
    var a= images.indexOf("[");
    // console.log('tìm kiếm'+a);
    if (a==-1){
        var _html='';
        _html+='<img class="card-img-top imgs" style="max-width: 100px;" src='+images+'>';
        $('#img_images').html(_html);
    }
    else{
        var imgList= $.parseJSON(images);
        // console.log(imgList);
        var _html='';
        imgList.forEach( function(element, index) {
        _html+='<img class="card-img-top imgs" style="max-width: 100px;" src='+element+'>';
    });
    $('#img_images').html(_html);
    }

});
