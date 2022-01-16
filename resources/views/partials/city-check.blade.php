<script>
    function cityCheck(val) {
        $.ajax({
            type: 'get',
            url : '{{ route('city-check') }}',
            data : {
                "id" : val,
            }, beforeSend:function() {
                var html = '';
                html += '<option value="">Sedang memuat kota...</option>'; 
                $("#city-option").html(html);
            }, success: function(res) {
                var data = JSON.parse(res);
                var html = '';
                var i;
                for (i in data) {
                    html += '<option value="'+data[i].id+'">'+data[i].name+'</option>'; 
                }

                $("#city-option").html(html);
            }, error: function(err) {
                console.log(err);
            }
        })
    }
</script>