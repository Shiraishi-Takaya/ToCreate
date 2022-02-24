<x-layout>
    <x-slot name="title">ToCreate</x-slot>
    <x-slot name="style">{{ url('css/work.css') }}</x-slot>

    <section class="container work-container my-5">

        <div class="work-title-container mb-4">
            <div class="work-title d-flex justify-content-between mb-2">
                <h1 class="text-primary">{{ $work->name }}</h1>
                <div class="work-title-btn">
                    <button class="btn btn-outline-primary">編集</button>
                    <button class="btn btn-outline-danger ms-2">削除</button>
                </div>
            </div>
            <div class="work-comment">
                コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント
            </div>
        </div>

        <div class="container features-container">
            <h4 class="text-primary">機能&nbsp;:&nbsp;</h4>

            @foreach ($work->features as $feature)
            <div class="features-item d-flex justify-content-between border border-2 border-primary rounded mb-5 px-4 py-3 shadow">
                <h4>
                    <a href="{{ route('feature', $feature) }}" class="features-item-link">
                        {{ $feature->name }}
                    </a>
                </h4>
                <div class="completed_tasks">
                    <div class="mb-2">
                        完了した学習タスク
                        <span class="ms-3 h5 text-primary">
                            2&nbsp;/&nbsp;3
                        </span>
                    </div>
                    <div>
                        完了した実装タスク
                        <span class="ms-3 h5 text-primary">
                            0&nbsp;/&nbsp;2
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="features-add">
                <button class="btn btn-lg btn-primary col-12">機能を追加する&nbsp;＋</button>
            </div>
        </div>

    </section>

    <x-slot name="script">{{ url('js/app.js') }}</x-slot>
</x-layout>
