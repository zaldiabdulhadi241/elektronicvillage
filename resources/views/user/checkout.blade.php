@extends('layouts.main')

{{-- @section('title', 'Checkout') --}}

@section('container')
    <div class="flex flex-col justify-center my-48">
        <div class="flex flex-col text-center gap-y-10 justifycenter items-center">
            <p>Anda akan melakukan pembelian produk dengan harga : Rp{{ number_format($transaction->total_harga) }}</p>
            {{-- <strong>Rp{{ number_format($product['price'], 0, ',', '.') }}</strong> --}}
            <button type="button" class="p-5 bg-primary text-bg3" id="pay-button">
                Bayar Sekarang
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('<?= $transaction->snap_token ?>', {
                // Optional
                onSuccess: function(result) {
                    window.location.href = '{{ route('checkout-success', $transaction->id) }}'
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
@endsection
