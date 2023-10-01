@extends('layouts.app')

@section('content')
    <x-card title="contact" :footer="$contacts->links()">
        <x-table.table :headers='["#","name","email","verification","message","action"]'>
            @forelse ($contacts as $key=>$contact)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $contact->name }}</x-table.td>
                    <x-table.td>{{ $contact->email }}</x-table.td>
                    <x-table.td>{{ $contact->verified ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $contact->message }} </x-table.td>
                    <x-table.td>
                        <x-table.delete route="contact.destroy" :value="$contact->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No contact Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="contact" />
@endsection
