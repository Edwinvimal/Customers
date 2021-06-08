@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <table border="1">
        <thead>
            <tr>
                <th style="font-size:1.50em;color:blue">Name</th>
                <th style="font-size:1.50em;color:blue"># of Orders</th>
            </tr>
        </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>
                        <a href="/customers/{{$customer->id}}" style="font-size: 20px; text-decoration: none"]>
                            {{$customer->first_name}}
                        </a>
                    </td>
                    <td style="font-size: 20px;">{{$customer->id}}</td>
                </tr>
                @endforeach
               
            </tbody>
    </table>
@endsection
