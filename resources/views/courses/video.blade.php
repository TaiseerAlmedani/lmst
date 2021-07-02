<x-layouts.app>
    <x-navbar />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css">

    <style>
        .card+.card {
            margin-top: 20px;
        }

    </style>
    <div class="column is-2" hidden></div>
            <div class="container3">
                <div class="overlay">
                    <p class="button has-background-white" style="width: 100%">{{ $lesson->slug }}</p>
                </div>
                <video id="video" width="770" height="882" onclick="play();">
                    <source src="{{ asset($lesson->name) }}" type="video/mp4" />
                </video>
            </div>
    <div class="column is-6 has-background-light">
        <form action="{{ route('progress.store' ) }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $lesson->id }}" name="lesson_id">
            <button type="submit">Done</button>
        </form>
</x-layouts.app>
