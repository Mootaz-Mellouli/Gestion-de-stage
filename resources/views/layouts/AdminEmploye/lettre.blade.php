@extends('layouts.employe')
@section('content')
    <header class="masthead">
        <script>
            function printDiv() {
                var contents = document.getElementById('printer').innerHTML;
                var frame1 = document.createElement('iframe');
                frame1.name = "frame1";
                frame1.style.position = "absolute";
                frame1.style.top = "-1000000px";
                document.body.appendChild(frame1);
                var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
                frameDoc.document.open();
                frameDoc.document.write(`<html><head><title>sss</title>`);
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
        <div class="container">
            <div class="masthead-subheading">Documents<br><small>Lettre d'affectation</small></div>
            <div class="masthead-heading text-uppercase"></div>
        </div>
    </header>
    <section class="page-section" id="services">
        
        <div class="card" style="border: none">
            <div class="row">
                <div class="col-sm-">
                    <div class="card-header">
                        <a data-toggle="collapse" href="#test-block" aria-expanded="true" aria-controls="test-block" style="color:black">
                            Affectation
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div id="test-block" class="collapse">
                        <div class="card-block">
                            
                            <div class="container" id="printer" style="background: rgb(231, 231, 231);padding:50px">
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
                                <button onclick="printDiv()">Imprimer</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection