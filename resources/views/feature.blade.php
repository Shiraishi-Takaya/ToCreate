<x-layout>
    <x-slot name="title">ToCreate</x-slot>
    <x-slot name="style">{{ url('css/feature.css') }}</x-slot>

    <section class="container feature-container my-5">

        <div class="feature-title-container">
            <div class="feature-title d-flex justify-content-between mb-2">
                <h1 class="text-primary">{{ $feature->name }}</h1>
                <div class="feature-title-btn">
                    <button class="btn btn-outline-primary">編集</button>
                    <button class="btn btn-outline-danger ms-2">削除</button>
                </div>
            </div>
            <div class="feature-comment">
                コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント
            </div>
        </div>

        <div class="tasks-container">
            <ul class="list-group mb-4">
                @foreach ($feature->tasks as $task)
                <li class="task-item list-group-item d-flex align-items-center">
                    <input class="form-check-input me-3" type="checkbox">
                    <div class="task-item-content">
                        <div class="task-name fs-5">{{ $task->name }}</div>
                        <div class="task-infos">
                            @if ($task->type)
                            <span class="task-type badge bg-warning">学習</span>
                            @else
                            <span class="task-type badge bg-success">実装</span>
                            @endif
                            <span class="task-deadline badge bg-primary">{{ $task->deadline }}</span>
                        </div>
                    </div>
                    <div class="list-item-btns ms-auto">
                        <button class="btn btn-outline-primary me-2">編集</button>
                        <form method="post" action="{{ route('tasks.destroy', $task) }}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger">削除</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>

            <div class="accordion task-form" id="accordionBasic">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            タスクを作成する
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                        <div class="accordion-body">
                            <form method="post" action="{{ route('tasks.add', $feature) }}">
                                @csrf
                                <div class="task-form-title mb-3">
                                    <label class="mb-1" for="title">タスク名</label>
                                    <input type="text" name="name" class="form-control" id="title" placeholder="30文字以内で入力してください" required>
                                    <div class="invalid-feedback">
                                        入力必須です。
                                    </div>
                                </div>
                                <div class="task-form-others d-flex mb-4">
                                    <div class="task-form-type btn-group btn-group-sm me-4">
                                        <input type="radio" class="btn-check" name="type" value="study" id="study" checked="">
                                        <label class="btn btn-outline-primary" for="study">学習</label>

                                        <input type="radio" class="btn-check" name="type" value="create" id="develop">
                                        <label class="btn btn-outline-primary" for="develop">実装</label>
                                    </div>
                                    <div class="task-form-deadline">
                                        <label for="deadline">締切日</label>
                                        <input type="date" name="deadline" id="deadline">
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary col-12">作成</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="back text-center mt-5">
            <a href="{{ route('works.show', $feature->work) }}" class="btn btn-outline-primary fs-5">&laquo;&nbsp;戻る</a>
        </div>

    </section>

    <x-slot name="script">{{ url('js/app.js') }}</x-slot>
</x-layout>
