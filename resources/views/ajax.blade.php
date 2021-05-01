<html>
<head>
    <title>Ajax Kullanımı</title>
</head>
<body>

<input type="text" id="name" placeholder="Adınızı Yazınız">
<button id="gonder">Gönder</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function (){
        $.ajax({
            url:"{{route('ajax.post')}}",
            {{--headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},--}}
            method:"POST",
            success:function (result){
                console.log(result);
            }
        });
    });
</script>
</body>
</html>

{{--GET -> get information--}}
{{--POST -> save--}}
{{--PUT -> update--}}
{{--DELETE -> delete--}}
{{--PATH ->  update--}}

{{--composer install--}}
{{--php artisan serve--}}
{{--composer update--}}
