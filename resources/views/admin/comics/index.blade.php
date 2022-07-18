@extends('admin.templates.base')

@section('mainContent')
    <main>
        <table>
            <thead>
                <th>
                    <td>Id</td>
                    <td>titolo</td>
                    <td>descrizione</td>
                    <td>genere</td>
                    <td>prezzo</td>
                </th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->Id }}</td>
                        <td>{{ $comic->titolo }}</td>
                        <td>{{ $comic->descrizione }}</td>
                        <td>{{ $comic->genere }}</td>
                        <td>{{ $comic->prezzo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    
@endsection