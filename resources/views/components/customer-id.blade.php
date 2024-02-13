<div class="p-10 lg:p-8 bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg ">
    
    <div class="mx-auto mt-50 w-1/2 rounded-md border-2 space-y-4 border-blue-300 flex flex-col pb-3 pt-3 ">
        <input type="text" wire:model="customerId" id='inputCustomerId' 
                class="w-2/3 p-0 mx-auto border-yellow-400 focus:ring-yellow-400 border-2 focus:border-yellow-400 rounded-lg" />

        <button class="bg-blue-500 hover:bg-blue-700 text-white rounded mx-auto pl-2 pr-2"
                wire:click="getCustomerId">get UserId</button>

        <button class=" bg-blue-300 hover:bg-blue-700 text-white rounded mx-auto pl-2 pr-2"
                onclick="copyText('inputCustomerId')" id="copyButton">Copy</button>
    </div>
</div>
<script>
    let copyText = (text) => {
        document.getElementById('inputCustomerId').select()
        document.execCommand('copy')
        document.getElementById('copyButton').textContent = "Copied!"
    }
</script>

