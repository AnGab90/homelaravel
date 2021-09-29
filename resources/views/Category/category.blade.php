<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<h1>Category</h1>


    @php
        $category = [
        ['type'=>'wine', 'old'=>1987, 'address'=>'London'],
        ['type'=>'brandy', 'old'=>1987, 'address'=>'Paris'],
        ['type'=>'whiskey', 'old'=>1990, 'address'=>'Ney Work'],
        ['type'=>'vodka', 'old'=>'new', 'address'=>'Moscow'],
        ];
    @endphp

<table border="1" cellpadding="15" cellspacing="0">
{{--    <thead>--}}
    <tr>
        <th>Name</th>
        <th>age</th>
        <th>address</th>
    </tr>
{{--    </thead>--}}
{{--    <tbody>--}}
    @for($i = 0; $i < count($category); $i++)
        <tr>
            <td>{{ $category[$i]['type'] }}</td>
            <td>{{ $category[$i]['old'] }}</td>
            <td>{{ $category[$i]['address'] }}</td>

        </tr>
    @endfor
{{--    </tbody>--}}


    {{--<div class="container">--}}
    {{--    @foreach($category as $categories)--}}
    {{--    --}}
    {{--    <p>{{$categories->name}}</p>--}}
    {{--        <p>{{$categories->age}}</p>--}}
    {{--        <p>{{$categories->address}}</p>--}}
    {{--    --}}
    {{--    @endforeach--}}
    {{--</div>--}}






</table>
</body>
</html>
