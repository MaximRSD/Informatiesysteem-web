<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>


<nav class="navbar navbar-expand-lg  bg-white">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText" style="margin-top:25px; margin-left:30px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="position:relative; display:flex;">
                <li class="nav-item">
                    <a class="nav-link active act-menu" style="margin-right:20px; color:#03274F; font-size:20px;" aria-current="page" href="index.php"><i class="bi bi-house" style="font-size:40px; margin-right:95px; color:#03274F; position: relative;
    vertical-align: middle;"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sec-menu" style="margin-right:20px;" href="overzicht.php"><i class="bi bi-journal-richtext" style="font-size:40px; position:relative; color:#03274F;
                            top:50%;
                            left:12%;
                            transform:translate(-50%,-50%);
                            vertical-align: middle;"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sec-menu" style="margin-right:20px;" href="boekadd.php"><i class="bi bi-journal-plus" style="font-size:40px; position:relative; color:#03274F;
                            top:50%;
                            left:12%;
                            transform:translate(-50%,-50%);
                            vertical-align: middle;"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sec-menu" style="margin-right:20px;" href="instellingen.php"><i class="bi bi-gear" style="font-size:40px; position:relative; color:#03274F;
                            top:50%;
                            left:12%;
                            transform:translate(-50%,-50%);
                            vertical-align: middle;"></i></a>
                </li>
            </ul>
            <img style="height:120px; margin-top:10px; position:relative;" src="pic/ADA_Logo-2020.svg">
            <ul class="navbar-text">

                <a><img src="pic/ADA_Logo-2020.svg" alt="logo"></a>
            </ul>
        </div>
    </div>
</nav>


<body>
    <div class="container h-100" style="margin-top:10%;">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-4">
                <a style="display:block; background-color:#03274F; color:white; padding:10px 10px; border-radius:5px;  display: flex; ">Overzicht<span style="margin-left:305px;"><i style="color:white;" class="bi bi-caret-right-square"></i></span></a><br />
                <a style="display:block; background-color:#03274F; color:white; padding:10px 10px; white-space: nowrap; display:flex; border-radius:5px;">Bron toevoegen<span style="margin-left:259px;"><i style="color:white;" class="bi bi-caret-right-square"></i></span></a><br />
                <a style="display:block; background-color:#03274F; color:white; padding:10px 10px;  border-radius:5px; display:flex;">Instellingen<span style="margin-left:290px;"><i style="color:white;" class="bi bi-caret-right-square"></i></span></a><br />
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>