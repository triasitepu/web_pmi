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