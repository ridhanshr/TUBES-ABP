<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/main.css">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container header mb-5">
        @include('partials.navbar')
    </div>

    <div class="container">
        <p style="font-size: 14px">Category in here</p>
        <div class="align-items-center d-flex justify-content-center">
            <img src="images/kuta_beach_lombok.jpg" width="1300px" height="450px" style="border-radius: 20px; margin-bottom: 30px">
        </div>
        <div class="align-items-center d-flex justify-content-center">
            <p class="text-justify" style="font-size: 36px; font-weight: 700" >Sirkuit Mandalika Terletak di Mandalika Lombok </p>
        </div>
        <div class="keterangan">
            <i class="fa-regular fa-user" style="margin-right: 10px"></i>Author &nbsp;
            <i class="fa-regular fa-folder" style="margin-right: 10px"></i>Category
        </div>
        <div class="article mt-3">
            <article>
                <p>Voluptate accusantium adipisci voluptatibus inventore, quas blanditiis, at temporibus unde quibusdam eaque ut esse necessitatibus aliquam delectus culpa officiis eius vero odit iusto amet ipsa, omnis beatae modi impedit! Provident voluptate quaerat impedit doloremque fugit, cumque nam laborum libero, autem, aspernatur ut. Error aperiam quaerat illum voluptate et? Quasi natus dolorem itaque cupiditate. <br></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, esse numquam. Velit, veniam nulla! Modi odit quae quis quas! Consequuntur consectetur animi sunt corrupti repellendus. Officia provident quo impedit harum quod doloremque magnam dolor enim ad ducimus saepe iusto debitis labore ea explicabo a atque, aut, et ex eius? Aspernatur nisi incidunt rerum ad quia, nobis corrupti possimus enim. <br></p>
            </article>
        </div>
    </div>
</body>
</html>