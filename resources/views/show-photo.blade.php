<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center w-[100%] h-[100vh] bg-[seagreen] p-[2rem]">
    
    @if (!isset($photo))
        <p>Not Filled</p>
    @else
        @foreach ($photo as $item)
            <img src="{{asset($item->logo)}}" alt="Logo Image">
        @endforeach
    @endif
    
</body>
</html>