<x-app-layout>
        <div class="flex justify-center mt-20">
            <div class="w-2/4 bg-gray-200 rounded-lg p-8">
                <div class="card">
                    <div class="card-header font-bold [word-spacing:1px]">
                        You will be charged ${{ number_format($plan->price, 2) }} for {{ $plan->name }} Plan
                    </div>
    
                    <div class="card-body mt-6">
    
                        <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
    
                            <div class="mb-4">
                                <label for="">Name</label>
                                <input type="text" name="name" id="card-holder-name" class="form-input mt-1 block w-full rounded-md" value="" placeholder="Name on the card">
                            </div>
    
                            <div class="mb-4">
                                <label for="card-element" class="block text-gray-700">Card details</label>
                                <div id="card-element" class="form-input mt-1 block w-full rounded-md"></div>
                            </div>

                            <hr class="my-4">

                            <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">Purchase</button>
                            
    
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}')
    
        const elements = stripe.elements()
        const cardElement = elements.create('card')
    
        cardElement.mount('#card-element')
    
        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')
    
        form.addEventListener('submit', async (e) => {
            e.preventDefault()
    
            cardBtn.disabled = true
            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }   
                    }
                }
            )
    
            if(error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
    </script>
</x-app-layout>

