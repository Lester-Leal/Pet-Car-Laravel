<option value="">Select</option>
@foreach ($invoices as $invoice)
    <option value="{{ $invoice->id }}">
        {{ $invoice->invoice_number }}
    </option>
@endforeach
