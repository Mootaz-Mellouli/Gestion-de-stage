@extends('layouts.employe')
@section('title')
    Documentation de Stage
@endsection
@section('content')
    <header>
        <style>
            #printer_dem,#printer_aff{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                background: #e7e7e7;
                padding:50px;
            }
            #he{
                background:rgb(255, 109, 109);
                border-top-right-radius:15px;
                border-bottom-right-radius:15px;
            }
        </style>
        <script>
            function printDiv(content) {
                var contents = document.getElementById(content).innerHTML;
                var frame1 = document.createElement('iframe');
                frame1.name = "frame1";
                frame1.style.position = "absolute";
                frame1.style.top = "-1000000px";
                document.body.appendChild(frame1);
                var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
                frameDoc.document.open();
                frameDoc.document.write(`<html><head><title></title>`);
                frameDoc.document.write('</head><body>');
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function () {
                    window.frames["frame1"].focus();
                    window.frames["frame1"].print();
                    document.body.removeChild(frame1);
                }, 500);
                return false;
            }
        </script>
    </header>
    <section class="page-section" id="services">
        
        <div class="card" style="border: none">
            <div class="row">
                <div class="col-sm-">
                    <div class="card-header" id="he">
                        <a data-toggle="collapse" href="#test-block" aria-expanded="true" style="color:white;" aria-controls="test-block">
                            Demande de Stage
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div id="test-block" class="collapse">
                        <div class="card-block">
                            
                            <div class="container" id="printer_dem">
                                <center>
                                    <h3>Demande de Stage</h3><br>
                                </center>
                                <div class="row">
                                    <div class="col">L'attention du Directeur de la Formation de la Société:...................</div>
                                    <div class="col">Fait à Bizerte le :04-06-2021</div>
                                </div>
                                <div class="row">
                                    Objet : Demande de Stage Obligatoire
                                </div>
                                <div class="row">
                                    <p>L'Institut Supérieur des Etudes Technologiques de Bizerte assure depuis un certain nombre d'années une formation en licences devant être consolidée par un stage de perfectionnement en entreprise et ce, 
                                    dans le cadre de l'ouverture de notre institution universitaire sur son environnement socio-économique.
                                    Nous venons donc, par la présente, vous demander de bien vouloir accueillir,  
                                    au sein de votre entreprise, l'étudiant(e) ...... titulaire de la CIN n°.......... inscrit(e) au cours de l'année universitaire 2020/2021 en deuxième année de la ......... Classe ........</b>
                                    Ce stage obligatoire est prévu pour une durée de quatre semaines, du ................................ au ............................... 2021.
                                    Nous vous signalons, que durant la période de stage, l'étudiant(e) est couvert(e) par la Mutuelle Accident Scolaire et Universitaire-MASU(11051424-006).
                                    Nous vous prions, en cas de réponse positive, de bien vouloir remplir la fiche de stage ci-dessous et la remettre à l'étudiant(e) ou la retourner par fax, 
                                    et ce afin de préparer la lettre d'affectation du stagiaire.
                                    En vous remerciant pour votre collaboration, nous vous adressons, Madame, Monsieur, l'expression de notre respect.</p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">Fiche Réponse</div>
                                        <div class="row">Entreprise :</div>
                                        <div class="row">Département :</div>
                                        <div class="row">Le responsable direct du stagiaire :</div>
                                        <div class="row">Fonction du responsable direct du stagiaire :</div>
                                        <div class="row">Stage prévu du</div>
                                        <div class="row">Adresse :</div>
                                        <div class="row">Fax :</div>
                                    </div>
                                    <div class="col">
                                        <div class="row">au</div>
                                        <div class="row">Tél :</div>
                                    </div>   
                                </div>
                                <div class="row" style="padding-top:10px">
                                    <button class="btn btn-danger" onclick="printDiv('printer_dem')">Imprimer</button>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>


            <!--**************-->


            <div class="row" style="padding-top:50px;">
                <div class="col-sm-">
                    <div class="card-header" id="he">
                        <a data-toggle="collapse" href="#test-block2" style="color:white" aria-expanded="true" aria-controls="test-block">
                            Lettre d'affectation
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div id="test-block2" class="collapse">
                        <div class="card-block">
                            
                            <div class="container" id="printer_aff">
                                <center>
                                    <h3>Lettre d'affectation</h3><br>
                                </center>
                                <div class="row">
                                    <div class="col">L'attention du Directeur de la Formation de la Société:...................</div>
                                    <div class="col">Fait à Bizerte le :04-06-2021</div>
                                </div>
                                <div class="row">
                                    Objet : Demande de Stage Obligatoire
                                </div>
                                <div class="row">
                                    <p>
                                        L'Institut Supérieur des Etudes Technologiques de Bizerte assure depuis un certain nombre d'années une formation en licences devant être
                                        consolidée par un stage de perfectionnement en entreprise et ce, dans le cadre de l'ouverture de notre institution universitaire sur son
                                        environnement socio-économique.
                                        Nous venons donc, par la présente, vous demander de bien vouloir accueillir, au sein de votre entreprise, l'étudiant(e) ........
                                        titulaire de la CIN n°......... inscrit(e) au cours de l'année universitaire 2020/2021 en deuxième année de la ............... : Classe ............
                                        Ce stage obligatoire est prévu pour une durée de quatre semaines, du ................................ au ............................... 2021.
                                        Nous vous signalons, que durant la période de stage, l'étudiant(e) est couvert(e) par la Mutuelle Accident Scolaire et
                                        Universitaire-MASU(11051424-006).
                                        Nous vous prions, en cas de réponse positive, de bien vouloir remplir la fiche de stage ci-dessous et la remettre à l'étudiant(e) ou la retourner
                                        par fax, et ce afin de préparer la lettre d'affectation du stagiaire.
                                        En vous remerciant pour votre collaboration, nous vous adressons, Madame, Monsieur, l'expression de notre respect.                                </p>
                                </div>
                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <td>Entreprise: .......................</td>
                                        </tr>
                                        <tr><td>Département: ....................... </td></tr>
                                        <tr><td>Le responsable direct du stagiaire: ....................... </td></tr>
                                        <tr><td>Fonction du responsable direct du stagiaire: ....................... </td></tr>
                                        <tr><td>Stage prévu du : ....................... </td><td>au ....................... </td></tr>
                                        <tr><td>Adresse: </tr>
                                        <tr><td>Fax:  .......................</td><td>Tel ....................... </td></tr>
                                    </table>
                                </div>
                                <div class="row" style="padding-top:10px">
                                    <button class="btn btn-danger" onclick="printDiv('printer_aff')">Imprimer</button>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection