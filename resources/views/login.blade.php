<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Bosstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <img id="logo" src="./imagens/fatiasCabecalhoPreto.png" alt="">
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="/login" method="post" style="width: 23rem;">
                            @csrf

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>


                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example18">Email</label>
                                <input type="email" name="Email" id="form2Example18" class="form-control form-control-lg" />
                            </div>


                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example18">CPF</label>
                                <input type="text" name="CPF" id="form2Example18" class="form-control form-control-lg" />
                            </div>


                            <div class="pt-1 mb-4" id="btn-cadastrar">
                                <input style="background-color: orange;" class="btn btn-info btn-lg btn-block"
                                    class="cadastrar" type="submit" value="Entrar">
                            </div>


                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://diariodorio.com/wp-content/uploads/2020/07/daleopizzaria_20200710_144435_0.jpg"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
