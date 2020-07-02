@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h" style="color: gold">Basiscursus bijenteelt 2020</h1>
            <p class="h4">
                Begin maart 2020 zal in Leiden opnieuw een cursus bijenteelt voor beginners van start gaan.
                <br /><br />
                De cursus zal bestaan uit 6 theorielessen en 16 praktijklessen. De praktijk van het imkeren wordt beoefend in de bijenstal in het polderpark Cronesteyn te Leiden.
                <br /><br />
                Cursisten ontvangen cursusmateriaal over de grondbeginselen van de bijenteelt. Tegelijk met het volgen van de cursus kunnen ze profiteren van de faciliteiten van de Imkersvereniging, zoals het bijwonen van bijeenkomsten met interessante lezingen.
                <br /><br />
                Verder ontvangen cursisten tijdens de cursus het tijdschrift ‘Bijen houden’ van de Nederlandse Bijenhouders Vereniging.
                <br /><br />
            </p>
        </div>
        <div class="col-4"><img src="https://www.europarl.europa.eu/resources/library/images/20180227PHT98775/20180227PHT98775_original.jpg" class="img-fluid"/></div>
    </div>

    <h1 class="h1" style="color: gold">Zie hier een overzicht van alle cursussen</h1>
    <div class="row">
        @foreach($cursussen as $key => $cursus)
            <div class="col-md-4">
                <div class="card mt-3 box-shadow">
                    <img class="card-img-top img-fluid" src="https://bijenclub.com/wp-content/upload_folders/bijenclub.com/2017/02/imkercursus-jeroen-vorstman--1200x630.jpg?v=1488549670104" alt="Cool Image" />
                    <div class="card-header">
                        {{ $cursus->name }}
                    </div>
                    <div class="card-body">
                        {{ $cursus->description }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <h2 class="h2" style="color:gold">Cursisten moeten om deze cursus te kunnen volgen in het bezit zijn van:</h2>
        <ul class="h4">
            <li>beschermende kleding</li>
            <li>beitel</li>
            <li>veger</li>
            <li>beroker (optioneel, voor degene die daadwerkelijk gaan imkeren)</li>
            <li>Theorie en Praktijk Lesboeken “Basis Cursus Compleet” van de NBV</li>
            <li>het Handboek Praktijk “Bijenhouden Zo doe je dat” van de NBV</li>
        </ul>
        <p class="h4 mt-2">De daaraan verbonden, additionele kosten bedragen circa € 120. Deze zaken zullen worden besproken op de eerste bijeenkomst en kunnen via de vereniging gekocht worden.</p>
    </div>
</div>
@endsection
