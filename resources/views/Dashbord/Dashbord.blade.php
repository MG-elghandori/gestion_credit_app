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
    </style>
    @livewireStyles
</head>

<body class="body_bg" style="background-color: #000055;">
    <section class="container">
        <div class="principal d-flex">
            <main class="col-2 m1 bg-light d-flex flex-column gap-4 align-items-center">
                <div id="logo" class="mt-4 fs-5"><b style="color:#000055">Gestion</b> Credit</div>
                <div id="menu" class="col-11">
                    <hr>
                    <ul class="menu-list">

                        <li class="rounded p-2 m-2" id="Dashboard">
                            <a wire:click="$emit('showComponent', 'dashboard')" class="text-primary d-flex justify-content-around align-items-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z" />
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                </svg>
                                <span>Dashboard</span></a>
                        </li>

                        <li class="rounded  p-2 m-2 ">
                            <a wire:click="$emit('showComponent', 'create')" href="#" class="text-primary d-flex justify-content-around align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg>
                                <span>Ajouter</span></a>
                        </li>
                        <li class="rounded  p-2 m-2 ">
                            <a class="text-primary d-flex justify-content-around align-items-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <span>Hestorique</span></a>
                        </li>
                        <li class="rounded  p-2 m-2 ">
                            <a class="text-primary d-flex justify-content-around align-items-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                </svg>
                                <span>Admin</span></a>
                        </li>
                    </ul>
                    <div id="copyright" class="mt-3 text-enter d-flex flex-column justify-content-end align-items-center">
                        <small>Developed by <br> Mohammed Elghandori</small>
                    </div>
                </div>
            </main>

            <main class="col-10 m2 d-flex flex-column align-items-center">
                <div class="main-m2-p1 col-12 bg-primary d-flex justify-content-between align-items-start p-3">
                    <div id="divsearch" class="search-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search text-light" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                        <input type="text" id="search" name="search" placeholder="Search here" class="search-input">
                    </div>
                    <div>
                        <button type="submit" id="btn_log_out" class="btn btn-light rounded-circle p-2 d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right text-light  " viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg></button>
                    </div>
                </div>

                <!-- ---- -->
                <div class="show-data bg-light col-11 card">
                @if(count($data)>0)
                        <div class="m-2 text-primary">Lists des clients</div>
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">telephone</th>
                                    <th scope="col">nomProduit</th>
                                    <th scope="col">quantite</th>
                                    <th scope="col">prix</th>
                                    <th scope="col">Avance</th>
                                    <th scope="col" class="text-center">action</th>
                                </tr>
                            </thead>
                            @foreach($data as $All)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $All->id }}</th>
                                    <td>{{ $All->nom }}</td>
                                    <td>{{ $All->telephone }}</td>
                                    <td>{{ $All->nomProduit }}</td>
                                    <td>{{ $All->quantite }}</td>
                                    <td>{{ $All->prix }} dh</td>
                                    <td>{{ $All->prixAvance }}dh</td>
                                    <td class="text-center">
                                        <form action="">
                                            <a class="btn btn-danger  " href="" onclick="return confirm('Voulez vous supprimer')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash3 text-light" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg></a>
                                            <button class="btn btn-warning ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-printer-fill text-light" viewBox="0 0 16 16">
                                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                </svg>
                                            </button>

                                            <a class="btn btn-success ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square text-light" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                           @if ($data->lastPage() > 1)
                            <div class="pagination d-flex justify-content-between align-items-center my-1">
                            <div class="text-light bg-danger p-1 rounded" style="font-size: 14px;">le Total des client:{{$total}}</div>
                            <div>
                                <div class="btn-group " role="group">
                                    @if ($data->onFirstPage())
                                    <button class="btn btn-secondary" disabled style="font-size: 12px;">Prev</button>
                                    @else
                                    <a href="{{ $data->previousPageUrl() }}" class="btn btn-primary" style="font-size: 12px;">Prev</a>
                                    @endif

                                    <button class="btn btn-light" style="font-size: 12px;">{{ $data->currentPage() }}</button>

                                    @if ($data->hasMorePages())
                                    <a href="{{ $data->nextPageUrl() }}" class="btn btn-primary" style="font-size: 12px;">Next</a>
                                    @else
                                    <button class="btn btn-secondary" disabled style="font-size: 12px;">Next</button>
                                    @endif
                                </div>
                            </div>
                           </div>
                           @endif
                        @else
                        <div class="text-center text-danger mt-3">Rien données disponibles :(</div>
                        @endif
                </div>
                <!-- ---- -->
            </main>
        </div>
    </section>
    @livewireScripts
</body>


<script src="./Assets/back.js"></script>
<script type="text/javascript">

</script>



</html>