<form enctype="multipart/form-data" action="{{route("kitap.ekle")}}" method="post">
    {{csrf_field()}}
    Kitap İsmi :<br>
    <input type="text" name="isim" value="{{old('isim')}}">
    @if($errors->first('isim'))
        {{$errors->first('isim')}}
    @endif
    <br>
    Yazar Id :<br>
    <input type="text" name="yazar_id" value="{{old('yazar_id')}}">
    @if($errors->first('yazar_id'))
        {{$errors->first('yazar_id')}}
    @endif
    <br>
    <input type="text" name="email" value="{{old('email')}}">
    @if($errors->first('email'))
        {{$errors->first('email')}}
    @endif
    <br>
    <input type="file" name="image">
    <br>
    <button>Ekle</button>
</form>
{{--@if($errors->any())--}}
{{--    @foreach($errors->all() as $error)--}}
{{--        <li>{{$error}}</li>--}}
{{--    @endforeach--}}
{{--@endif--}}
