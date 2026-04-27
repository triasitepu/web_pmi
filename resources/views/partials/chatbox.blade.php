<div id="chatBox"
style="display: none;"
class="fixed bottom-24 right-6 w-[350px] bg-white rounded-2xl shadow-2xl z-[9999] flex flex-col">

  <!-- HEADER -->
  <div class="bg-red-600 text-white p-3 flex justify-between rounded-t-2xl">
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

    toggle.onclick = () => {
        if (box.style.display === "none") {
            box.style.display = "flex";
        } else {
            box.style.display = "none";
        }
    }

    closeBtn.onclick = () => {
        box.style.display = "none";
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

            <!-- BOT MESSAGE -->
            <div class="bg-gray-100 p-2 rounded w-fit max-w-[80%]">
                Halo 👋, silakan pilih kebutuhan Anda:
            </div>

            <!-- BUTTON PILIHAN -->
            <button onclick="kirimAuto('Ambulans')"
            class="w-full border p-2 rounded">🚑 Ambulans</button>

            <button onclick="kirimAuto('Keluhan')"
            class="w-full border p-2 rounded">📢 Keluhan</button>

            <button onclick="kirimAuto('Donor Darah')"
            class="w-full border p-2 rounded">🩸 Donor Darah</button>

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

    content.innerHTML = `
        <div class="space-y-3">

            <!-- USER -->
            <div class="text-right">
                <div class="inline-block bg-red-600 text-white p-2 rounded">
                    ${kategori}
                </div>
            </div>

            <!-- BOT -->
            <div class="bg-gray-100 p-2 rounded w-fit max-w-[80%]">
                ${reply}
            </div>

            <!-- INPUT -->
            <textarea id="pesan"
            class="w-full border p-2 rounded mt-2"
            placeholder="Tulis pesan..."></textarea>

            <button onclick="kirimPesan('${kategori}')"
            class="bg-red-600 text-white px-3 py-2 rounded w-full">
                Kirim
            </button>

        </div>
    `;
}
</script>
<script>
function kirimPesan(kategori) {
    const isi = document.getElementById('pesan').value;
    const content = document.getElementById('chatContent');

    content.innerHTML += `
        <div class="text-right">
            <div class="inline-block bg-red-600 text-white p-2 rounded mt-2">
                ${isi}
            </div>
        </div>

        <div class="bg-gray-100 p-2 rounded w-fit max-w-[80%] mt-2">
            🤖 Terima kasih, pesan Anda sudah kami terima.
        </div>
    `;

    // OPTIONAL: kirim ke Laravel
    fetch("{{ route('pengaduan.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            kategori: kategori,
            isi: isi
        })
    });
}
</script>