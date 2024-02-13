<div class="p-6"> <!-- холст -->
    <div class="inline-block rounded-lg bg-blue-500 p-1"> <!-- оплата -->
        <div class="flex">
            <div class="flex-1 p-2"><!-- фото -->
                <img src={{asset('images/blur.png')}} class="" style="width: 50vw">     
            </div>
            <div class="flex-1 p-2"><!-- описание-->
                <h2 class="text-3xl font-bold mb-4">Blur</h2>
                <ul class="text-left list-disc ml-8">
                    <li>decription 1</li>
                    <li>decription 2</li>
                    <li>decription 3</li>
                </ul>
            </div>
        </div>
        <div class="flex justify-center">
            <button wire:click="charge"
                    class="bg-red-500 hover:bg-red-900 text-white font-bold py-1 px-3 rounded-lg shadow-md hover:shadow-lg transition">Buy</button>    
        </div><!-- кнопка-->
    </div> 
    
    <div class='mb-20 mt-20'></div>

    <div> <!-- выбор подписки -->
        <select>
            <option value="1">Подписка 1</option>
            <option value="2">Подписка 2</option>
            <option value="3">Подписка 3</option>
        </select>
    </div> 

    <div> <!--  список подписок в возможностью отмены  -->    
        
    </div> 
</div>
