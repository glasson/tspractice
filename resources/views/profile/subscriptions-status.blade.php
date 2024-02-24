<x-action-section>
    <x-slot name="title">
        Subscriptions
    </x-slot>

    <x-slot name="description">
    </x-slot>

    <x-slot name="content">
        @if(auth()->user()->subscriptions->isNotEmpty())
            <div class="block">
                @foreach(auth()->user()->subscriptions as $subscription)
                    @php
                        $name = App\Models\Plan::find($subscription->type)->name;
                    @endphp
                    <div class="flex items-center space-x-6 p-3 mb-1 bg-slate-100 rounded-lg">
                        <div class='font-bold text-center'>{{$name}}</div>
                        <div class="text-gray-400"> @if($subscription->ends_at) (ends on {{date("m-d-Y", strtotime($subscription->ends_at))}}) @endif</div>
                        <a href={{route('cancel.subscription', $subscription->type)}}> <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button></a>
                        {{-- <a href={{route('download.invoice', $subscription->type)}}><button type="button" class="focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-1">
                            Get Invoices </button></a> --}}
                    </div>
                @endforeach
            </div>
            <div>
                <table>
                    @foreach (auth()->user()->invoices() as $invoice)
                        <tr>
                            <td class="font-bold">{{ $invoice->date()->toFormattedDateString() }}</td>
                            <td class="text-gray-400">{{ $invoice->total() }}</td>
                            <td><a class="text-blue-500" href="/download/invoice/{{ $invoice->id }}">Download</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @else
            <p>No subscriptions found.</p>
        @endif
    </x-slot>

</x-action-section>