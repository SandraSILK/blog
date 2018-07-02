@extends('layouts.app')
@section('content')
    <header style="background: url({{ asset('images/horse-riding.jpg') }}) center no-repeat; height: 200px; background-size: 100%;">
    </header>
    <div class="container m-top-80">
        <section>
            <div class="row">
                <main class="col-md-8 content-area">
                    <h1 class="main-title">Jazda konna</h1>
                    <p class="font-weight-bold">REGULAMIN JAZD ORAZ DEKLARACJA - PIERWSZA JAZDA W BHT (obowiązkowy do przeczytania)</p>
                    <ul>
                        <li>Regulamin - Office WORD(.doc)</li>
                        <li>Regulamin - Open Office(.odt)</li>
                    </ul>
                    <p class="font-weight-bold">DEKLARACJA dla NIEPEŁNOLETNICH (obowiązkowa do podpisania przez rodziców opiekunów w przypadku gdy jeździec jest niepełnoletni):</p>
                    <ul>
                        <li>Deklaracja - Office WORD(.doc)</li>
                        <li>Deklaracja - Open Office(.odt)</li>
                    </ul>
                    <p class="font-weight-bold">PRZEDSTAWIAMY PAŃSTWU SZEROKĄ OFERTĘ NAUKI JAZDY KONNEJ DLA KAŻDEGO</p>
                    <p style="text-align: justify;"><span class="font-weight-bold">dla poczatkujących</span> - pierwsze kilka jazd indywidualnie na lonży gdzie oswajamy się z koniem, uczymy się teoretyczno-praktycznych niezbędnych podstaw celem rozpoczęcia jazd luzem w grupie samodzielnie w stepie i kłusie. Nasi instruktorzy starają się motywować do czynienia szybkich postępów w jeździe, konie do jazdy dobierane zaś są specjalnie pod kątem osób początkujących - spokojne, doświadczone.</p>
                    <p style="text-align: justify;"><span class="font-weight-bold">dla średniozaawansowanych i zaawansowanych</span> - oferujemy naukę jazdy konnej dla jeźdźców o każdym stopniu zaawansowania. Klient może liczyć ze strony instruktorów na indywidualne podejście do konkretnych jego problemów. Pracujemy nad techniką jazdy. Szkolimy głównie pod kątem ujeżdzeniowym - główny nacisk kładziemy na dosiad, równowagę oraz kształtowanie wyczucia jeździeckiego wplatając w to elementy skoków przez przeszkody. Jazdy prowadzone są na koniach doświadczonych dobieranych do poziomu zaawansowania. Przygotowujemy do egzaminu na brązową odznakę jak i umożliwiamy uczestnictwo w naszych wewnętrznych parkurach (do klasy LL 90cm). Warunkiem zdawania odznak czy brania udziału w parkurach jest regularna jazda MINIMUM 2 razy w tygodniu oraz zaangażowanie i posiadanie dostatecznych ku temu mozliwości stwierdzanych przed instruktora. Nie wysyłamy naszych jeźdzców na koniach rekreacyjnych na zawody regionalne.</p>
                    <p><span class="font-weight-bold">dla małych dzieci (ok. pon.10r.ż.)</span> - dla mniejszych dzieci oferujemy pół-godzinne indywidualne lekcje na lonży, luzem bądz w postaci oprowadzanek. Wszystko to celem wprowadzenia w naukę jazdy konnej, zdobycia pewności siebie w siodle a przede wszystkim złapania kontaktu z końmi. Jazdy te oczywiscie dopasowane indywidualne dla każdego dziecka.</p>
                    <p class="font-weight-bold">UWAGA! Zmiana cennika JAZD INDYWIDUALNYCH, LONŻ orez OPROWADZAŃ: CENNIK SZCZEGÓŁOWY</p>
                    <p><span class="font-weight-bold">Zmiana Cennika 2017 Cennik BHT *** UWAGA ***</span>Jazdy odwołujemy najpóźniej jeden dzień wcześniej. Jazdy odwołane w ten sam dzień PRZEPADAJĄ. Jazdy z karnetów nie wykorzystane w czasie jednego miesiąca PRZEPADAJĄ.</p>
                    <p class="font-weight-bold">JAK SIĘ UMÓWIĆ?</p>
                    <p>Na jazdę można umówić się osobiście bądź telefonicznie:</p>
                    <p>Tel. kontaktowy: 880 568 202</p>
                    <p>Najlepiej z co najmniej jednodniowym wyprzedzeniem ;)</p>
                    <p><span class="font-weight-bold">UWAGA:</span> Może zdazyć się, że nie odbiorę telefonu. Zazwyczaj nie oddzwaniam na numery nie zapisane.
                    W takim wypadku bardzo prosze o dzwonienie do skutku a najlepiej przedstawienie sprawy krótko w smsie.</p>
                    <p>Wątpliwości? Pytania?</p>
                    <ul>
                        <li>telefon: 880 568 202</li>
                        <li>mail: stajniabht@gmail.com</li>
                        <li>facebook</li>
                    </ul>
                </main>
                @include('layouts.aside')
            </div>
        </section>
    </div>
@endsection