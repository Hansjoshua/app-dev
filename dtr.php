<?php
// DTR (Daily Time Record) with mobile responsive issues to be fixed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Time Record - DTR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            line-height: 1.4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: #4a90e2;
            color: white;
            padding: 25px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        /* Mobile-optimized tab system (matching dashboard.php) */
        .tabs-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .tab {
            flex: 1;
            padding: 15px 10px;
            text-align: center;
            cursor: pointer;
            border: none;
            background: none;
            font-size: 14px;
            font-weight: 500;
            color: #6c757d;
            transition: all 0.3s ease;
            position: relative;
        }

        .tab.active {
            color: #4a90e2;
            background: white;
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: #4a90e2;
        }

        .tab:hover {
            background: #e9ecef;
            color: #495057;
        }

        .tab-content {
            padding: 30px;
            display: none;
            min-height: 400px;
        }

        .tab-content.active {
            display: block;
        }

        /* Mobile-responsive table (matching dashboard.php) */
        .table-container {
            overflow-x: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 1.25rem;
        }

        .time-entry-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input, .form-group select {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn {
            padding: 12px 24px;
            background: #4a90e2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #357abd;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #4a90e2;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Mobile-first responsive design (matching dashboard.php) */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .header {
                padding: 15px;
                text-align: center;
            }

            .header h1 {
                font-size: 1.5rem;
            }

            .tabs {
                flex-direction: column;
            }

            .tab {
                padding: 12px 15px;
                border-bottom: 1px solid #dee2e6;
                text-align: left;
            }

            .tab.active::after {
                height: 3px;
                left: 0;
                width: 4px;
                height: 100%;
                bottom: auto;
                top: 0;
            }

            .tab-content {
                padding: 20px 15px;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
            }

            .stat-card {
                padding: 15px;
            }

            .stat-number {
                font-size: 1.5rem;
            }

            /* Mobile table optimization */
            .table-container {
                border-radius: 8px;
                margin: 0 -15px;
            }

            table {
                min-width: auto;
            }

            th, td {
                padding: 8px 6px;
                font-size: 0.9rem;
            }

            /* Stack table cells on very small screens */
            @media (max-width: 480px) {
                table, thead, tbody, th, td, tr {
                    display: block;
                }

                thead tr {
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                }

                tr {
                    border: 1px solid #ccc;
                    margin-bottom: 10px;
                    padding: 10px;
                    border-radius: 8px;
                    background: white;
                }

                td {
                    border: none;
                    position: relative;
                    padding-left: 50%;
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                td:before {
                    content: attr(data-label) ": ";
                    position: absolute;
                    left: 6px;
                    width: 45%;
                    padding-right: 10px;
                    white-space: nowrap;
                    font-weight: bold;
                    color: #333;
                }
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .header {
                padding: 10px;
                margin-bottom: 15px;
            }

            .card {
                padding: 15px;
                margin-bottom: 15px;
            }

            .tabs-container {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Daily Time Record</h1>
            <p>Track your working hours and attendance</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">8.5</div>
                <div class="stat-label">Hours Today</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">42.5</div>
                <div class="stat-label">Hours This Week</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">168</div>
                <div class="stat-label">Hours This Month</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">95%</div>
                <div class="stat-label">Attendance Rate</div>
            </div>
        </div>

        <div class="tabs-container">
            <div class="tabs">
                <button class="tab active" onclick="openTab(event, 'timesheet')">Time Sheet</button>
                <button class="tab" onclick="openTab(event, 'attendance')">Attendance</button>
                <button class="tab" onclick="openTab(event, 'reports')">Reports</button>
                <button class="tab" onclick="openTab(event, 'settings')">Settings</button>
            </div>

            <div id="timesheet" class="tab-content active">
                <h3>Daily Time Sheet</h3>
                
                <div class="card">
                    <div class="time-entry-form">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" value="2024-01-15">
                        </div>
                        <div class="form-group">
                            <label for="time-in">Time In</label>
                            <input type="time" id="time-in" name="time-in" value="08:00">
                        </div>
                        <div class="form-group">
                            <label for="time-out">Time Out</label>
                            <input type="time" id="time-out" name="time-out" value="17:00">
                        </div>
                        <div class="form-group">
                            <label for="break-time">Break Time (minutes)</label>
                            <input type="number" id="break-time" name="break-time" value="60">
                        </div>
                    </div>
                    <button class="btn">Save Entry</button>
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Break Time</th>
                                <th>Total Hours</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Date">2024-01-15</td>
                                <td data-label="Time In">08:00 AM</td>
                                <td data-label="Time Out">05:00 PM</td>
                                <td data-label="Break Time">1 hour</td>
                                <td data-label="Total Hours">8.0</td>
                                <td data-label="Status">Present</td>
                                <td data-label="Actions"><button class="btn">Edit</button></td>
                            </tr>
                            <tr>
                                <td data-label="Date">2024-01-14</td>
                                <td data-label="Time In">08:15 AM</td>
                                <td data-label="Time Out">05:15 PM</td>
                                <td data-label="Break Time">1 hour</td>
                                <td data-label="Total Hours">8.0</td>
                                <td data-label="Status">Present</td>
                                <td data-label="Actions"><button class="btn">Edit</button></td>
                            </tr>
                            <tr>
                                <td data-label="Date">2024-01-13</td>
                                <td data-label="Time In">08:30 AM</td>
                                <td data-label="Time Out">05:30 PM</td>
                                <td data-label="Break Time">1 hour</td>
                                <td data-label="Total Hours">8.0</td>
                                <td data-label="Status">Late</td>
                                <td data-label="Actions"><button class="btn">Edit</button></td>
                            </tr>
                            <tr>
                                <td data-label="Date">2024-01-12</td>
                                <td data-label="Time In">08:00 AM</td>
                                <td data-label="Time Out">06:00 PM</td>
                                <td data-label="Break Time">1 hour</td>
                                <td data-label="Total Hours">9.0</td>
                                <td data-label="Status">Overtime</td>
                                <td data-label="Actions"><button class="btn">Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="attendance" class="tab-content">
                <h3>Attendance Summary</h3>
                <div class="card">
                    <p>Your attendance summary and patterns will be displayed here. Currently, the mobile view needs optimization.</p>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Total Days</th>
                                    <th>Present</th>
                                    <th>Absent</th>
                                    <th>Late</th>
                                    <th>Attendance %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Month">January 2024</td>
                                    <td data-label="Total Days">22</td>
                                    <td data-label="Present">20</td>
                                    <td data-label="Absent">1</td>
                                    <td data-label="Late">1</td>
                                    <td data-label="Attendance %">95.45%</td>
                                </tr>
                                <tr>
                                    <td data-label="Month">December 2023</td>
                                    <td data-label="Total Days">21</td>
                                    <td data-label="Present">21</td>
                                    <td data-label="Absent">0</td>
                                    <td data-label="Late">0</td>
                                    <td data-label="Attendance %">100%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="reports" class="tab-content">
                <h3>Time Reports</h3>
                <div class="card">
                    <p>Detailed time reports and analytics. The mobile experience needs improvement to match the dashboard quality.</p>
                </div>
            </div>

            <div id="settings" class="tab-content">
                <h3>DTR Settings</h3>
                <div class="card">
                    <p>Configure your time tracking preferences and settings. Mobile interface needs optimization.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tabs;
            
            // Hide all tab content
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            
            // Remove active class from all tabs
            tabs = document.getElementsByClassName("tab");
            for (i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }
            
            // Show selected tab content and mark tab as active
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>