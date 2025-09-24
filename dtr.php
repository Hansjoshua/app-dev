<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTR Records - Mobile Responsive</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        /* Header/Logo Row */
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .header-icons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .icon {
            width: 24px;
            height: 24px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .icon:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Main Container */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        /* Tabs Navigation */
        .tabs-container {
            margin-bottom: 2rem;
        }

        .tabs {
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 4px;
            margin-bottom: 1rem;
            backdrop-filter: blur(10px);
        }

        .tab {
            flex: 1;
            padding: 12px 16px;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
        }

        .tab.active {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .tab:hover:not(.active) {
            background: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.9);
        }

        /* Content Box */
        .table-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }

        .table-title {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        /* Records Table */
        .table-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            background: white;
        }

        .records-table {
            width: 100%;
            border-collapse: collapse;
        }

        .records-table th,
        .records-table td {
            padding: 1rem 0.75rem;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .records-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
            position: sticky;
            top: 0;
            z-index: 10;
            font-size: 0.9rem;
        }

        .records-table td {
            font-size: 0.9rem;
        }

        .records-table tr:hover {
            background: rgba(0, 0, 0, 0.02);
        }

        .records-table tr:last-child td {
            border-bottom: none;
        }

        .status {
            padding: 0.25rem 0.5rem;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status.present {
            background: #d1e7dd;
            color: #0f5132;
        }

        .status.absent {
            background: #f8d7da;
            color: #842029;
        }

        .status.late {
            background: #fff3cd;
            color: #664d03;
        }

        .action-btn {
            background: #007cba;
            color: white;
            border: none;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.8rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .action-btn:hover {
            background: #005a87;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 700px) {
            .header-row {
                padding: 0.75rem;
            }

            .logo {
                font-size: 1.2rem;
            }

            .icon {
                width: 20px;
                height: 20px;
            }

            .main-container {
                padding: 1rem 0.75rem;
            }

            .table-container {
                padding: 1.5rem;
                border-radius: 12px;
                margin: 0 0.5rem;
            }

            .tabs {
                margin: 0 0.5rem 1rem 0.5rem;
                padding: 3px;
            }

            .tab {
                padding: 10px 12px;
                font-size: 0.9rem;
            }

            .table-title {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }

            /* Responsive table for mobile */
            .table-wrapper {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .records-table {
                min-width: 600px;
            }

            .records-table th,
            .records-table td {
                padding: 0.75rem 0.5rem;
                font-size: 0.8rem;
            }

            .records-table th {
                font-size: 0.8rem;
                white-space: nowrap;
            }

            .status {
                font-size: 0.7rem;
                padding: 0.2rem 0.4rem;
            }

            .action-btn {
                padding: 0.3rem 0.6rem;
                font-size: 0.75rem;
            }

            /* Hide less important columns on mobile */
            .records-table th:nth-child(1),
            .records-table td:nth-child(1) {
                display: none;
            }
        }

        /* Very Small Phone Styles */
        @media (max-width: 360px) {
            .header-row {
                padding: 0.5rem;
            }

            .logo {
                font-size: 1.1rem;
            }

            .header-icons {
                gap: 0.75rem;
            }

            .icon {
                width: 18px;
                height: 18px;
            }

            .main-container {
                padding: 0.75rem 0.5rem;
            }

            .table-container {
                padding: 1rem;
                border-radius: 10px;
                margin: 0 0.25rem;
            }

            .tabs {
                margin: 0 0.25rem 0.75rem 0.25rem;
                padding: 2px;
            }

            .tab {
                padding: 8px 10px;
                font-size: 0.8rem;
            }

            .table-title {
                font-size: 1.1rem;
                margin-bottom: 0.75rem;
            }

            .records-table {
                min-width: 500px;
            }

            .records-table th,
            .records-table td {
                padding: 0.5rem 0.4rem;
                font-size: 0.7rem;
            }

            .records-table th {
                font-size: 0.7rem;
            }

            .status {
                font-size: 0.6rem;
                padding: 0.15rem 0.3rem;
            }

            .action-btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.7rem;
            }

            /* Hide additional columns on very small screens */
            .records-table th:nth-child(1),
            .records-table td:nth-child(1),
            .records-table th:nth-child(7),
            .records-table td:nth-child(7) {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header/Logo Row -->
    <div class="header-row">
        <div class="logo">DTR System</div>
        <div class="header-icons">
            <div class="icon" title="Notifications">🔔</div>
            <div class="icon" title="Profile">👤</div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Tabs Navigation -->
        <div class="tabs-container">
            <div class="tabs">
                <div class="tab active">Daily Records</div>
                <div class="tab">Weekly Report</div>
                <div class="tab">Monthly Summary</div>
                <div class="tab">Settings</div>
            </div>
        </div>

        <!-- Content Box -->
        <div class="table-container">
            <div class="table-title">Daily Time Records</div>
            
            <!-- Records Table -->
            <div class="table-wrapper">
                <table class="records-table">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Hours Worked</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EMP001</td>
                            <td>John Smith</td>
                            <td>08:00 AM</td>
                            <td>05:00 PM</td>
                            <td>8.0</td>
                            <td><span class="status present">Present</span></td>
                            <td>2024-01-15</td>
                            <td><button class="action-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>EMP002</td>
                            <td>Jane Doe</td>
                            <td>08:15 AM</td>
                            <td>05:00 PM</td>
                            <td>7.75</td>
                            <td><span class="status late">Late</span></td>
                            <td>2024-01-15</td>
                            <td><button class="action-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>EMP003</td>
                            <td>Mike Johnson</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                            <td><span class="status absent">Absent</span></td>
                            <td>2024-01-15</td>
                            <td><button class="action-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>EMP004</td>
                            <td>Sarah Wilson</td>
                            <td>07:45 AM</td>
                            <td>04:45 PM</td>
                            <td>8.0</td>
                            <td><span class="status present">Present</span></td>
                            <td>2024-01-15</td>
                            <td><button class="action-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>EMP005</td>
                            <td>David Brown</td>
                            <td>08:30 AM</td>
                            <td>05:30 PM</td>
                            <td>8.0</td>
                            <td><span class="status late">Late</span></td>
                            <td>2024-01-15</td>
                            <td><button class="action-btn">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>