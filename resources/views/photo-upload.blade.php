<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[seagreen] flex justify-center items-center h-[100vh]">
  <div class="container w-[50%] bg-gray-500 h-[30%] p-[2rem] rounded-lg">
    <div class="image-uploader">
      <form action="{{url('/')}}/store" class="flex flex-col gap-4" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" class="img-input rounded p-[0.6rem] bg-green-500" type="file" name="logo" placeholder="upload Image">
        <input type="submit" class="block bg-[#f97316] p-[0.5rem] rounded text-white">
      </form>
    </div>
  </div>
</body>
</html>