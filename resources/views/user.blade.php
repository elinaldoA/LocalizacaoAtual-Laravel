<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Localização atual do usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Localização Atual Do Usuário</h1>
            <div class="card">
                <div class="card-body">
                @if($currentUserInfo)
                <h4>IP: {{ $currentUserInfo->ip }}</h4>
                <h4>Nome do país: {{ $currentUserInfo->countryName }}</h4>
                <h4>Código do país: {{ $currentUserInfo->countryCode }}</h4>
                <h4>Código Regional: {{ $currentUserInfo->regionCode }}</h4>
                <h4>Nome da Região: {{ $currentUserInfo->regionName }}</h4>
                <h4>Nome da Cidade: {{ $currentUserInfo->cityName }}</h4>
                <h4>Cep: {{ $currentUserInfo->zipCode }}</h4>
                <h4>Latitude: {{ $currentUserInfo->latitude }}</h4>
                <h4>Longitude: {{ $currentUserInfo->longitude }}</h4>
                @endif
                </div>
            </div>
        </div>
    </body>
</html>