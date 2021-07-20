@extends('layouts.app')

@php
    /**
    * @var \App\Models\Article $article
    */
@endphp

@section('content')
    <div class="container-fluid p-4" id="container_color">
        <div class="card text-center">
            <div class="card-header">
                <h3>Name: {{ $article->name }}</h3>
            </div>
            <div class="card-body">
                <h4>Summary: {{ $article->summary }}</h4>
            </div>
            <div class="col">
                <div class="row" id="row_rnd">
                    <h4>Article type: {{ $article->article_type }}</h4>
                </div>
                <div class="row" id="row_btw">
                    <h4>Page count: {{ $article->page_count }}</h4>
                </div>
                <div class="row" id="row_rnd">
                    <h4>State: {{ $article->state }}</h4>
                </div>
            </div>
            <div class="card-body">
                <h4>Note: {{ $article->note }}</h4>
            </div>
            <div class="col">
                <div class="row" id="row_rnd">
                    <h4>Lang: {{ $article->language }}</h4>
                </div>
                <div class="row" id="row_btw">
                    <h4>DOI: {{ $article->doi }}</h4>
                </div>
                <div class="row" id="row_rnd">
                    <h4>Related url: {{ $article->related_url }}</h4>
                </div>
        </div>
            <tr>
                <td>
                    <x-button.magic class="btn-warning"
                                    :route="route('articles.edit', [$article])">
                        Edit
                    </x-button.magic>
                </td>
                <td>
                    <x-button.magic class="btn-danger" :route="route('articles.destroy', [$article])"
                                    confirm="Are you sure? This can not be undone!">Delete
                    </x-button.magic>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
