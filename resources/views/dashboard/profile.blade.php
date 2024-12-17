<div class="right-sidebar">
    <div class="profile-card">
        <div class="profile">
            <img alt="Profile picture of Nabigha Muhana Zayyan" class="profile-pic" src="https://bootdey.com/img/Content/avatar/avatar8.png" />
            <div>
                <h2 class="profile-name">Nabigha Muhana Zayyan</h2>
                <p class="profile-username">@NabighaMZ</p>
            </div>
        </div>
        <div class="notifications">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-bell"></i>
            <i class="fas fa-cog"></i>
        </div>
    </div>

    <div class="calendar-card">
        <h2 class="calendar-title">Oktober 2024</h2>
        <div class="calendar-grid">
            <div>M</div>
            <div>S</div>
            <div>S</div>
            <div>R</div>
            <div>K</div>
            <div>J</div>
            <div>S</div>
            @for ($day = 1; $day <= 31; $day++)
                <div>{{ $day }}
        </div>
        @endfor
    </div>
</div>

<div class="stats-card">
    <h2 class="stats-title">STATISTIK STUDI</h2>
    <div class="stats-bar">
        <div class="bar" style="height: 4rem;"></div>
        <div class="bar" style="height: 5rem;"></div>
        <div class="bar" style="height: 6rem;"></div>
        <div class="bar" style="height: 3rem;"></div>
        <div class="bar" style="height: 2rem;"></div>
    </div>
    <div class="days">
        <div>SENIN</div>
        <div>SELASA</div>
        <div>RABU</div>
        <div>KAMIS</div>
        <div>JUMAT</div>
    </div>
</div>
</div>