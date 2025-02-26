<footer class="bg-gray-200 text-slate-500 border-t-4 border-orange-600 p-4 pl-4 text-center">
                    Bei Fragen und Problemen oder zum Eintrag neuer Veranstaltungen wenden Sie sich bitte an <x-muddle-link email="dhammareise@jhanaverlag.de" title="Ralf Rapude" class="underline font-semibold" />
                    <div x-data="{open: false}">
                       <div class="underline"><a href="#" @Click="open='true'">Impressum</div></a>
            <x-footer-modal mode="impressum"/>
        </div>
        <div x-data="{open: false}">
            <div class="underline"><a href="#" @Click="open='true'">Datenschutz</a></div>
            <x-footer-modal mode="datenschutz"/>
                </div>
</footer>

