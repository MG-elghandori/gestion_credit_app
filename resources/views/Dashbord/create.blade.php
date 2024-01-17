<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="./Assets/style.css">
    <link rel="stylesheet" href="./Assets/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .principal {
            height: 90vh;
            background-color: #ededf7;
        }

        /* m1*/



        .menu-list {
            list-style-type: none;
            padding: 0;
        }

        .menu-list li {
            padding: 10px 0;
        }

        .menu-list li a {
            text-decoration: none;
            color: black;
        }

        .m2 {
            position: relative;
        }

        .main-m2-p1 {
            border-radius: 0 0 20px 20px;
            height: 150px;
            z-index: 1;
        }

        .show-data {
            z-index: 2;
            top: 90px;
            position: absolute;
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: rgba(211, 211, 211, 0.5);
            border-radius: 50px;
            padding: 8px;
            width: 180px;
        }

        #search {
            border: none;
            outline: none;
            background-color: rgba(211, 211, 211, 0);
            width: 140px;
            color: #fff;
        }

        ::placeholder {
            color: white;
        }

        #btn_log_out {
            background-color: rgba(211, 211, 211, 0.5);
            border: none;
        }

        #menu ul li {
            background-color: rgba(211, 211, 211, 0.4);
        }

        #menu ul li:hover {
            background-color: rgba(211, 211, 211, 0.7);
        }

        #copyright {
            height: 36vh;
        }

        #copyright small {
            font-size: 12px;
        }
        .text-12px{
            font-size: 12px;
        }
    </style>
    @livewireStyles
</head>

<body class="body_bg" style="background-color: #000055;">
    <section class="container">
        <div class="principal d-flex">
            <!-- menu -->
            @livewire('menu')
            <!-- menu -->

            <main class="col-10 m2 d-flex flex-column align-items-center">
                <div class="main-m2-p1 col-12 bg-primary d-flex justify-content-end align-items-start p-3">

            
                    <div>
                        <button type="submit" id="btn_log_out" class="btn btn-light rounded-circle p-2 d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right text-light  " viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg></button>
                    </div>
                </div>
                <div class="show-data bg-light col-11 card container">
                    <h4 class=" text-primary my-4">Register New Userr</h4>
                    <form action="{{route('register_user')}}" method="post">
                        @csrf
                        <div class="row mb-2">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form3Example1" name="nom" class="form-control" />
                                    @error('nom')
                                    <small class="text-danger text-12px">{{ $message }}</small>
                                    @else
                                    <label class="form-label" for="form3Example1">nom</label>
                                    @enderror
                                </div>

                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form3Example2" name="telephone" class="form-control" />
                                    @error('telephone')
                                    <small class="text-danger text-12px">{{ $message }}</small>
                                    @else
                                    <label class="form-label" for="form3Example1">telephone</label>
                                    @enderror
                                </div>
                             
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form3Example3" name="nomProduit" class="form-control" />
                                    @error('nomProduit')
                                    <small class="text-danger text-12px">{{ $message }}</small>
                                    @else
                                    <label class="form-label" for="form3Example1">nom Produit</label>
                                    @enderror
                                </div>
                              
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="number" id="form3Example4" name="quantite" class="form-control" />
                                    @error('quantite')
                                    <small class="text-danger text-12px">{{ $message }}</small>
                                    @else
                                    <label class="form-label" for="form3Example1">quantite</label>
                                    @enderror
                                </div>
                             
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="number" id="form3Example5" name="prix" class="form-control" />
                                    @error('prix')
                                    <small class="text-danger text-12px">{{ $message }}</small>
                                    @else
                                    <label class="form-label" for="form3Example1">prix</label>
                                    @enderror
                                </div>
                               
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="number" id="form3Example6" name="prixAvance" class="form-control" />
                                    @error('prixAvance')
                                    <small class="text-danger text-12px">{{ $message }}</small>
                                    @else
                                    <label class="form-label" for="form3Example1">prixAvance</label>
                                    @enderror
                                </div>
                               
                            </div>
                        </div>
                        <div class="mb-4 col-3">
                            <button type="submit" class="btn btn-primary btn-block col-12">Registration</button>
                        </div>
                </div>
                </form>


        </div>

        </main>

        </div>
    </section>
    @livewireScripts
</body>



<script src="./Assets/back.js"></script>
<script type="text/javascript">

</script>



</html>