@extends('layouts.master')

@section('content')
    @themeSlide('anasayfa')
    <div class="container-fluid footer-icon">
        {!! Menu::render('shortcuts', \Themes\Lion\Presenter\IconMenuPresenter::class) !!}
    </div>
    @pageFindByOptions('settings.show_page_home', 'home')
    @pageFindByOptions('settings.show_services', 'services')
    @newsLatestPosts(8, 'latest')
@endsection
