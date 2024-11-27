<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTEDU</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="SmartEdu.png" height="40" />
        </div>
        <div class="right-menu">
            <div class="search-bar">
                <input placeholder="Cari.." type="text" />
                <i class="fa fas-search">
                </i>
            </div>
            <div class="user">
                <img src="https://storage.googleapis.com/a1aa/image/AbjGzYRcDex2KqcQJT3Pq51pDrfU1v2vxYAWEQWtaQ5ZSkzTA.jpg" width="40" />
                <span>
                    Halo, Nabigha
                </span>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="quiz-header">
                <div class="title">Machine Learning</div>
                <div class="timer">
                    <span>Waktu tersisa</span>
                    <div class="time-box">00:00</div>
                </div>
            </div>
            <div class="quiz">
                <div class="question">
                    <p>1. Surabaya ada berapa kabupaten?</p>
                    <ul class="options">
                        <li>A. Jawaban 1</li>
                        <li>B. Jawaban 2</li>
                        <li>C. Jawaban 3</li>
                        <li>D. Jawaban 4</li>
                        <li>E. Jawaban 5</li>
                    </ul>
                </div>
                <div class="question2">
                    <p>2. Surabaya ada berapa kabupaten?</p>
                    <ul class="options2">
                        <li>A. Jawaban 1</li>
                        <li>B. Jawaban 2</li>
                        <li>C. Jawaban 3</li>
                        <li>D. Jawaban 4</li>
                        <li>E. Jawaban 5</li>
                    </ul>
                </div>
                <!-- Tombol Previous dan Next di dalam kotak kuning -->
                <div class="navigation">
                    <button>
                        <i class="fas fa-arrow-left"></i>
                        Previous
                    </button>
                    <button>
                        <i class="fas fa-arrow-right"></i>
                        Next
                    </button>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="quiz-nav">
                <div class="title">Navigasi Quiz</div>
                <div class="grid">
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>4</button>
                    <button>5</button>
                    <button>6</button>
                    <button>7</button>
                    <button>8</button>
                    <button>9</button>
                    <button>10</button>
                    <button>11</button>
                    <button>12</button>
                    <button>13</button>
                    <button>14</button>
                    <button>15</button>
                    <button>16</button>
                    <button>17</button>
                    <button>18</button>
                    <button>19</button>
                    <button>20</button>
                    <button>21</button>
                    <button>22</button>
                    <button>23</button>
                    <button>24</button>
                    <button>25</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="left">
            <p>SMARTEDU</p>
            <p>Platform terdepan untuk membantu siswa mengembangkan keterampilan mereka di bawah instruktur terbaik dan membangun karier dari mana saja di seluruh dunia</p>
        </div>
        <div class="right">
            <a href="#">Nilai saya</a>
            <a href="#">Kursus saya</a>
            <a href="#">Kalender</a>
            <a href="#">Pesan</a>
        </div>
    </div>
</body>

</html>