@extends('layout')

@section('mainbody')

<div>
    <form action = '/createsubscription' method = 'POST'>
        @csrf

        <label for = 'holderName'>Card Holder Name: </label>
        <input id="holderName" type="text"><br>

        <input type = 'radio' name = 'plan' id = 'standard' value = 'price_1JK2PnD7JDAvsD3FPxU8IB98' checked>
        <label for = 'standard'>Standard Plan: - £10: </label><br>

        <input type = 'radio' name = 'plan' id = 'premium' value = 'price_1JK2PnD7JDAvsD3FcRjYtH2s'>
        <label for = 'premium'>Premium Plan - £20: </label><br>

        <!-- Stripe Elements Placeholder -->
        <div id="card-element"></div>

        <button id="card-button" data-secret="{{ $intent->client_secret }}">
            Pay Now
        </button>
    </form>

</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe('pk_test_51JIsBZD7JDAvsD3Fw04pOULCHnzqcSE2k2wtqIbekqP91zGG0VBhs1m1hQgMINP5eErf1nK8cpH5H1NkW3yNCBp300NaJpt9gS');

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');

    const cardHolderName = document.getElementById('holderName');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;


    cardButton.addEventListener('click', async (e) => {
        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: { name: cardHolderName.value }
                }
            }
        );

        if (error) {
            // Display "error.message" to the user...
        } else {
            //stripeTokenHandler(setupIntent);
            console.log(setupIntent);
        }
    });
</script>

@endsection