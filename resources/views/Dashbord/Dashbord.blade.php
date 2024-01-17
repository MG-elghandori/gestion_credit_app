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
            height: 95vh;
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
        #message{
            position: absolute;
             z-index: 3431;
             left: 16%;
             top: 4%;
        }
        .cursor-point:hover {
            cursor: pointer;
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

                <div class="show-data bg-light col-11 card">
                @if ($message = Session::get('success'))
                <div id="message" class="col-md-6 mx-auto col-lg-8 mb-2 mt-0 d-flex justify-content-between align-items-center alert alert-success rounded" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                    <div class="font-bold text-lime-600 cursor-point" onclick="deleteMessage()">X</div>
                </div>
                @endif
                    @if(count($data)>0)
                    <h4 class="m-2 text-primary">Lists des clients</h4>
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
                                <th scope="row" class="text-danger">{{ $All->id }}</th>
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
                    <div class="mx-3 mb-1 pagination d-flex justify-content-between align-items-center">
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
            </main>

        </div>
    </section>
    @livewireScripts
</body>



<script src="./Assets/back.js"></script>
<script type="text/javascript">
  function deleteMessage() {
        var messageDiv = document.getElementById('message');
        messageDiv.remove();
    }
</script>



</html>