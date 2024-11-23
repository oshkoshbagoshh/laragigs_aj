<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragigs</title>
</head>

<body>

    <h1>{{ $heading }}</h1>

    @unless (count($listings) == 0)


    @foreach ($listings as $listing)
    <h2> {{ $listing['title'] }} </h2>
    <p> {{ $listing['description'] }} </p>
    @endforeach

    @else
        <p>No listings found.</p>
    @endunless

</body>


</html>
