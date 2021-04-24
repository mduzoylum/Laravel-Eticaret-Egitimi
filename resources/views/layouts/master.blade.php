<html>
<head>
    <title>@yield('title',config('app.name'))</title>
</head>
<body>
@include('layouts.partials.navbar')
<hr>

<table>
    <tr>
        <td>@include('layouts.partials.sidebar')</td>
        <td><h1>@yield('content')</h1></td>
    </tr>
</table>

<hr>
Laravel Eğitimi - 2021
</body>
</html>
