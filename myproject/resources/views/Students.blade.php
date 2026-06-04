<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
    <style>
        :root {
            --bg-1: #fdf6e7;
            --bg-2: #e8f1ff;
            --ink: #1f2937;
            --muted: #5b6472;
            --brand: #1f7a7a;
            --accent: #ffb347;
            --card: #ffffff;
            --border: #e5e7eb;
            --shadow: 0 12px 30px rgba(31, 122, 122, 0.12);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            color: var(--ink);
            font-family: "Georgia", "Palatino", "Times New Roman", serif;
            background: radial-gradient(1200px 600px at 20% -10%, var(--bg-2), transparent 60%),
                        radial-gradient(900px 500px at 100% 0%, #ffe8cc, transparent 55%),
                        var(--bg-1);
            min-height: 100vh;
        }
        .wrap {
            padding: 32px 20px 64px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
        }
        .hero h1 {
            font-size: clamp(26px, 3.2vw, 40px);
            margin: 0;
            letter-spacing: 0.3px;
        }
        .hero .tag {
            background: linear-gradient(90deg, var(--brand), #2aa198);
            color: #fff;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 14px;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 18px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 14px; text-align: left; }
        thead th {
            background: linear-gradient(90deg, #f3f7ff, #fff7ec);
            color: var(--brand);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            border-bottom: 1px solid var(--border);
        }
        tbody tr { border-bottom: 1px solid var(--border); }
        tbody tr:nth-child(even) { background: #fbfdff; }
        tbody tr:hover { background: #fff4e1; }
        .empty {
            color: var(--muted);
            padding: 18px;
            background: #fff7ec;
            border: 1px dashed #f0c27b;
            border-radius: 12px;
        }
        .footer {
            margin-top: 14px;
            color: var(--muted);
            font-size: 13px;
        }
        @media (max-width: 720px) {
            .hero { flex-direction: column; align-items: flex-start; }
            th, td { padding: 10px 8px; }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="hero">
            <h1>Students Directory</h1>
            <div class="tag">MongoDB Collection</div>
        </div>

        <div class="card">
            @if ($students->isEmpty())
                <p class="empty">No students found.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Reg</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Course</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->reg }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->city }}</td>
                                <td>{{ $student->course }}</td>
                                <td>{{ $student->marks }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="footer">Updated on {{ now()->format('M d, Y') }}</div>
    </div>
</body>
</html>
