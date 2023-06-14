@include('layouts.navbar-client')

<section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="flex w-full h-[90vh] max-md:h-max rounded-md overflow-hidden border max-md:flex-col-reverse">
        <div class="bg-blue-400 h-full w-2/3 max-md:w-full" id="map">

        </div>
        <div class="h-full w-1/3 p-2 max-md:w-full">
            <div>
                <img src="{{ asset('storage/images/pharmacies/' . $pharmacie->photo_chemain) }}" class=" rounded-t-md"
                    alt="">
            </div>
            <div class="flex flex-col gap-2 p-2">
                <h3 class="text-2xl font-semibold" id="title">
                    {{ $pharmacie->nom }}
                </h3>
                <h5 class="text-gray-400 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span>{{ $pharmacie->adresse }}</span>
                </h5>
                <h5 class="flex items-center gap-2 text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round"
                            d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                    </svg>
                    <span>{{ $pharmacie->email }}</span>
                </h5>
                <h5 class="text-green-500 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <span>{{ $pharmacie->telephone }}</span>
                </h5>
                <h5 class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                    </svg>
                    <span>
                        {{ $pharmacie->ville }}
                    </span>
                </h5>
                <h1 class="text-xl font-semibold">Les houraires de travail</h1>
                <div class="mt-1 px-4">
                    <h5 class="font-semibold">Matin</h5>
                    <div class="flex justify-between">
                        <h6>{{ $pharmacie->heure_matin_ts_debut }}</h6>
                        <h1>
                            ~
                        </h1>
                        <h6>{{ $pharmacie->heure_matin_ts_fin }}</h6>
                    </div>
                </div>
                <div class="mt-1 px-4">
                    <h5 class="font-semibold">Soir </h5>
                    <div class="flex justify-between">
                        <h6>{{ $pharmacie->heure_soir_ts_debut }}</h6>
                        <h1>
                            ~
                        </h1>
                        <h6>{{ $pharmacie->heure_soir_ts_fin }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API",
            c = "google",
            l = "importLibrary",
            q = "__ib__",
            m = document,
            b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}),
            r = new Set,
            e = new URLSearchParams,
            u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => h = n(Error(p + " could not load."));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a)
            }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
            d[l](f, ...n))
    })({
        key: "AIzaSyA_4ZbDQWY9HkjZ8wpKcwcr2fXfrRk_Pto",
        v: "weekly",
        // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
        // Add other bootstrap parameters as needed, using camel case.
    });

    // let map;

    // async function initMap() {
    //     const {
    //         Map
    //     } = await google.maps.importLibrary("maps");
    //     map = new Map(document.getElementById("map"), {
    //         center: {
    //             lat: 30.926945,
    //             lng: -6.903648,
    //         },
    //         zoom: 15,

    //     });
    // }

    // initMap();

    // Initialize and add the map
    let map;

    async function initMap() {
        // The location of Uluru
        const position = {
            lat: {{ $pharmacie->geo_lat }},
            lng: {{ $pharmacie->geo_long }}
        };
        // Request needed libraries.
        //@ts-ignore
        const {
            Map
        } = await google.maps.importLibrary("maps");
        const {
            AdvancedMarkerElement
        } = await google.maps.importLibrary("marker");

        // The map, centered at Uluru
        map = new Map(document.getElementById("map"), {
            zoom: 15,
            center: position,
            mapId: "DEMO_MAP_ID",
        });

        // The marker, positioned at Uluru
        const marker = new AdvancedMarkerElement({
            map: map,
            position: position,
            title: document.getElementById('title').innerHTML
        });
    }

    initMap();
</script>
@include('layouts.footer-client')
