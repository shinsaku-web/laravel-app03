<style>
    h1 {
        text-align: center;
        padding: 30px;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        border-bottom: 1px solid #aaa;
        color: #555;
        width: 100%;
    }

    th {
        border-top: 1px solid #aaa;
        background-color: #f5f5f5;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    td {
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    a {
        margin-right: 20px;
    }
</style>
<h1>タスク一覧</h1>
<div class="container">
    <table>
        <tr>
            <th>タスク</th>
            <th>アクション</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>
                <a href="">詳細</a>
                <a href="">編集</a>
                <a href="">削除</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>