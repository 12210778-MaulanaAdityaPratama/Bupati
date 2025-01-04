<html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.navbar')

    @include('layouts.content_visi')

    @include('layouts.content_map')

    @include('layouts.content_berita')

    @include('layouts.content_gallery')

    @include('layouts.content_yt')

    @include('layouts.footer')

    <script src="{{ asset('js/gallery.js') }}"></script>
    <script>
        // Data informasi tiap wilayah
        const regionInfo = {
            region1: {
                kodeKec: "KODE KEC :611205",
                kecamatan: "Kecamatan: Batu Ampar",
                luas: "Luas: 2,095.61 Km²",
                prosentaseLuas: "Prosentase Luas: 24.49%",
            },
            region2: {
                kodeKec: "KODE KEC :611206",
                kecamatan: "Kecamatan: Kubu",
                luas: "Luas: 1,646,91 Km2",
                prosentaseLuas: "Prosentase Luas: 24.49 %",
            },
            region3: {
                kodeKec: "KODE KEC : 611208",
                kecamatan: "Kecamatan: Teluk Pakedai",
                luas: "Luas: 411.57 Km2",
                prosentaseLuas: "Prosentase Luas: 4,81 %",
            },
            region4: {
                kodeKec: "KODE KEC :611204",
                kecamatan: "Kecamatan: Terentang",
                luas: "Luas: 956,62 Km2",
                prosentaseLuas: "Prosentase Luas: 11,14 %",
            },
            region5: {
                kodeKec: "KODE KEC :611201",
                kecamatan: "Kecamatan: Sungai Raya",
                luas: "Luas: 1,138,03 Km2",
                prosentaseLuas: "Prosentase Luas: 13,30 %",
            },
            region6: {
                kodeKec: "KODE KEC :611207",
                kecamatan: "Kecamatan: Rasau Jaya",
                luas: "Luas: 230.74 Km2",
                prosentaseLuas: "Prosentase Luas: 2,70 %",
            },
            region7: {
                kodeKec: "KODE KEC : 611209",
                kecamatan: "Kecamatan: Sungai Kakap",
                luas: "Luas: 533.97 Km2",
                prosentaseLuas: "Prosentase Luas: 6.24 %",
            },
            region8: {
                kodeKec: "KODE KEC :611203",
                kecamatan: "Kecamatan: Sungai Ambawang",
                luas: "Luas: 1,132.34 Km2",
                prosentaseLuas: "Prosentase Luas: 13.23 %",
            },
            region9: {
                kodeKec: "KODE KEC :611202",
                kecamatan: "Kecamatan: Kuala Mandor B",
                luas: "Luas: 412.58 Km2",
                prosentaseLuas: "Prosentase Luas: 4.82 %",
            },
        };

        // Referensi elemen informasi
        const infoContainer = document.getElementById("region-info");

        function showRegionInfo(regionId, x, y) {
            const region = regionInfo[regionId];
            if (region) {
                // Masukkan konten ke dalam elemen
                infoContainer.innerHTML = `
            <p>${region.kodeKec}</p>
            <p>${region.kecamatan}</p>
            <p>${region.luas}</p>
            <p>${region.prosentaseLuas}</p>
        `;

                // Hitung dimensi tooltip
                const tooltipWidth = infoContainer.offsetWidth;
                const tooltipHeight = infoContainer.offsetHeight;

                // Posisi tooltip di tengah pointer
                const posX = x - tooltipWidth / 2;
                const posY = y - tooltipHeight / 2;

                // Terapkan posisi
                infoContainer.style.left = `${posX}px`;
                infoContainer.style.top = `${posY}px`;
                infoContainer.classList.add("visible");
            }
        }

        // Fungsi untuk menyembunyikan informasi
        function hideRegionInfo() {
            infoContainer.classList.remove("visible");
        }

        // Tambahkan event listener hover ke setiap wilayah
        document.querySelectorAll(".region").forEach((regionElement) => {
            regionElement.addEventListener("mouseenter", (event) => {
                const regionId = event.target.classList[1];
                const {
                    clientX,
                    clientY
                } = event; // Ambil posisi mouse
                showRegionInfo(regionId, clientX + 1, clientY + 1);
            });

            regionElement.addEventListener("mouseleave", () => {
                hideRegionInfo();
            });
        });

        document.querySelectorAll(".region").forEach((regionElement) => {
            regionElement.addEventListener("mousemove", (event) => {
                showRegionInfo(regionElement.dataset.id, event.clientX, event.clientY);
            });

            regionElement.addEventListener("mouseleave", () => {
                infoContainer.classList.remove("visible");
            });
        });
    </script>
</body>

</html>
