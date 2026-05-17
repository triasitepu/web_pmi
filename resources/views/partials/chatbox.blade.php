<!-- TOGGLE BUTTON -->
<button id="chatToggle"
class="fixed bottom-6 right-6 flex items-center gap-2 px-4 py-3 
bg-gradient-to-r from-red-600 to-red-500 
text-white rounded-full shadow-xl 
hover:scale-105 hover:shadow-2xl 
transition-all duration-300 z-[9999]">
<span class="material-symbols-outlined text-2xl group-hover:rotate-12 transition">
        support_agent
    </span>

<span class="hidden md:block text-sm font-semibold">Chat PMI</span>
</button>

<!-- CHAT BOX -->
<div id="chatBox"
class="hidden fixed bottom-24 right-6 w-[350px] bg-white rounded-2xl shadow-2xl z-[9999] flex flex-col">

  <!-- HEADER -->
  <div class="bg-white text-black p-3 flex justify-between rounded-t-2xl">
    <span>PMI Assistant</span>
    <button id="closeChat">✖</button>
  </div>

  <!-- BODY -->
  <div id="chatContent" class="p-4 space-y-3 text-sm">

    <p>Halo 👋, pilih jenis layanan:</p>

    <button onclick="handleEmergency()"
      class="w-full bg-red-100 text-red-600 p-2 rounded">
      🚨 Emergency
    </button>

    <button onclick="startChatbot()"
      class="w-full bg-gray-100 p-2 rounded">
      💬 Non-Emergency
    </button>

  </div>

</div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function(){

    const toggle = document.getElementById('chatToggle');
    const box = document.getElementById('chatBox');
    const closeBtn = document.getElementById('closeChat');

    // OPEN / CLOSE CHAT
    if(toggle && box){
        toggle.addEventListener('click', () => {
            box.classList.toggle('hidden');
        });
    }

    // CLOSE BUTTON
    if(closeBtn && box){
        closeBtn.addEventListener('click', () => {
            box.classList.add('hidden');
        });
    }

});
</script>

<script>
function handleEmergency() {
    const nomorAdmin = "6281234567890"; // ganti nomor kamu

    const pesan = encodeURIComponent(
        "🚨 Halo Admin PMI, saya ingin melaporkan kondisi DARURAT.\nMohon segera dibantu."
    );

    window.open(`https://wa.me/${nomorAdmin}?text=${pesan}`, "_blank");
}
</script>

<script>
function startChatbot() {
    const content = document.getElementById('chatContent');

    content.innerHTML = `
        <div class="space-y-3">

            <div class="bg-gray-100 p-2 rounded">
                Halo 👋, silakan pilih kebutuhan Anda:
            </div>

            <button onclick="kirimAuto('Ambulans')" class="w-full border p-2 rounded">🚑 Ambulans</button>
            <button onclick="kirimAuto('Keluhan')" class="w-full border p-2 rounded">📢 Keluhan</button>
            <button onclick="kirimAuto('Donor Darah')" class="w-full border p-2 rounded">🩸 Donor Darah</button>
            <button onclick="kirimAuto('Bencana Daerah')" class="w-full border p-2 rounded">🌋 Laporkan Bencana Daerah</button>


        </div>
    `;
}
</script>

<script>
function kirimAuto(kategori) {
    const content = document.getElementById('chatContent');

    let reply = '';

    if(kategori === 'Ambulans'){
        reply = 'Untuk layanan ambulans, silakan hubungi hotline kami atau gunakan menu emergency 🚨';
    } 
    else if(kategori === 'Keluhan'){
        reply = 'Silakan tuliskan keluhan Anda, kami akan membantu 😊';
    } 
    else if(kategori === 'Donor Darah'){
        reply = 'Untuk info donor darah, cek jadwal di menu donor atau hubungi admin.';
    }
    else if(kategori === 'Bencana Daerah'){
        reply = 'Silakan tuliskan lokasi dan jenis bencana (banjir, longsor, dll) agar tim kami dapat segera menindaklanjuti 🚨';
    }

            content.innerHTML = `
            <div class="space-y-3">

                <div class="text-right">
                   <div class="inline-block bg-green-600 text-white px-4 py-2 rounded-full">
                        ${kategori}
                    </div>
                </div>

                <div class="bg-gray-100 p-2 rounded">
                    ${reply}
                </div>

                <input id="nama" class="w-full border p-2 rounded mt-2" placeholder="Nama (opsional)">
                <input id="email" class="w-full border p-2 rounded mt-2" placeholder="Email (opsional)">

                <textarea id="pesan"
                class="w-full border p-2 rounded mt-2"
                placeholder="Tulis pesan..."></textarea>

                <button onclick="kirimPesan('${kategori}')"
                class="inline-block bg-green-600 text-white px-4 py-2 rounded w-full">
                    Kirim
                </button>

            </div>
        `;
}
</script>

<script>
function kirimPesan(kategori) {
    const isi = document.getElementById('pesan').value;
    const nama = document.getElementById('nama')?.value;
    const email = document.getElementById('email')?.value || '-';
    const content = document.getElementById('chatContent');

    if(!isi.trim()) return;

    content.innerHTML += `
        <div class="text-right">
            <div class="inline-block bg-red-600 text-white p-2 rounded mt-2">
                ${isi}
            </div>
        </div>

        <div class="bg-gray-100 p-2 rounded mt-2">
            🤖 Terima kasih, pesan Anda sudah kami terima.
        </div>
    `;

    fetch("{{ route('pengaduan.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            nama: nama,
            email: email,
            kategori: kategori,
            isi: isi
        })
    });
}

</script>
@endpush