<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition result</title>
</head>

<body>
    <form action="/add" method="POST">
        @csrf
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="hidden" name="_token" value="{{csrf_token()}}" />

        <button type="submit">Add Numbers</button>
    </form>


    @if (isset($sum))
        <h2>the sum of {{$num1}} and {{$num2}} is :{{$sum}}</h2>
    @endif
</body>

</html>