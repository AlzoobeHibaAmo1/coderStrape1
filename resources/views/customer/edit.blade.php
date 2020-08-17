<h1>Edit customer Details</h1>

    <form action="/customers/{{ $customer->id }}" method="post">

        @method('PATCH')

        @include('customer.form)

        <button>Save customer</button>
    </form>
