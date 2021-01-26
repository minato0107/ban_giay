$('#input').change(function(event) {
            var input = $('#input').val()
            if (input == 'color') {
                $('.value').attr('type', 'color');
            }else{
                $('.value').attr('type', 'text');
                $('.value').attr('value', '');
                $('.value').attr('placeholder', '36,37,38,39....');
            }
        });
