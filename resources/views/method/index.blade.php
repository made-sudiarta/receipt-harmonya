<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Method') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  sm:rounded-lg">
                <div class="bg-white">
                    <button type="button" class="btn btn-outline-primary" onclick="location.href='method-create'">Add More</button>
                    <!-- <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button> -->

                    <div class="table-responsive mt-6">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no= 1; @endphp
                                @foreach($method as $data)
                                <tr>
                                    <th scope="row">{{ $no }}</th>
                                    <td>{{ $data->paymentmethod }}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button onclick="location.href='{{ url('method-edit/'.$data->id) }}'" class="btn btn-sm btn-success me-md-2" type="button">Update</button>
                                            <form method="post" action="{{ url('method-destroy', $data->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php $no++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
