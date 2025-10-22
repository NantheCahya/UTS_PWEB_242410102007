@extends('layouts.app')


@section('title','Dashboard')
@section('subtitle','Jelajahi rekomendasi wisata populer')


@section('content')
<div class="card">
<h3 style="margin-top:0">Halo, {{ $username ?? 'Tamu' }}!</h3>
<p style="color:var(--muted)">Berikut beberapa destinasi wisata unggulan di Indonesia.</p>


<div class="grid" style="margin-top:16px">
<div class="card">
<img src="/images/bromo.jpg" alt="Bromo" class="hero-img">
<h4>Gunung Bromo</h4>
<p style="color:var(--muted)">Gunung Bromo adalah gunung berapi aktif di Jawa Timur yang terkenal dengan keindahan matahari terbitnya. </p>
</div>


<div class="card">
<img src="/images/borobudur.jpg" alt="Borobudur" class="hero-img">
<h4>Candi Borobudur</h4>
<p style="color:var(--muted)">Candi Borobudur adalah candi Buddha terbesar di dunia yang terletak di Magelang, Jawa Tengah, terkenal dengan relief dan stupa megahnya.
</p>
</div>


<div class="card">
<img src="/images/rajaampat.jpg" alt="Raja Ampat" class="hero-img">
<h4>Raja Ampat</h4>
<p style="color:var(--muted)">Raja Ampat di Papua Barat terkenal dengan keindahan bawah lautnya yang menakjubkan, menjadikannya surga bagi para penyelam dunia.
</p>
</div>


<div class="card">
<img src="/images/labuanbajo.jpg" alt="Labuan Bajo" class="hero-img">
<h4>Labuan Bajo</h4>
<p style="color:var(--muted)">Labuan Bajo di Nusa Tenggara Timur adalah gerbang menuju Taman Nasional Komodo dan dikenal dengan pesona laut serta pemandangan matahari terbenamnya.
</p>
</div>


<div class="card">
<img src="/images/prambanan.jpg" alt="Prambanan" class="hero-img">
<h4>Candi Prambanan</h4>
<p style="color:var(--muted)">Candi Prambanan adalah kompleks candi Hindu terbesar di Indonesia yang terkenal dengan arsitektur megah dan kisah legenda Roro Jonggrang.</p>
</div>
</div>
</div>
@endsection