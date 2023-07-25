<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    



<h1>Liste des couriers arrrivés</h1>

                    <table class="table table-bordered">
                            <tr>
                                <th style="border: 1px solid; padding: 6px;" width="10%">NumeroCr</th>
                                <th style="border: 1px solid; padding: 6px;" width="10%">Date arrive</th>
                                <th style="border: 1px solid; padding: 6px;" width="10%">Expediteur</th>
                                <th style="border: 1px solid; padding: 6px;" width="10%">Objet</th>
                                <th style="border: 1px solid; padding: 6px;" width="10%">Observation</th>
                                <th style="border: 1px solid; padding: 6px;" width="10%">Direction</th>
                             
                            </tr>
                  

                          
                                @foreach ($courrierarrs as $courrierarr )
                                    <tr>
                                        <td style="border: 1px solid; padding: 6px;">{{ $courrierarr->numCr }}</td>
                                        <td style="border: 1px solid; padding: 6px;">{{ $courrierarr->dateArrive }}</td>
                                        <td style="border: 1px solid; padding: 6px;">{{ $courrierarr->expediteur }}</td>
                                        <td style="border: 1px solid; padding: 6px;">{{ $courrierarr->objet }}</td>
                                        <td style="border: 1px solid; padding: 6px;">{{ $courrierarr->observation }}</td>
                                        <td style="border: 1px solid; padding: 6px;">{{ $courrierarr->direction }}</td>
                           
                                
                                    </tr>
                                @endforeach
                             
                    </table>
                
</body>
</html>