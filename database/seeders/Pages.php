<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pages extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->truncate();

        $customPage = [
            [
                'name' => 'Regulamin',
                'description' => '<p class="fs-5 ps-2">Niniejszy Regulamin określa zasady korzystania z usług oferowanych przez firmę "Wycieczki na Jachcie". Prosimy o uważne zapoznanie się z poniższymi postanowieniami przed skorzystaniem z naszych usług.</p>
                    <h2 class="fs-3">1. Postanowienia ogólne</h2>
                    <p class="fs-5 ps-2">1.1. Korzystając z usług oferowanych przez "Wycieczki na Jachcie", akceptujesz niniejszy Regulamin oraz zobowiązujesz się do jego przestrzegania.</p>

                    <h2 class="fs-3">2. Rezerwacje i płatności</h2>
                    <p class="fs-5 ps-2">2.1. Rezerwacje wycieczek na jachcie można dokonywać za pośrednictwem naszej strony internetowej lub kontaktując się bezpośrednio z naszym biurem.</p>
                    <p class="fs-5 ps-2">2.2. W celu potwierdzenia rezerwacji może być wymagana wpłata zadatku lub opłata wstępna. Szczegóły płatności będą podane w momencie dokonywania rezerwacji.</p>

                    <h2 class="fs-3">3. Anulacje i zwroty</h2>
                    <p class="fs-5 ps-2">3.1. Warunki anulacji i zwrotów środków zależą od wybranej wycieczki oraz terminu anulacji. Szczegółowe informacje znajdziesz na naszej stronie internetowej lub uzyskasz od naszego personelu.</p>

                    <h2 class="fs-3">4. Bezpieczeństwo</h2>
                    <p class="fs-5 ps-2">4.1. Podczas wycieczek na jachcie należy przestrzegać zasad bezpieczeństwa określonych przez załogę jachtu. Za wszelkie szkody spowodowane nieprzestrzeganiem tych zasad, firma "Wycieczki na Jachcie" nie ponosi odpowiedzialności.</p>

                    <h2 class="fs-3">5. Odpowiedzialność</h2>
                    <p class="fs-5 ps-2">5.1. Firma "Wycieczki na Jachcie" nie ponosi odpowiedzialności za straty, uszkodzenia lub wypadki, które mogą się wydarzyć podczas wycieczek, chyba że wynikają one z naszej rażącej niedbałości.</p>

                    <h2 class="fs-3">6. Postanowienia końcowe</h2>
                    <p class="fs-5 ps-2">6.1. Firma "Wycieczki na Jachcie" zastrzega sobie prawo do zmiany niniejszego Regulaminu w dowolnym momencie. Aktualna wersja Regulaminu będzie dostępna na naszej stronie internetowej.</p>
                    <p class="fs-5 ps-2">6.2. Niniejszy Regulamin obowiązuje od [Data] i może być modyfikowany w dowolnym momencie.</p>

                    <p class="fs-5 ps-2">Data wejścia w życie: [Data]</p>'
            ], [
                'name' => 'Polityka prywatności',
                'description' => '<p class="fs-5 ps-2"><strong>Niniejsza Polityka Prywatności opisuje, w jaki sposób gromadzimy, przechowujemy, używamy i chronimy Twoje dane osobowe podczas korzystania z naszej strony internetowej i usług związanych z wycieczkami na jachcie.</strong></p>

                    <h2 class="fs-3">1. Dane osobowe, które gromadzimy</h2>
                    <p class="fs-5 ps-2">Możemy gromadzić następujące dane osobowe:</p>
                    <ul class="fs-6">
                        <li>Imię i nazwisko</li>
                        <li>Adres e-mail</li>
                        <li>Numer telefonu</li>
                        <li>Adres zamieszkania</li>
                    </ul>

                    <h2 class="fs-3">2. Cel gromadzenia danych</h2>
                    <p class="fs-5 ps-2">Gromadzimy Twoje dane osobowe w celu:</p>
                    <ul class="fs-6">
                        <li>Zapewnienia informacji o wycieczkach na jachcie</li>
                        <li>Komunikacji z Tobą w sprawach rezerwacji i zapytań</li>
                        <li>Poprawienia jakości naszych usług</li>
                    </ul>

                    <h2 class="fs-3">3. Udostępnianie danych osobowych</h2>
                    <p class="fs-5 ps-2">Nie sprzedajemy, nie wynajmujemy i nie udostępniamy Twoich danych osobowych osobom trzecim bez Twojej zgody, chyba że jest to wymagane przez prawo.</p>

                    <h2 class="fs-3">4. Bezpieczeństwo danych</h2>
                    <p class="fs-5 ps-2">Stosujemy odpowiednie środki techniczne i organizacyjne, aby chronić Twoje dane osobowe przed utratą, dostępem nieautoryzowanym, zmianą lub ujawnieniem.</p>

                    <h2 class="fs-3">5. Twoje prawa</h2>
                    <p class="fs-5 ps-2">Posiadasz prawo dostępu do swoich danych osobowych, ich poprawiania, usuwania oraz wycofania zgody na przetwarzanie danych. Możesz również skontaktować się z nami w sprawie wszelkich pytań lub zastrzeżeń dotyczących prywatności.</p>

                    <h2 class="fs-3">6. Kontakt</h2>
                    <p class="fs-5 ps-2">Jeśli masz jakiekolwiek pytania dotyczące naszej Polityki Prywatności, prosimy o kontakt pod adresem e-mail: kontakt@wycieczki-najachcie.pl.</p>

                    <p class="fs-5 ps-2">Data wejścia w życie: [Data]</p>

                    <p class="fs-5 ps-2">Polityka Prywatności może być okresowo aktualizowana i zmieniana. Aktualizacje będą publikowane na tej stronie.</p>'
            ], [
                'name' => 'Kontakt',
                'description' => '<div class="bg-gray rounded-3 shadow row overflow-hidden border-grayLight-1 mb-3">
                            <form class="row g-3 p-4">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">@lang("pages.firstName")</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="@lang("pages.firstNameFake")" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">@lang("pages.lastName")</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="@lang("pages.lastNameFake")" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">@lang("pages.email")</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang("pages.emailFake")" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="numberPhone" class="form-label">@lang("pages.numberPhone")</label>
                                    <input type="text" class="form-control" id="numberPhone" name="numberPhone" placeholder="@lang("pages.numberPhoneFake")" required>
                                </div>

                                <div class="col-12">
                                    <label for="contents" class="form-label">@lang("pages.contents")</label>
                                    <textarea class="form-control" id="contents" name="contents" placeholder="@lang("pages.contentsFake")" required></textarea>
                                </div>
                                <div class="fs-6">
                                    @lang("pages.requiredInput")
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-dark" value="@lang("pages.sendMail")">
                                </div>

                            </form>
                        </div>'
            ]
        ];

        DB::table('pages')->insertOrIgnore($customPage);
    }
}
