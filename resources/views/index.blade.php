<x-layout>
    <x-slot name="title">ToCreate</x-slot>
    <x-slot name="style">{{ url('css/index.css') }}</x-slot>

    <section class="container">

        @foreach ($works as $work)
        <div class="work-item border border-2 border-primary rounded mb-5 p-3 shadow">
            <div class="work-title mb-2">
                <h2>
                    <a href="{{ route('works.show', $work) }}" class="text-decoration-none">{{ $work->name }}</a>
                </h2>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
            </div>

            <div class="work-detail">
                <details>
                    <summary class="btn btn-primary">
                        詳細
                    </summary>

                    <table class="table my-2">
                        <thead class="text-primary">
                            <tr>
                                <th class="col-7 fw-normal">機能</th>
                                <th class="col-3 fw-normal">未完了のタスク</th>
                                <th class="col-2 fw-normal">実装済み</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(機能名)</td>
                                <td>4&nbsp;/&nbsp;5</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>(機能名)</td>
                                <td>1&nbsp;/&nbsp;3</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>(機能名)</td>
                                <td>0&nbsp;/&nbsp;2</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="work-delete text-end">
                        <form method="post" action="{{ route('works.destroy', $work) }}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger">削除</button>
                        </form>
                    </div>
                </details>
            </div>
        </div>
        @endforeach

        <div class="work-add">
            <button class="btn btn-lg btn-primary col-12">作品を追加する&nbsp;＋</button>
        </div>

    </section>

    <x-slot name="script"></x-slot>
</x-layout>
