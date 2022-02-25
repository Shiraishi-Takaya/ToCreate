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
                {!! nl2br(e($work->comment)) !!}
            </div>
        </div>

        <div class="container features-container">
            <h4 class="text-primary">機能&nbsp;:&nbsp;</h4>

            @foreach ($work->features as $feature)
            <div class="features-item d-flex justify-content-between border border-2 border-primary rounded mb-5 px-4 py-3 shadow">
                <h4>
                    <a href="{{ route('features.show', $feature) }}" class="features-item-link">
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

            <div class="accordion task-form" id="accordionBasic">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            機能を作成する
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                        <div class="accordion-body">
                            <form method="post" action="{{ route('features.add', $work) }}">
                                @csrf
                                <div class="feature-form-title mb-3">
                                    <label class="mb-1" for="title">機能</label>
                                    <input type="text" name="name" class="form-control" id="title" required>
                                    <div class="invalid-feedback">
                                        入力必須です。
                                    </div>
                                </div>
                                <div class="feature-form-comment mb-4">
                                    <label class="mb-1" for="comment">コメント</label>
                                    <textarea name="comment" class="form-control" id="comment"></textarea>
                                </div>
                                <button class="btn btn-outline-primary col-12">作成</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="back text-center mt-5">
            <a href="{{ route('index') }}" class="btn btn-outline-primary fs-5">&laquo;&nbsp;戻る</a>
        </div>

    </section>

    <x-slot name="script">{{ url('js/app.js') }}</x-slot>
</x-layout>
