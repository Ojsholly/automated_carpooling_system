@extends('layouts.layout')

@section('content')
<main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                    <h6 class="card-title card-padding pb-0">My Saved Cars</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Model Year</th>
                                    <th>Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($count = 0)
                                @foreach ($cars as $car)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $car->make }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->model_year }}</td>
                                    <td style="background-color: {{ $car->color }}; color: {{ $car->color }};">
                                        {{ $car->color }}</td>
                                    <td>
                                        <div class="menu-button-container">
                                            <button
                                                class="mdc-button mdc-menu-button mdc-button--raised icon-button shaped-button secondary-filled-button">
                                                <i class="material-icons mdc-button__icon">add</i>
                                            </button>
                                            <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                                                <ul class="mdc-list" role="menu" aria-hidden="true"
                                                    aria-orientation="vertical">
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <a href="{{ url('cars/view-car/'.$car->id) }}"
                                                            class="mdc-button mdc-button--dense">View</a>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <a href="{{ route('cars.edit', ['id' => '2']) }}"
                                                            class="mdc-button text-button--warning">Edit</a>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <a class="mdc-button text-button--danger">Delete</a>
                                                    </li>
                                                    <li class="mdc-list-divider"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
