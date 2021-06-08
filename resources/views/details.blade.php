@extends('layouts.app')

@section('title', $customer->first_name . "'s Order History")

@section('content')
    <table border="1">
        <thead>
            <tr>
                <th style="font-size:1.50em;color:blue">Date</th>
                <th style="font-size:1.50em;color:blue"># of Products</th>
                <th style="font-size:1.50em;color:blue">Total</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td style="font-size:1.25em;color:violet">{{$customer->date_created}}</td>
                <td style="font-size:1.25em;color:violet">{{$count}} </td>
                <td style="font-size:1.25em;color:violet">{{$total}}</td>
            </tr>
            
             <tr>
                 <td style="font-size:1.25em;color:violet" colspan=" 2">Lifetime Value</td>
                 <td style="font-size:1.25em;color:violet">${{ $lifeTimeValue }}</td>
             </tr>
        </tbody>
    </table>
@endsection
