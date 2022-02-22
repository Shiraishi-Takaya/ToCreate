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

        <div class="container functions-container">
            <h4 class="text-primary">機能&nbsp;:&nbsp;</h4>

            @foreach ($work->features as $feature)
            <div class="function-item d-flex justify-content-between border border-2 border-primary rounded mb-5 px-4 py-3 shadow">
                <h4>{{ $feature->name }}</h4>
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

            <div class="function-add">
                <button class="btn btn-lg btn-primary col-12">機能を追加する&nbsp;＋</button>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ココを押すと表示
            </button>

            <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-primary" id="exampleModalLabel">(機能名)</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
                        </div>

                        <div class="modal-body">
                            <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>

                            <ul class="list-group scroll-area-sm mb-4">
                                <li class="task-item list-group-item d-flex align-items-center">
                                    <input class="form-check-input me-3" type="checkbox">
                                    <div class="task-item-content">
                                        <div class="task-name fs-5">(タスク名)</div>
                                        <div class="task-infos">
                                            <span class="task-type badge bg-warning">学習</span>
                                            <span class="task-deadline badge bg-primary">2021/12/7</span>
                                        </div>
                                    </div>
                                    <div class="list-item-btns ms-auto">
                                        <button class="btn btn-outline-primary me-2">編集</button>
                                        <button class="btn btn-outline-danger">削除</button>
                                    </div>
                                </li>

                                <li class="task-item list-group-item d-flex align-items-center">
                                    <input class="form-check-input me-3" type="checkbox">
                                    <div class="task-item-content">
                                        <div class="task-name fs-5">(タスク名)</div>
                                        <div class="task-infos">
                                            <span class="task-type badge bg-success">実装</span>
                                            <span class="task-deadline badge bg-primary">2021/12/7</span>
                                        </div>
                                    </div>
                                    <div class="list-item-btns ms-auto">
                                        <button class="btn btn-outline-primary me-2">編集</button>
                                        <button class="btn btn-outline-danger">削除</button>
                                    </div>
                                </li>
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
                                            <form>
                                                <div class="task-form-title mb-3">
                                                    <label class="mb-1" for="title">タスク名</label>
                                                    <input type="text" class="form-control" id="title" placeholder="30文字以内で入力してください" required>
                                                    <div class="invalid-feedback">
                                                        入力必須です。
                                                    </div>
                                                </div>
                                                <div class="task-form-others d-flex mb-4">
                                                    <div class="task-form-type btn-group btn-group-sm me-4">
                                                        <input type="radio" class="btn-check" name="type" id="study" checked="">
                                                        <label class="btn btn-outline-primary" for="study">学習</label>

                                                        <input type="radio" class="btn-check" name="type" id="develop">
                                                        <label class="btn btn-outline-primary" for="develop">実装</label>
                                                    </div>
                                                    <div class="task-form-deadline">
                                                        <label for="deadline">締切日</label>
                                                        <input type="date" id="deadline">
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-primary col-12">作成</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <x-slot name="script">{{ url('js/app.js') }}</x-slot>
</x-layout>
